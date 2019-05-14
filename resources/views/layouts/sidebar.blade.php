
    <aside class="main-sidebar fixed offcanvas b-r sidebar-tabs" data-toggle='offcanvas'>
        <div class="sidebar">
            <div class="d-flex hv-100 align-items-stretch">
                <div class="indigo text-white">
                    <div class="nav mt-5 pt-5 flex-column nav-pills" id="v-pills-tab" role="tablist"
                         aria-orientation="vertical">
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                           aria-controls="v-pills-home" aria-selected="true"><i class="icon-inbox2"></i></a>
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                           aria-controls="v-pills-profile" aria-selected="false"><i class="icon-add"></i></a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                           aria-controls="v-pills-messages" aria-selected="false"><i class="icon-message"></i></a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                           aria-controls="v-pills-settings" aria-selected="false"><i class="icon-settings"></i></a>
                        <a href="">
                            <figure class="avatar">
                                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="">
                                <span class="avatar-badge online"></span>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="tab-content flex-grow-1" id="v-pills-tabContent">
                    <div class="tab-pane fade " id="v-pills-home" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                        <div class="relative brand-wrapper sticky b-b">
                            <div class="d-flex justify-content-between align-items-center p-3">
                                <div class="text-xs-center">
                                    <span class="font-weight-lighter s-18">Menu</span>
                                </div>
                                <div class="badge badge-danger r-0">New Panel</div>
                            </div>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="treeview"><a href="#">
                                    <i class="icon icon-sailing-boat-water s-24"></i> <span>Dashboard</span> <i
                                        class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="index.html"><i class="icon icon-folder5"></i>Panel Dashboard 1</a>
                                    </li>
                                    <li><a href="panel-page-dashboard1-rtl.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 1 - RTL</a>
                                    </li>
                                    <li><a href="panel-page-dashboard2.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 2</a>
                                    </li>
                                    <li><a href="panel-page-dashboard3.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 3</a>
                                    </li>
                                    <li><a href="panel-page-dashboard4.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 4</a>
                                    </li>
                                    <li><a href="panel-page-dashboard5.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 5</a>
                                    </li>
                                    <li><a href="panel-page-dashboard6.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 6</a>
                                    </li>
                                    <li><a href="panel-page-dashboard7.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 7</a>
                                    </li>
                                    <li><a href="panel-page-dashboard8.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 8</a>
                                    </li>
                                    <li><a href="panel-page-dashboard9.html"><i class="icon icon-folder5"></i>Panel
                                            Dashboard 9</a>
                                    </li>
                                    <li><a href="panel-page-dashboard10.html"><i class="icon icon-folder5"></i>Panel Dashboard 10</a></li>
                                    <li><a href="panel-page-dashboard11.html"><i class="icon icon-folder5"></i>Panel Dashboard 11</a></li>
                                </ul>
                            </li>
                            <li class="treeview"><a href="#">
                                    <i class="icon icon icon-package s-24"></i>
                                    <span>Products</span>
                                    <span class="badge r-3 badge-primary pull-right">4</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-page-products.html"><i class="icon icon-circle-o"></i>All
                                            Products</a>
                                    </li>
                                    <li><a href="panel-page-products-create.html"><i class="icon icon-add"></i>Add
                                            New </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview"><a href="#"><i class="icon icon-account_box s-24"></i>Users<i
                                        class=" icon-angle-left  pull-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-page-users.html"><i class="icon icon-circle-o"></i>All Users</a>
                                    </li>
                                    <li><a href="panel-page-users-create.html"><i class="icon icon-add"></i>Add User</a>
                                    </li>
                                    <li><a href="panel-page-profile.html"><i class="icon icon-user"></i>User Profile </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview"><a href="#">
                                    <i class="icon icon-package s-24"></i>
                                    <i class=" icon-angle-left  pull-right"></i>
                                    <span>Inbox</span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-page-inbox.html"><i class="icon icon-circle-o"></i>All Messages</a>
                                    </li>
                                    <li><a href="panel7-inbox.html"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                                    </li>
                                    <li><a href="panel8-inbox.html"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                                    </li>
                                    <li><a href="panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview ">
                                <a href="#">
                                    <i class="icon icon-package  s-24"></i> <span>Apps</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-page-chat.html"><i class="icon icon-circle-o"></i>Chat</a>
                                    </li>
                                    <li><a href="panel7-tasks.html"><i class="icon icon-circle-o"></i>Tasks / Todo</a>
                                    </li>
                                    <li><a href="panel-page-calendar.html"><i class="icon icon-date_range"></i>Calender</a>
                                    </li>
                                    <li><a href="panel-page-calendar2.html"><i class="icon icon-date_range"></i>Calender
                                            2</a>
                                    </li>
                                    <li><a href="panel-page-contacts.html"><i class="icon icon-circle-o"></i>Contacts</a>
                                    </li>
                                    <li><a href="panel1-projects.html"><i class="icon icon-circle-o"></i>Panel1 -
                                            Projects</a>
                                    </li>
                                    <li><a href="panel7-projects-list.html"><i class="icon icon-circle-o"></i>Panel7 -
                                            Projects List</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon icon-documents3 s-24"></i> <span>Pages</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="icon icon-documents3"></i>Blank Pages<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="panel-page-blank.html"><i class="icon icon-document"></i>Simple
                                                    Blank</a>
                                            </li>
                                            <li><a href="panel-page-blank-tabs.html"><i class="icon icon-document"></i>Tabs
                                                    Blank <i
                                                        class=" icon-angle-left  pull-right"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Auth Pages<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="login.html"><i class="icon icon-document"></i>Login Page 1</a>
                                            </li>
                                            <li><a href="login-2.html"><i class="icon icon-document"></i>Login Page 2</a>
                                            </li>
                                            <li><a href="login-3.html"><i class="icon icon-document"></i>Login Page 3</a>
                                            </li>
                                            <li><a href="login-4.html"><i class="icon icon-document"></i>Login Page 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon icon-bug text-red"></i>Error Pages<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="panel-page-404.html"><i class="icon icon-document"></i>404 Page</a>
                                            </li>
                                            <li><a href="panel-page-500.html"><i class="icon icon-document"></i>500 Page<i
                                                        class=" icon-angle-left  pull-right"></i></a>
                                            </li>
                                            <li><a href="panel-page-error.html"><i class="icon icon-document"></i>420 Page<i
                                                        class=" icon-angle-left  pull-right"></i></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon icon-documents3"></i>Other Pages<i
                                                class=" icon-angle-left  pull-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="panel-page-invoice.html"><i class="icon icon-document"></i>Invoice
                                                    Page</a>
                                            </li>
                                            <li><a href="panel-page-no-posts.html"><i class="icon icon-document"></i>No Post
                                                    Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon icon-goals-1  s-24"></i> <span>Elements</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-element-widgets.html">
                                            <i class="icon icon-widgets amber-text s-14"></i> <span>Widgets</span>
                                        </a>
                                    </li>
                                    <li><a href="panel-element-counters.html">
                                            <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>Counters</span>
                                        </a>
                                    <li><a href="panel-element-buttons.html">
                                            <i class="icon icon-touch_app amber-text s-14"></i> <span>Buttons</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="panel-element-typography.html">
                                            <i class="icon icon-text-width amber-text s-14"></i> <span>Typography</span>
                                        </a>
                                    </li>
                                    <li><a href="panel-element-tabels.html">
                                            <i class="icon icon-table amber-text s-14"></i> <span>Tables</span>
                                        </a>
                                    </li>
                                    <li><a href="panel-element-alerts.html">
                                            <i class="icon icon-exclamation-circle amber-text s-14"></i> <span>Alerts</span>
                                        </a>
                                    </li>
                                    <li><a href="panel-element-slider.html"><i
                                                class="icon icon-view_carousel amber-text s-14"></i>
                                            <span>Slider</span></a></li>
                                    <li><a href="panel-element-tabs.html"><i class="icon icon-folders2 amber-text s-14"></i>
                                            <span>Tabs</span></a></li>
                                    <li><a href="panel-element-progress-bars.html"><i
                                                class="icon icon-folders2 amber-text s-14"></i>
                                            <span>Progress Bars</span></a></li>
                                    <li><a href="panel-element-badges.html"><i class="icon icon-flag7 amber-text s-14"></i>
                                            <span>Badges</span></a></li>
                                    <li><a href="panel-element-preloaders.html"><i
                                                class="icon icon-data_usage amber-text s-14"></i>
                                            <span>Preloaders</span></a></li>
                                </ul>
                            </li>
                            <li class="treeview ">
                                <a href="#">
                                    <i class="icon icon-wpforms  s-24 "></i> <span>Forms & Plugins</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="panel-element-forms.html"><i
                                                class="icon icon-wpforms light-green-text"></i>Bootstrap
                                            Inputs</a>
                                    </li>
                                    <li><a href="form-jquery-validations.html"><i
                                                class="icon icon-note-important light-green-text"></i>
                                            Form Validation (Jquery)</a>
                                    </li>
                                    <li><a href="form-bootstrap-validations.html"><i
                                                class="icon icon-note-important light-green-text"></i>
                                            Form Validation (Bootstrap)</a>
                                    </li>
                                    <li><a href="panel-element-editor.html"><i class="icon icon-pen2 light-green-text"></i>Editor</a>
                                    </li>
                                    <li><a href="panel-element-toast.html"><i
                                                class="icon icon-notifications_active light-green-text"></i>Toasts</a>
                                    </li>
                                    <li><a href="panel-element-stepper.html"><i
                                                class="icon icon-burst_mode light-green-text"></i>Stepper</a>
                                    </li>
                                    <li><a href="panel-element-date-time-picker.html"><i
                                                class="icon icon-date_range light-green-text"></i>Date Time Picker</a>
                                    </li>
                                    <li><a href="panel-element-color-picker.html"><i
                                                class="icon icon-adjust light-green-text"></i>Color
                                            Picker</a>
                                    </li>
                                    <li><a href="panel-element-range-slider.html"><i
                                                class="icon icon-space_bar light-green-text"></i>Range
                                            Slider</a>
                                    </li>
                                    <li><a href="panel-element-select2.html"><i
                                                class="icon  icon-one-finger-click light-green-text"></i>Select 2</a>
                                    </li>
                                    <li><a href="panel-element-tags.html"><i class="icon  icon-tags3 light-green-text"></i>Tags</a>
                                    </li>
                                    <li><a href="panel-element-data-tables.html"><i
                                                class="icon icon-table light-green-text"></i>Data
                                            Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview"><a href="#">
                                    <i class="icon icon-bar-chart2  s-24"></i>
                                    <span>Charts</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="panel-element-charts-js.html"><i
                                                class="icon icon-area-chart pink-text s-14"></i><span>Charts.Js</span></a>
                                    </li>
                                    <li>
                                        <a href="panel-element-morris.html"><i
                                                class="icon icon-bubble_chart pink-text s-14"></i>Morris
                                            Charts</a>
                                    </li>
                                    <li>
                                        <a href="panel-element-echarts.html">
                                            <i class="icon icon-bar-chart-o pink-text s-14"></i>Echarts</a>
                                    </li>
                                    <li>
                                        <a href="panel-element-easy-pie-charts.html">
                                            <i class="icon icon-area-chart pink-text s-14"></i>Easy Pie Charts</a>
                                    </li>
                                    <li>
                                        <a href="panel-element-jqvmap.html">
                                            <i class="icon icon-map pink-text s-14"></i>Jqvmap</a>
                                    </li>
                                    <li>
                                        <a href="panel-element-sparklines.html">
                                            <i class="icon icon-line-chart2 pink-text s-14"></i>Sparklines</a>
                                    </li>
                                    <li>
                                        <a href="panel-element-float.html">
                                            <i class="icon icon-pie-chart pink-text s-14"></i>Float Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="treeview"><a href="#">
                                    <i class="icon icon-dialpad  s-24"></i>
                                    <span>Extra</span>
                                    <i class=" icon-angle-left  pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li>
                                        <a href="panel-element-letters.html">
                                            <i class="icon icon-brightness_auto light-blue-text s-14"></i>
                                            <span>Avatar Placeholders</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="panel-element-icons.html">
                                            <i class="icon icon-camera2 light-blue-text s-14"></i> <span>Icons</span>
                                        </a>
                                    </li>
                                    <li><a href="panel-element-colors.html">
                                            <i class="icon icon-palette light-blue-text s-14"></i> <span>Colors</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="relative brand-wrapper sticky b-b p-3">
                            <form>
                                <div class="form-group input-group-sm has-right-icon">
                                    <input class="form-control form-control-sm light r-30" placeholder="Search" type="text">
                                    <i class="icon-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="sticky slimScroll">

                            <div class="p-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

