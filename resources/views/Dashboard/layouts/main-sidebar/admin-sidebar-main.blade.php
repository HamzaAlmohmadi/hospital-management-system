


<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('Dashboard/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('Dashboard/img/brand/logo-white.png') }}" class="main-logo dark-theme"
                alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('Dashboard/img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . ($page = 'index')) }}"><img
                src="{{ URL::asset('Dashboard/img/brand/favicon-white.png') }}" class="logo-icon dark-theme"
                alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround"
                        src="{{ URL::asset('Dashboard/3.jpg') }}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                    <span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>

        <ul class="side-menu">

            <li class="side-item side-item-category">{{ trans('main-sidebar_trans.Main') }}</li>

            <li class="slide">
                <a class="side-menu__item" href="{{ route('dashboard.admin') }}"><svg
                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                        <path
                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                    </svg><span class="side-menu__label">{{ trans('main-sidebar_trans.index') }}</a>
            </li>

      

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6z" />
                    </svg>
                
                    <span class="side-menu__label">{{ trans('main-sidebar_trans.sections') }}</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item"
                            href="{{ route('Sections.index') }}">{{ trans('main-sidebar_trans.view_all') }}</a></li>
                </ul>
            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
   
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M21 5V3h-3.18C17.4 2.42 17 1.74 17 1s.4-1.42 1-2H6c.6.58 1 1.26 1 2s-.4 1.42-1 2H3v2h18zM7 3c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm10 0c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1z" />
                    </svg> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm1-13h-2v6H7v2h4v6h2v-6h4v-2h-4z"/>
                    </svg>
                    
                    

                    <span class="side-menu__label">{{ trans('main-sidebar_trans.doctors') }}</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item"
                            href="{{ route('Doctors.index') }}">{{ trans('main-sidebar_trans.view_all') }}</a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M12 2a7 7 0 0 0-7 7v5H4a2 2 0 0 0-2 2v1h20v-1a2 2 0 0 0-2-2h-1V9a7 7 0 0 0-7-7zm0 2a5 5 0 0 1 5 5v5h-2V9H9v5H7V9a5 5 0 0 1 5-5z"/>
                    </svg>
                    
                    <span class="side-menu__label">{{ trans('main-sidebar_trans.Services') }}</span><i
                        class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item"
                            href="{{ route('Service.index') }}">{{ trans('main-sidebar_trans.Single_service') }}</a>
                    </li>
                    <li><a class="slide-item"
                            href="{{ route('Add_GroupServices') }}">{{ trans('main-sidebar_trans.group_services') }}</a>
                    </li>
                    <li><a class="slide-item"
                            href="{{ route('insurance.index') }}">{{ trans('main-sidebar_trans.Insurance') }}</a></li>
                    <li><a class="slide-item"
                            href="{{ route('Ambulance.index') }}">{{ trans('main-sidebar_trans.ambulance') }}</a></li>
                    {{-- <li><a class="slide-item" href="#">{{ trans('main-sidebar_trans.Ambulance_calls') }}</a></li> --}}
                </ul>
            </li>



            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-4.41 0-8 1.79-8 4v2h16v-2c0-2.21-3.59-4-8-4z"/>
                    </svg>
                    
                    <span class="side-menu__label">المرضى </span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('Patients.create') }}">اضافة مريض</a></li>
                    <li><a class="slide-item" href="{{ route('Patients.index') }}">قائمة المرضى </a></li>

                </ul>
            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/>
                    </svg>
                    
                    <span class="side-menu__label">الفواتير</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('single_invoices') }}">فاتورة خدمة مفردة</a></li>
                    <li><a class="slide-item" href="{{ route('group_invoices') }}">فاتورة مجموعة خدمات</a></li>
                </ul>
            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">


                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-2-4v-4H8v-2h2V8h4v2h2v2h-2v4h-4z"/>
                    </svg>
                    
                    
                    <span class="side-menu__label">الحسابات</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('Receipt.index') }}">سند قبض</a></li>
                    <li><a class="slide-item" href="{{ route('Payment.index') }}">سند صرف</a></li>
                </ul>
            </li>


            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    

                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M12 4C9.24 4 7 6.24 7 9c0 2.85 2.92 7.21 5 9.88 2.11-2.69 5-7 5-9.88 0-2.76-2.24-5-5-5zm0 7.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                    </svg>
                    

                    <span class="side-menu__label">الاشعة</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('ray_employee.index') }}">قائمة موظفين الاشعة </a></li>
                    {{-- <li><a class="slide-item" href="{{ url('/' . $page='form-advanced') }}">قائمة الكشوفات</a></li> --}}
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">

                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M3 3h18v2H3zM10 5h4v7h5v9H5v-9h5V5z"/>
                    </svg>
                    
                    
                    <span class="side-menu__label">المختبر</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('laboratorie_employee.index') }}">قائمة موظفين المختبر
                        </a></li>
                </ul>
            </li>

            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . ($page = '#')) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                        <path d="M7 11h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2zm0-4h2v2h-2zm-4 0h2v2h-2zM7 7h2v2H7zm10 10h2v2h-2zm-4 0h2v2h-2zm-4 0h2v2H9zm-4-4h2v2H5zm0 4h2v2H5z"/>
                    </svg>
                    
                    
                    <span class="side-menu__label">المواعيد</span><i class="angle fe fe-chevron-down"></i></a>
                <ul class="slide-menu">
                    <li><a class="slide-item" href="{{ route('appointments.index') }}">قائمة المواعيد</a></li>
                    <li><a class="slide-item" href="{{ route('appointments.indexapproval') }}">قائمة المواعيد
                            المؤكدة</a></li>
                    <li><a class="slide-item" href="{{ url('/' . ($page = 'map-vector')) }}">قائمة المواعيد المنتهية</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>




</aside>
