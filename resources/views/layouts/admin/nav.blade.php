<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href=""><img src="{{url('templates/melody/images/logo.svg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href=""><img src="{{url('templates/melody/images/logo-mini.svg')}}" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item nav-search d-none d-md-flex">
                <div class="nav-link">
                    <div class="input-group">
                        <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                        </div>
                        <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Search">
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-flex">
                <div class="nav-link">
              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown"
                    data-toggle="dropdown">فارسی</span>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                        <a class="dropdown-item font-weight-medium" href="#">
                            انگلیسی
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            اسپانیایی
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            ترکی استانبولی
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-weight-medium" href="#">
                            عربی
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                   data-toggle="dropdown">
                    <i class="fas fa-bell mx-0"></i>
                    <span class="count">16</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                     aria-labelledby="notificationDropdown">
                    <a class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left">شما 16 اعلان جدید دارید
                        </p>
                        <span class="badge badge-pill badge-warning float-right">مشاهده همه</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-danger">
                                <i class="fas fa-exclamation-circle mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">خطایی رخ داده است</h6>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="fas fa-wrench mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">به روز رسانی تنظیمات</h6>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="far fa-envelope mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium">کاربر جدید ثبت نام کرد</h6>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                   data-toggle="dropdown"
                   aria-expanded="false">
                    <i class="fas fa-envelope mx-0"></i>
                    <span class="count">25</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                     aria-labelledby="messageDropdown">
                    <div class="dropdown-item">
                        <p class="mb-0 font-weight-normal float-left">شما 7 پیام خوانده نشده دارید
                        </p>
                        <span class="badge badge-info badge-pill float-right">مشاهده همه</span>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{url("")."/".getUser('image_path','admin')}}" alt="image" class="profile-pic" />

                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium">رضا افشار
                                <span class="float-left font-weight-light small-text">1 دقیقه قبل</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                جلسه کنسل شده است
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{url('templates/melody/images/faces/face2.jpg.png')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium">نسترن کریمی
                                <span class="float-left font-weight-light small-text">15 دقیقه قبل</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                محصولات جدید ارسال شد
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="{{url('templates/melody/images/faces/face3.jpg.png')}}" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium"> محمد رسولی
                                <span class="float-left font-weight-light small-text">18 دقیقه قبل</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                تغییر زمان کنفرانس
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="{{url(getUser("image_path","admin"))}}" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="fas fa-cog text-primary"></i>
                        تنظیمات
                    </a>
                    <div class="dropdown-divider"></div>
{{--                    <a class="dropdown-item" href="{{route("admin.logout",['locate',app('translator')->getLocale()])}}">--}}
{{--                        <i class="fas fa-power-off text-primary"></i>--}}
{{--                        خروج--}}
{{--                    </a>--}}
                </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
            <span class="fas fa-bars"></span>
        </button>
    </div>
</nav>
