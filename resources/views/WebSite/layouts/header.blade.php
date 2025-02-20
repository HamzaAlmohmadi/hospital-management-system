<div class="nav-outer clearfix">


    {{-- <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div> --}}
    {{-- <nav class="main-menu navbar-expand-md navbar-light">
        <div class="navbar-header">
            <!-- Togg le Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon flaticon-menu"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                <li class="current dropdown"><a href="#">الرئيسية</a>
                    <ul>
                        <li><a href="index.html">Home page 01</a></li>
                        <li><a href="index-4.html">Home page 04</a></li>
                        <li class="dropdown"><a href="#">Header Styles</a>
                            <ul>
                                <li><a href="index.html">Header Style One</a></li>
                                <li><a href="index-2.html">Header Style Two</a></li>
                                <li><a href="index-3.html">Header Style Three</a></li>
                                <li><a href="index-4.html">Header Style Four</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">من نحن</a>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="team.html">Our Team</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="comming-soon.html">Comming Soon</a></li>
                    </ul>
                </li>
                <li class="dropdown has-mega-menu"><a href="#">الصفحات</a>
                    <div class="mega-menu">
                        <div class="mega-menu-bar row clearfix">
                            <div class="column col-md-3 col-xs-12">
                                <h3>About Us</h3>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="services.html">Services</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>Doctors</h3>
                                <ul>
                                    <li><a href="doctors.html">Doctors</a></li>
                                    <li><a href="doctors-detail.html">Doctors Detail</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>Blog</h3>
                                <ul>
                                    <li><a href="blog.html">Our Blog</a></li>
                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>Shops</h3>
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-single.html">Shop Details</a></li>
                                    <li><a href="shoping-cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#">الاطباء</a>
                    <ul>
                        <li><a href="doctors.html">Doctors</a></li>
                        <li><a href="doctors-detail.html">Doctors Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">الاقسام</a>
                    <ul>
                        <li><a href="department.html">Department</a></li>
                        <li><a href="department-detail.html">Department Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">المقالات</a>
                    <ul>
                        <li><a href="blog.html">Our Blog</a></li>
                        <li><a href="blog-classic.html">Blog Classic</a></li>
                        <li><a href="blog-detail.html">Blog Detail</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">المتجر</a>
                    <ul>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="shop-single.html">Shop Details</a></li>
                        <li><a href="shoping-cart.html">Cart Page</a></li>
                        <li><a href="checkout.html">Checkout Page</a></li>
                    </ul>
                </li>

                <li><a href="contact.html">تواصل معانا</a></li>

                <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>

    </nav> --}}


    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="navbar-header">
            <!-- زر التبديل -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تبديل التنقل">
                <span class="icon flaticon-menu"></span>
            </button>
        </div>
    
        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
                {{-- <li class="current dropdown"><a href="#">الرئيسية</a>
                    <ul>
                        <li><a href="index.html">الصفحة الرئيسية 01</a></li>
                        <li><a href="index-4.html">الصفحة الرئيسية 04</a></li>
                        <li class="dropdown"><a href="#">أنواع الهيدر</a>
                            <ul>
                                <li><a href="index.html">النوع الأول</a></li>
                                <li><a href="index-2.html">النوع الثاني</a></li>
                                <li><a href="index-3.html">النوع الثالث</a></li>
                                <li><a href="index-4.html">النوع الرابع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">من نحن</a>
                    <ul>
                        <li><a href="about.html">من نحن</a></li>
                        <li><a href="team.html">فريقنا</a></li>
                        <li><a href="faq.html">الأسئلة الشائعة</a></li>
                        <li><a href="services.html">الخدمات</a></li>
                        <li><a href="gallery.html">المعرض</a></li>
                        <li><a href="comming-soon.html">قريباً</a></li>
                    </ul>
                </li>
                <li class="dropdown has-mega-menu"><a href="#">الصفحات</a>
                    <div class="mega-menu">
                        <div class="mega-menu-bar row clearfix">
                            <div class="column col-md-3 col-xs-12">
                                <h3>من نحن</h3>
                                <ul>
                                    <li><a href="about.html">من نحن</a></li>
                                    <li><a href="team.html">فريقنا</a></li>
                                    <li><a href="faq.html">الأسئلة الشائعة</a></li>
                                    <li><a href="services.html">الخدمات</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>الأطباء</h3>
                                <ul>
                                    <li><a href="doctors.html">الأطباء</a></li>
                                    <li><a href="doctors-detail.html">تفاصيل الأطباء</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>المدونة</h3>
                                <ul>
                                    <li><a href="blog.html">مدونتنا</a></li>
                                    <li><a href="blog-classic.html">المدونة الكلاسيكية</a></li>
                                    <li><a href="blog-detail.html">تفاصيل المدونة</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>المتاجر</h3>
                                <ul>
                                    <li><a href="shop.html">المتجر</a></li>
                                    <li><a href="shop-single.html">تفاصيل المتجر</a></li>
                                    <li><a href="shoping-cart.html">عربة التسوق</a></li>
                                    <li><a href="checkout.html">صفحة الدفع</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#">الأطباء</a>
                    <ul>
                        <li><a href="doctors.html">الأطباء</a></li>
                        <li><a href="doctors-detail.html">تفاصيل الأطباء</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">الأقسام</a>
                    <ul>
                        <li><a href="department.html">الأقسام</a></li>
                        <li><a href="department-detail.html">تفاصيل الأقسام</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">المدونة</a>
                    <ul>
                        <li><a href="blog.html">مدونتنا</a></li>
                        <li><a href="blog-classic.html">المدونة الكلاسيكية</a></li>
                        <li><a href="blog-detail.html">تفاصيل المدونة</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#">المتجر</a>
                    <ul>
                        <li><a href="shop.html">المتجر</a></li>
                        <li><a href="shop-single.html">تفاصيل المتجر</a></li>
                        <li><a href="shoping-cart.html">عربة التسوق</a></li>
                        <li><a href="checkout.html">صفحة الدفع</a></li>
                    </ul>
                </li> --}}


                <li class="current dropdown">
                    <a href="/">الرئيسية</a>
                    <ul>
                        <li><a href="#">الصفحة الرئيسية 01</a></li>
                        <li><a href="#">الصفحة الرئيسية 04</a></li>
                        <li class="dropdown">
                            <a href="#">أنواع الهيدر</a>
                            <ul>
                                <li><a href="#">النوع الأول</a></li>
                                <li><a href="#">النوع الثاني</a></li>
                                <li><a href="#">النوع الثالث</a></li>
                                <li><a href="#">النوع الرابع</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">من نحن</a>
                    <ul>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="#">فريقنا</a></li>
                        <li><a href="#">الأسئلة الشائعة</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">المعرض</a></li>
                        <li><a href="#">قريباً</a></li>
                    </ul>
                </li>
                <li class="dropdown has-mega-menu">
                    <a href="#">الصفحات</a>
                    <div class="mega-menu">
                        <div class="mega-menu-bar row clearfix">
                            <div class="column col-md-3 col-xs-12">
                                <h3>من نحن</h3>
                                <ul>
                                    <li><a href="#">من نحن</a></li>
                                    <li><a href="#">فريقنا</a></li>
                                    <li><a href="#">الأسئلة الشائعة</a></li>
                                    <li><a href="#">الخدمات</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>الأطباء</h3>
                                <ul>
                                    <li><a href="#">الأطباء</a></li>
                                    <li><a href="#">تفاصيل الأطباء</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>المدونة</h3>
                                <ul>
                                    <li><a href="#">مدونتنا</a></li>
                                    <li><a href="#">المدونة الكلاسيكية</a></li>
                                    <li><a href="#">تفاصيل المدونة</a></li>
                                </ul>
                            </div>
                            <div class="column col-md-3 col-xs-12">
                                <h3>المتاجر</h3>
                                <ul>
                                    <li><a href="#">المتجر</a></li>
                                    <li><a href="#">تفاصيل المتجر</a></li>
                                    <li><a href="#">عربة التسوق</a></li>
                                    <li><a href="#">صفحة الدفع</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">الأطباء</a>
                    <ul>
                        <li><a href="#">الأطباء</a></li>
                        <li><a href="#">تفاصيل الأطباء</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">الأقسام</a>
                    <ul>
                        <li><a href="#">الأقسام</a></li>
                        <li><a href="#">تفاصيل الأقسام</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">المدونة</a>
                    <ul>
                        <li><a href="#">مدونتنا</a></li>
                        <li><a href="#">المدونة الكلاسيكية</a></li>
                        <li><a href="#">تفاصيل المدونة</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">المتجر</a>
                    <ul>
                        <li><a href="#">المتجر</a></li>
                        <li><a href="#">تفاصيل المتجر</a></li>
                        <li><a href="#">عربة التسوق</a></li>
                        <li><a href="#">صفحة الدفع</a></li>
                    </ul>
                </li>
                
    

                <li><a href="#">تواصل معنا</a></li>
    
                {{-- <li class="dropdown"><a href="#">{{ LaravelLocalization::getCurrentLocaleNative() }}</a>
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li> --}}
            </ul>
        </div>
    </nav>

    <!-- Main Menu End-->

    <!-- Main Menu End-->
    <div class="outer-box clearfix">
        <!-- Main Menu End-->
        <div class="nav-box">
            <div class="nav-btn nav-toggler navSidebar-button"><span class="icon flaticon-menu-1"></span></div>
        </div>

        <!-- Social Box -->
        <ul class="social-box clearfix">
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
            <li><a title="تسجيل دخول" href="{{route('Dashboard.User')}}"><span class="fas fa-user"></span></a>
            </li>


        </ul>

        <!-- Search Btn -->
        <div class="search-box-btn"><span class="icon flaticon-search"></span></div>

    </div>
</div>
