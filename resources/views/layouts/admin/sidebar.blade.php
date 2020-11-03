<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{url("")."/".getUser('image_path','admin')}}" alt="image"/>
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{getUser("fname",'admin')." ".getUser("lname",'admin')}}
                    </p>
                    <p class="designation">
                        مدیر سایت
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.home',['locate'=>app('translator')->getLocale()])}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">داشبورد</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category',['locate'=>app('translator')->getLocale()])}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">مجموعه ها</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product',['locate'=>app('translator')->getLocale()])}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">محصولات</span>
            </a>
        </li>



        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.payment',['locate'=>app('translator')->getLocale()])}}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">  پرداخت ها</span>
            </a>
        </li>


        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#page-blog" aria-expanded="false"
               aria-controls="page-blog">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title"> قیمت گذاری</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-blog">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{route('admin.pricing.new',['locate'=>app('translator')->getLocale()])}}">  جدید  </a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{route('admin.pricing',['locate'=>app('translator')->getLocale()])}}">  لیست قیمت ها  </a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{route('admin.pricing_items',['locate'=>app('translator')->getLocale()])}}">  لیست آیتم ها  </a></li>

                </ul>
            </div>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#page-report" aria-expanded="false"
               aria-controls="page-blog">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title"> گزارشات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-report">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                                              href="{{route('admin.report.payment',['locate'=>app('translator')->getLocale()])}}">پرداخت
                            ها</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                                              href="{{route('admin.report.view',['locate'=>app('translator')->getLocale()])}}"> بازدید
                            ها</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
               aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title"> وبلاگ</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                                              href="{{route('admin.blog.new',['locate'=>app('translator')->getLocale()])}}">جدید</a>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                                                              href="{{route('admin.blogs',['locate'=>app('translator')->getLocale()])}}"> لیست
                            بلاگ ها</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
