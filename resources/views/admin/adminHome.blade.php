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
                            <h1 class="nav-title @if(env('DARKTHEME')==true) text-white @endif">Admin</h1>
                        </div>
                    </div>
                </div>
                @include('components.navbar')
            </div>
        </div>
        <div class="container-fluid relative animatedParent animateOnce my-3">
            <div class="row my-3">
                <div class="col-md-3">
                    <div class="card counter-box @if(env('DARKTHEME')==true) bg-silver @else white @endif r-5 p-3">
                        <div class="p-4">
                            <div class="float-right">
                                <span class="icon icon-note-list @if(env('DARKTHEME')==false) text-light-blue @endif s-48"></span>
                            </div>
                            <div class="counter-title @if(env('DARKTHEME')==false) text-light-blue @endif">Number of staff</div>
                            <h5 class="sc-counter mt-3">{{ $staff }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
