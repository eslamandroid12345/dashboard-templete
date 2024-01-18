<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("auth/images/logo_user.png")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Eslam Mohamed</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item ">
                    <a href="{{url('/')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            الرئيسيه
                        </p>
                    </a>
                </li>

{{--                @if(auth()->user()->hasRole('super-admin'))--}}
{{--                    --}}
{{--                @endif--}}


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>
                            الصلاحيات
                        </p>
                    </a>
                </li>

                {{--start nav--}}


                {{--end nav--}}


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                           الطلاب
                            <span class="badge badge-danger right">5</span>

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-home nav-icon"></i>
                        <p>الرئيسيه</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bars nav-icon"></i>
                        <p>الشروط والاحكام</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-info nav-icon"></i>
                        <p>معلومات عننا</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-question nav-icon"></i>
                        <p>الاسئله</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-box-open nav-icon"></i>
                        <p>
                             الرسائل
                            <span class="badge badge-danger right">3</span>
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-edit nav-icon"></i>
                        <p>الشروط والاحكام</p>
                    </a>
                </li>



                <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-text-height"></i>
                            <p>
                               الصفحات
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-home nav-icon"></i>
                                    <p>الرئيسيه</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-bars nav-icon"></i>
                                    <p>الشروط والاحكام</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-info nav-icon"></i>
                                    <p>معلومات عننا</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-question nav-icon"></i>
                                    <p>الاسئله</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-box-open nav-icon"></i>
                                    <p>الرسائل</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-edit nav-icon"></i>
                                    <p>الشروط والاحكام</p>
                                </a>
                            </li>
                        </ul>
                    </li>
            </ul>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
