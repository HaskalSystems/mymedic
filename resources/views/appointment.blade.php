@extends('layouts.app')

@section('content')
    <a href="#" data-toggle="push-menu" class="paper-nav-toggle left ml-2 fixed">
        <i></i>
    </a>
    <div class="has-sidebar-left has-sidebar-tabs">
        @include('components.searchbar')
        <div class="sticky">
            <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
                <div class="relative">
                    <div class="d-flex">
                        <div class="d-none d-md-block">
                            <h1 class="nav-title @if(env('DARKTHEME')==true) text-white @endif">Appointments</h1>
                        </div>
                    </div>
                </div>
                @include('components.navbar')
            </div>
        </div>
        <div class="container-fluid relative animatedParent animateOnce my-3">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card r-0 b-0 @if(env('DARKTHEME')==false) shadow @endif">
                                <div class="card-header @if(env('DARKTHEME')==false) white @endif">
                                    <h6>Find an appointment</h6>
                                </div>

                                <div class="card-body b-t pt-2 pb-2 no-b">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="MRN" @if(env('DARKTHEME')==true) style="background: transparent;" @endif/>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-2"><i class="icon-search mr-2"></i>Search
                                        </button>
                                    </div>
                                </div>
                            <!-- /.box-body -->
                        </div>

                        <div class="card r-0 b-0 shadow mt-2">
                            <form class="form-material" method="post">
                                @csrf

                                <div class="card-header @if(env('DARKTHEME')==false) white @endif">
                                    <h6>Create a new appointment</h6>
                                </div>

                                <div class="card-body b-t pt-2 pb-2 no-b">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">MRN</label>
                                            <input id="mrn" type="text" class="form-control" name="mrn" @if(env('DARKTHEME')==true) style="background: transparent;" @endif>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <label class="form-label">Date</label>
                                        <div class="form-line">

                                            <input id="date" name="date" type="text" class="date-time-picker form-control"
                                                   data-options='{
                                                   "mask":true,
                                                   "format":"d/m/Y H:i",
                                                    "allowTimes":["08:00", "08:30", "09:00", "09:30", "10:00", "10:30", "11:00", "11:30","12:00","14:00","14:30","15:00","15:30","16:00"]}' @if(env('DARKTHEME')==true) style="background: transparent;" @endif/>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-2"><i class="icon-search mr-2"></i>Search
                                    </button>
                                </div>
                            </form>
                            <!-- /.box-body -->
                        </div>

                        <!-- /. box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card no-r no-b shadow">
                            <div class="card-body p-0">
                                <div id='calendar'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="appointmentInfoModal" tabindex="-1" role="dialog" aria-labelledby="appointmentInfoModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentInfoModalLabel">Appointment Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modal-content">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(env('DARKTHEME')==true)
        <style>
            .fc-toolbar {
                background-color: #272C33 !important;
            }

            .fc-today {
                background-color: #303841 !important;
            }
        </style>
    @endif
    <script>
        $(document).ready(function() {
            let calendarEl = document.getElementById('calendar');
            window.calendar = new window.FullCalendar(calendarEl, {
                plugins: [ window.timeGridPlugin ],
                defaultView: 'timeGridWeek',
                events: {!! $appointments !!},
                eventClick: function(info) {
                    info.jsEvent.preventDefault(); // don't let the browser navigate

                    //window.open('/appointments/'+info.event.id);

                    $('#modal-content').html(''); // leave it blank before ajax call

                    $.ajax({
                        url: '/appointments/'+info.event.id,
                        type: 'GET',
                        dataType: 'html'
                    })
                        .done(function(data){
                            console.log(data);
                            $('#appointmentInfoModal').modal('show')
                            $('#modal-content').html('');
                            $('#modal-content').html(data); // load response
                        })
                        .fail(function(){
                            $('#modal-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                        });
                },
                eventMouseEnter: function(info){
                    info.el.style.cursor = 'pointer';
                }
            });

            window.calendar.render();
        });

        function submit() {
            var d = $('#date').datetimepicker('getValue');
            var mrn = "MRN: "+$('#mrn').val();
            window.calendar.addEvent({
                title: mrn,
                start: d,
            });
        };
    </script>
@endsection
