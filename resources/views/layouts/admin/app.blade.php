<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>

    @include('layouts.admin.head')


</head>

<body class="rtl">
<div style="height: 0"  id='cropper'></div>

<!-- Preloader -->
{{--<div id="global-loader">--}}
{{--    <div class="loader-demo-box">--}}
{{--        <div class="square-box-loader">--}}
{{--            <div class="square-box-loader-container">--}}
{{--                <div class="square-box-loader-corner-top"></div>--}}
{{--                <div class="square-box-loader-corner-bottom"></div>--}}
{{--            </div>--}}
{{--            <div class="square-box-loader-square"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Preloader -->

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('layouts.admin.nav')

<!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close fa fa-times"></i>
                <p class="settings-heading">پوسته سایدبار</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>
                    روشن
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>
                    تیره
                </div>
                <p class="settings-heading mt-2">پوسته هدر</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close fa fa-times"></i>
            <ul class="nav nav-tabs" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">لیست انجام</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">چت ها</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="کار جدید ...">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">
                                    افزودن
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        جلسه با تیم پروژه در ساعت 3 بعد از ظهر
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        آماده کردن متن سخنرانی کنفرانس
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        خرید بلیط پرواز به پاریس
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        نوشتن برنامه ملاقات های هفته آینده
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        بازبینی پروژه
                                    </label>
                                </div>
                                <i class="remove fa fa-times-circle"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="events py-4 border-bottom px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="fa fa-times-circle text-primary mr-2"></i>
                            <span>11 اسفند 98</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">ایجاد پروژه</p>
                        <p class="text-gray mb-0">ساختن پارت های پروژه</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="fa fa-times-circle text-primary mr-2"></i>
                            <span>18 اسفند 98</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">جلسه با مهندس افشار</p>
                        <p class="text-gray mb-0 ">تماس با مهندس محمدی</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">دوستان</p>
                        <small
                            class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">مشاهده
                            همه</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face1.jpg.png')}}" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>رضا کریمی</p>
                                <p>آنلاین</p>
                            </div>
                            <small class="text-muted my-auto">19 دقیقه قبل</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face2.jpg.png')}}" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>نسترن</p>
                                </div>
                                <p>خیلی وقت پیش</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 دقیقه قبل</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face3.jpg.png')}}" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>سعید توسلی</p>
                                <p>آنلاین</p>
                            </div>
                            <small class="text-muted my-auto">14 دقیقه قبل</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face4.jpg.png')}}" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <p>فرشاد</p>
                                <p>خیلی وقت پیش</p>
                            </div>
                            <small class="text-muted my-auto">2 دقیقه قبل</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face5.jpg')}}" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>نیلوفر</p>
                                <p>آنلاین</p>
                            </div>
                            <small class="text-muted my-auto">5 دقیقه قبل</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="{{url('templates/melody/images/faces/face6.jpg.png')}}" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>مرتضی نجفی</p>
                                <p>آنلاین</p>
                            </div>
                            <small class="text-muted my-auto">47 دقیقه قبل</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->

        @include('layouts.admin.sidebar')
        <div class="main-panel">

            @yield('content')
        </div>
        <!-- partial -->
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->


@include('layouts.admin.footer')
@include('layouts.admin.js')


</body>
</html>
