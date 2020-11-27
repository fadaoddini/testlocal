<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <base href="http://localhost/MVC/">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK الگوی مدیریتی تمام ریسپانسیو - داشبورد فروش </title>
    <link rel="icon" type="image/x-icon" href="public/admin/assets/img/favicon.ico"/>
    <link href="public/admin/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="public/admin/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="public/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL public/admin/plugins/CUSTOM STYLES -->
    <link href="public/admin/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="public/admin/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL public/admin/plugins/CUSTOM STYLES -->

</head>

<?php echo "localhost/MVC/"?>
<body class="sidebar-noneoverflow">
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="public/admin/assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> کورک </a>
            </li>
            <li class="nav-item toggle-sidebar">
                <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg></a>
            </li>
        </ul>

        <ul class="navbar-item flex-row navbar-dropdown">
            <li class="nav-item dropdown apps-dropdown more-dropdown md-hidden">
                <div class="dropdown  custom-dropdown-icon">
                    <a class="dropdown-toggle btn" href="#" role="button" id="appSection" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-crosshair"><circle cx="12" cy="12" r="10"></circle><line x1="22" y1="12" x2="18" y2="12"></line><line x1="6" y1="12" x2="2" y2="12"></line><line x1="12" y1="6" x2="12" y2="2"></line><line x1="12" y1="22" x2="12" y2="18"></line></svg><span>برنامه ها</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                    <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="appSection">
                        <a class="dropdown-item" data-value="Chat" href="apps_chat.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> چت</a>
                        <a class="dropdown-item" data-value="Mailbox" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> صندوق پستی</a>
                        <a class="dropdown-item" data-value="Todo" href="apps_todoList.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> لیست انجام کار</a>
                        <a class="dropdown-item" data-value="Notes" href="apps_notes.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg> یادداشت</a>
                        <a class="dropdown-item" data-value="scrumboard" href="apps_scrumboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg> صفحه اسکراب</a>
                        <a class="dropdown-item" data-value="Contacts" href="apps_contacts.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> مخاطبین</a>
                        <a class="dropdown-item" data-value="Invoice" href="apps_invoice.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg> لیست فاکتورها</a>
                        <a class="dropdown-item" data-value="Calendar" href="apps_calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> تقویم</a>
                    </div>
                </div>
            </li>
        </ul>

        <ul class="navbar-item flex-row search-ul">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="جستجو کنید...">
                    </div>
                </form>
            </li>
        </ul>
        <ul class="navbar-item flex-row navbar-dropdown">
            <li class="nav-item dropdown language-dropdown more-dropdown">
                <div class="dropdown  custom-dropdown-icon">
                    <a class="dropdown-toggle btn" href="#" role="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/admin/assets/img/ca.png" class="flag-width" alt="flag"><span>انگلیسی</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                    <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="langDropdown">
                        <a class="dropdown-item" data-img-value="de" data-value="German" href="javascript:void(0);"><img src="public/admin/assets/img/de.png" class="flag-width" alt="flag"> آلمانی</a>
                        <a class="dropdown-item" data-img-value="jp" data-value="Japanese" href="javascript:void(0);"><img src="public/admin/assets/img/jp.png" class="flag-width" alt="flag"> ژاپنی</a>
                        <a class="dropdown-item" data-img-value="fr" data-value="French" href="javascript:void(0);"><img src="public/admin/assets/img/fr.png" class="flag-width" alt="flag"> فرانسوی</a>
                        <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img src="public/admin/assets/img/ca.png" class="flag-width" alt="flag"> انگلیسی</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg><span class="badge badge-primary"></span>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="messageDropdown">
                    <div class="">
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">م ر</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">محسن رضایی</h5>
                                            <p class="msg-title">بروزرسانی اکانت</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">
                                <div class="media">
                                    <div class="user-img">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">ه ش</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">هومن شکیبا</h5>
                                            <p class="msg-title">پیام شما</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">ز ج</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">زهرا جوان</h5>
                                            <p class="msg-title">اکانت شما بروز شد</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media server-log">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">راه اندازی مجدد سرور</h6>
                                        <p class="">45 دقیقه دیگر</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">لایسنس به زودی منقضی می شود</h6>
                                        <p class="">8 ساعت دیگر</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media file-upload">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <div class="media-body">
                                    <div class="data-info">
                                        <h6 class="">Portfolio.pdf</h6>
                                        <p class="">670 kb</p>
                                    </div>

                                    <div class="icon-status">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
                    <div class="user-profile-section">
                        <div class="media mx-auto">
                            <img src="public/admin/assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                            <div class="media-body">
                                <h5>ایمان پاکروح</h5>
                                <p>مدیر پروژه</p>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="user_profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <span>پروفایل من</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="apps_mailbox.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> <span>صندوق ورودی من</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth_lockscreen.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> <span>قفل کردن صفحه</span>
                        </a>
                    </div>
                    <div class="dropdown-item">
                        <a href="auth_login.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> <span>خروج</span>
                        </a>
                    </div>
                </div>
</div>
</li>
</ul>
</header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="profile-info">
                <figure class="user-cover-image"></figure>
                <div class="user-info">
                    <img src="public/admin/assets/img/90x90.jpg" alt="avatar">
                    <h6 class="">ایمان پاکروح</h6>
                    <p class="">مدیر پروژه</p>
                </div>
            </div>
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu active">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>داشبورد</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu recent-submenu mini-recent-submenu list-unstyled show" id="dashboard" data-parent="#accordionExample">
                        <li class="active">
                            <a href="index.html"> فروش ها </a>
                        </li>
                        <li>
                            <a href="index2.html"> تجزیه و تحلیل </a>
                        </li>
                    </ul>
                </li>

                <li class="menu md-visible menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>برنامه ها</span></div>
                </li>

                <li class="menu md-visible">
                    <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            <span>چت</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_mailbox.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <span>صندوق پستی</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_todoList.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                            <span>لیست انجام کار</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_notes.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                            <span>یادداشت</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_scrumboard.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                            <span>صفحه اسکراب</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_contacts.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>مخاطبین</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_invoice.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                            <span>لیست فاکتورها</span>
                        </div>
                    </a>
                </li>

                <li class="menu md-visible">
                    <a href="apps_calendar.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                            <span>تقویم</span>
                        </div>
                    </a>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>رابط کاربری</span></div>
                </li>

                <li class="menu">
                    <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>اجزاء</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                        <li>
                            <a href="component_tabs.html"> زبانه ها </a>
                        </li>
                        <li>
                            <a href="component_accordion.html"> آکاردئون ها </a>
                        </li>
                        <li>
                            <a href="component_modal.html"> مودال ها </a>
                        </li>
                        <li>
                            <a href="component_cards.html"> کارت ها </a>
                        </li>
                        <li>
                            <a href="component_bootstrap_carousel.html">کاروسول</a>
                        </li>
                        <li>
                            <a href="component_blockui.html"> مسدود کردن کاربر </a>
                        </li>
                        <li>
                            <a href="component_countdown.html"> شمارش معکوس </a>
                        </li>
                        <li>
                            <a href="component_counter.html"> پیشخوان </a>
                        </li>
                        <li>
                            <a href="component_sweetalert.html"> هشدارهای شیرین </a>
                        </li>
                        <li>
                            <a href="component_timeline.html"> جدول زمانی </a>
                        </li>
                        <li>
                            <a href="component_snackbar.html"> اطلاعیه ها </a>
                        </li>
                        <li>
                            <a href="component_session_timeout.html"> پایان جلسه </a>
                        </li>
                        <li>
                            <a href="component_media_object.html"> رسانه هدف </a>
                        </li>
                        <li>
                            <a href="component_list_group.html"> لیست گروه </a>
                        </li>
                        <li>
                            <a href="component_pricing_table.html"> جدول خرید </a>
                        </li>
                        <li>
                            <a href="component_lightbox.html"> لایت باکس </a>
                        </li>
                    </ul>
                </li>


                <li class="menu">
                    <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            <span>عناصر</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                        <li>
                            <a href="element_alerts.html"> هشدارها </a>
                        </li>
                        <li>
                            <a href="element_avatar.html"> آواتار </a>
                        </li>
                        <li>
                            <a href="element_badges.html"> نشانها </a>
                        </li>
                        <li>
                            <a href="element_breadcrumbs.html"> نشانگر موقعیت </a>
                        </li>
                        <li>
                            <a href="element_buttons.html"> دکمه ها </a>
                        </li>
                        <li>
                            <a href="element_buttons_group.html"> گروه های دکمه ای </a>
                        </li>
                        <li>
                            <a href="element_color_library.html"> کتابخانه رنگ </a>
                        </li>
                        <li>
                            <a href="element_dropdown.html"> کشویی </a>
                        </li>
                        <li>
                            <a href="element_infobox.html"> جعبه اطلاعات </a>
                        </li>
                        <li>
                            <a href="element_jumbotron.html"> جومبوترن </a>
                        </li>
                        <li>
                            <a href="element_loader.html"> لودر </a>
                        </li>
                        <li>
                            <a href="element_pagination.html"> صفحه </a>
                        </li>
                        <li>
                            <a href="element_popovers.html"> توضیحات </a>
                        </li>
                        <li>
                            <a href="element_progress_bar.html"> نوار پیشرفت </a>
                        </li>
                        <li>
                            <a href="element_search.html"> جستجو </a>
                        </li>
                        <li>
                            <a href="element_tooltips.html"> نکات راهنمایی </a>
                        </li>
                        <li>
                            <a href="element_treeview.html"> نمای درختی </a>
                        </li>
                        <li>
                            <a href="element_typography.html"> تایپوگرافی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="fonticons.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                            <span>فونت آیکون</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="widgets.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                            <span>ابزارک ها</span>
                        </div>
                    </a>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>جداول و فرم ها</span></div>
                </li>

                <li class="menu">
                    <a href="table_basic.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            <span>جداول</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#datatables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            <span>جداول داده</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="datatables" data-parent="#accordionExample">
                        <li>
                            <a href="table_dt_basic.html"> پایه ای </a>
                        </li>
                        <li>
                            <a href="table_dt_basic-dark.html"> تاریک </a>
                        </li>
                        <li>
                            <a href="table_dt_ordering_sorting.html"> ترتیب مرتب سازی </a>
                        </li>
                        <li>
                            <a href="table_dt_multi-column_ordering.html"> چند ستونه </a>
                        </li>
                        <li>
                            <a href="table_dt_multiple_tables.html"> جداول چندگانه</a>
                        </li>
                        <li>
                            <a href="table_dt_alternative_pagination.html"> پیغام صفحه</a>
                        </li>
                        <li>
                            <a href="table_dt_custom.html"> سفارشی </a>
                        </li>
                        <li>
                            <a href="table_dt_range_search.html"> دامنه جستجو </a>
                        </li>
                        <li>
                            <a href="table_dt_html5.html"> صادرات HTML5</a>
                        </li>
                        <li>
                            <a href="table_dt_live_dom_ordering.html"> سفارش DOM زنده </a>
                        </li>
                        <li>
                            <a href="table_dt_miscellaneous.html"> متفرقه </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            <span>فرم ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="forms" data-parent="#accordionExample">
                        <li>
                            <a href="form_bootstrap_basic.html"> پایه ای </a>
                        </li>
                        <li>
                            <a href="form_input_group_basic.html"> گروه ورودی </a>
                        </li>
                        <li>
                            <a href="form_layouts.html"> چیدمان </a>
                        </li>
                        <li>
                            <a href="form_validation.html"> اعتبار سنجی </a>
                        </li>
                        <li>
                            <a href="form_input_mask.html"> ماسک ورودی </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_select.html"> انتخاب Bootstrap </a>
                        </li>
                        <li>
                            <a href="form_select2.html"> انتخاب 2 </a>
                        </li>
                        <li>
                            <a href="form_bootstrap_touchspin.html"> چرخش لمسی </a>
                        </li>
                        <li>
                            <a href="form_maxlength.html"> بیشترین طول </a>
                        </li>
                        <li>
                            <a href="form_checkbox_radio.html"> چک باکس ها و ردیو ها </a>
                        </li>
                        <li>
                            <a href="form_switches.html"> سوئیچ ها </a>
                        </li>
                        <li>
                            <a href="form_wizard.html"> مراحل نصب </a>
                        </li>
                        <li>
                            <a href="form_fileupload.html"> بارگذاری پرونده </a>
                        </li>
                        <li>
                            <a href="form_quill.html"> ویرایشگر Quill </a>
                        </li>
                        <li>
                            <a href="form_markdown.html"> ویرایشگر Markdown </a>
                        </li>
                        <li>
                            <a href="form_date_range_picker.html"> تاریخ و دامنه انتخابگر </a>
                        </li>
                        <li>
                            <a href="form_clipboard.html"> کلیپ بورد </a>
                        </li>
                        <li>
                            <a href="form_typeahead.html"> تایپ پد </a>
                        </li>
                    </ul>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>کاربر و صفحات</span></div>
                </li>

                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span>کاربران</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="user_profile.html"> پروفایل </a>
                        </li>
                        <li>
                            <a href="user_account_setting.html"> تنظیمات اکانت </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span>صفحات</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                        <li>
                            <a href="pages_helpdesk.html"> راهنما </a>
                        </li>
                        <li>
                            <a href="pages_contact_us.html"> فرم تماس </a>
                        </li>
                        <li>
                            <a href="pages_faq.html"> سؤالات متداول </a>
                        </li>
                        <li>
                            <a href="pages_faq2.html"> سؤالات متداول 2 </a>
                        </li>
                        <li>
                            <a href="pages_privacy.html"> سیاست های حفظ حریم شخصی </a>
                        </li>
                        <li>
                            <a href="pages_coming_soon.html"> به زودی </a>
                        </li>
                        <li>
                            <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> ارور <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages">
                                <li>
                                    <a href="pages_error404.html"> 404 </a>
                                </li>
                                <li>
                                    <a href="pages_error500.html"> 500 </a>
                                </li>
                                <li>
                                    <a href="pages_error503.html"> 503 </a>
                                </li>
                                <li>
                                    <a href="pages_maintenence.html"> نگهداری </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu menu-heading">
                    <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>عناصر اضافی</span></div>
                </li>

                <li class="menu">
                    <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <span>احراز هویت</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                        <li>
                            <a href="auth_login_boxed.html"> جعبه ورود </a>
                        </li>
                        <li>
                            <a href="auth_register_boxed.html"> جعبه ثبت نام </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen_boxed.html"> جعبه بازکردن </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery_boxed.html"> جعبه بازیابی ID </a>
                        </li>
                        <li>
                            <a href="auth_login.html"> ورود </a>
                        </li>
                        <li>
                            <a href="auth_register.html"> ثبت نام </a>
                        </li>
                        <li>
                            <a href="auth_lockscreen.html"> بازکردن </a>
                        </li>
                        <li>
                            <a href="auth_pass_recovery.html"> بازیابی ID </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="dragndrop_dragula.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                            <span>کشیدن و انداختن</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="map_jvector.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                            <span>نقشه ها</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="charts_apex.html" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                            <span>نمودار ها</span>
                        </div>
                    </a>
                </li>

                <li class="menu">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                            <span>کیت استارت</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                        <li>
                            <a href="starter_kit_blank_page.html"> صفحه خالی </a>
                        </li>
                        <li>
                            <a href="starter_kit_boxed.html"> جعبه </a>
                        </li>
                        <li>
                            <a href="starter_kit_collapsible_menu.html"> قابل جمع شدن </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="https://sotonshop.ir/demo/cork/go/Docs/Docs-fa/" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                            <span>مستندات</span>
                        </div>
                    </a>
                </li>

            </ul>

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        <div class="widget-heading">
                            <h5 class="">درآمد</h5>
                            <ul class="tabs tab-pills">
                                <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">ماهانه</a></li>
                            </ul>
                        </div>

                        <div class="widget-content">
                            <div class="tabs tab-content">
                                <div id="content_1" class="tabcontent">
                                    <div id="revenueMonthly"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-two">
                        <div class="widget-heading">
                            <h5 class="">فروش بر اساس دسته بندی</h5>
                        </div>
                        <div class="widget-content">
                            <div id="chart-2" class=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-two">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-content">
                                    <span class="w-value">فروش روزانه</span>
                                    <span class="w-numeric-title">برای جزئیات بیشتر به ستون ها بروید.</span>
                                </div>
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                </div>
                            </div>
                            <div class="w-chart">
                                <div id="daily-sales"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                    <div class="widget-three">
                        <div class="widget-heading">
                            <h5 class="">خلاصه</h5>
                        </div>
                        <div class="widget-content">

                            <div class="order-summary">

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>درآمد</h6>
                                            <p class="summary-count">92600 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>سود</h6>
                                            <p class="summary-count">37500 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="summary-list">
                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                    </div>
                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>هزینه ها</h6>
                                            <p class="summary-count">550000 تومان</p>
                                        </div>

                                        <div class="w-summary-stats">
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                </div>
                                <div class="w-content">
                                    <span class="w-value">3,192</span>
                                    <span class="w-numeric-title">کل سفارشات</span>
                                </div>
                            </div>
                            <div class="w-chart">
                                <div id="total-orders"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-one">
                        <div class="widget-heading">
                            <h5 class="">معاملات</h5>
                        </div>

                        <div class="widget-content">
                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>قبض برق</h4>
                                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>-16000 تومان</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">SP</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>پارک شون</h4>
                                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                                        </div>
                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+66400 تومان</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="avatar avatar-xl">
                                                <span class="avatar-title rounded-circle">AD</span>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>امی دیاز</h4>
                                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-inc">
                                        <p><span>+64000 تومان</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>

                            <div class="transactions-list">
                                <div class="t-item">
                                    <div class="t-company-name">
                                        <div class="t-icon">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                            </div>
                                        </div>
                                        <div class="t-name">
                                            <h4>نتفلیکس</h4>
                                            <p class="meta-date">4 خرداد 1:00بعد از ظهر</p>
                                        </div>

                                    </div>
                                    <div class="t-rate rate-dec">
                                        <p><span>- تومان 32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-activity-four">

                        <div class="widget-heading">
                            <h5 class="">فعالیت های اخیر</h5>
                        </div>

                        <div class="widget-content">

                            <div class="mt-container mx-auto">
                                <div class="timeline-line">

                                    <div class="item-timeline timeline-primary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p><span>بروزرسانی</span> گزارشات سرور</p>
                                            <span class="badge badge-danger">در انتظار</span>
                                            <p class="t-time">همین الان</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>ارسال نامه به <a href="javascript:void(0);">HR</a> و <a href="javascript:void(0);">ادمین</a></p>
                                            <span class="badge badge-success">تکمیل شد</span>
                                            <p class="t-time">2 دقیقه پیش</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-danger">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>پشتیبان گیری <span>فایل EOD</span></p>
                                            <span class="badge badge-danger">در انتظار</span>
                                            <p class="t-time">14:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>جمع آوری اسناد از <a href="javascript:void(0);">سارا</a></p>
                                            <span class="badge badge-success">تکمیل شد</span>
                                            <p class="t-time">16:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>تماس کنفرانسی با <a href="javascript:void(0);">مدیر بازاریابی</a>.</p>
                                            <span class="badge badge-primary">در حال پیش رفت</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>راه اندازی مجدد سرور</p>
                                            <span class="badge badge-success">تکمیل شده</span>
                                            <p class="t-time">17:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>جزئیات قرارداد را به فریلنسر ارسال کنید</p>
                                            <span class="badge badge-danger">در انتظار</span>
                                            <p class="t-time">18:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-dark">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>مهدی می خواهد زمان پروژه را افزایش دهد.</p>
                                            <span class="badge badge-primary">در حال پیش رفت</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-success">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>سرور برای حفظ و نگهداری</p>
                                            <span class="badge badge-success">تکمیل شده</span>
                                            <p class="t-time">19:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-secondary">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>پیوند مخرب شناسایی شد</p>
                                            <span class="badge badge-warning">مسدود شده</span>
                                            <p class="t-time">20:00</p>
                                        </div>
                                    </div>

                                    <div class="item-timeline  timeline-warning">
                                        <div class="t-dot" data-original-title="" title="">
                                        </div>
                                        <div class="t-text">
                                            <p>راه اندازی مجدد سرور</p>
                                            <span class="badge badge-success">تکمیل شده</span>
                                            <p class="t-time">23:00</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tm-action-btn">
                                <button class="btn">مشاهده همه <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">

                    <div class="widget widget-account-invoice-one">

                        <div class="widget-heading">
                            <h5 class="">اطلاعات حساب</h5>
                        </div>

                        <div class="widget-content">
                            <div class="invoice-box">

                                <div class="acc-total-info">
                                    <h5>تعادل</h5>
                                    <p class="acc-amount">470000 تومان</p>
                                </div>

                                <div class="inv-detail">
                                    <div class="info-detail-1">
                                        <p>پلن ماهیانه</p>
                                        <p>199000 تومان</p>
                                    </div>
                                    <div class="info-detail-2">
                                        <p>مالیات</p>
                                        <p>17000 تومان</p>
                                    </div>
                                    <div class="info-detail-3 info-sub">
                                        <div class="info-detail">
                                            <p>اضافی در این ماه</p>
                                            <p>-2500 تومان</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>اشتراک سالانه Netflix</p>
                                            <p>0 تومان</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>دیگر</p>
                                            <p>-3000 تومان</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="inv-action">
                                    <a href="" class="btn btn-outline-dark">خلاصه</a>
                                    <a href="" class="btn btn-danger">انتقال</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-two">

                        <div class="widget-heading">
                            <h5 class="">سفارشات اخیر</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">مشتری</div></th>
                                        <th><div class="th-content">محصول</div></th>
                                        <th><div class="th-content">صورتحساب</div></th>
                                        <th><div class="th-content th-heading">قیمت</div></th>
                                        <th><div class="th-content">وضعیت</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">اندی کینگ</div></td>
                                        <td><div class="td-content product-brand">نایک اسپرت</div></td>
                                        <td><div class="td-content">#76894</div></td>
                                        <td><div class="td-content pricing"><span class="">88000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">حمل شده</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">ایرین کالینز</div></td>
                                        <td><div class="td-content product-brand">بلندگو</div></td>
                                        <td><div class="td-content">#75844</div></td>
                                        <td><div class="td-content pricing"><span class="">840000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">پرداخت شده</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">لوری فاکس</div></td>
                                        <td><div class="td-content product-brand">دوربین</div></td>
                                        <td><div class="td-content">#66894</div></td>
                                        <td><div class="td-content pricing"><span class="">1260000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-danger">در انتظار</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">لوک عاج</div></td>
                                        <td><div class="td-content product-brand">هدفون</div></td>
                                        <td><div class="td-content">#46894</div></td>
                                        <td><div class="td-content pricing"><span class="">560000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">پرداخت شده</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">رایان کالینز</div></td>
                                        <td><div class="td-content product-brand">ورزش</div></td>
                                        <td><div class="td-content">#89891</div></td>
                                        <td><div class="td-content pricing"><span class="">108000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">حمل شده</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">نیا هیلیر</div></td>
                                        <td><div class="td-content product-brand">عینک</div></td>
                                        <td><div class="td-content">#26974</div></td>
                                        <td><div class="td-content pricing"><span class="">1680000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-primary">حمل شده</span></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content customer-name"><img src="public/admin/assets/img/90x90.jpg" alt="avatar">سونیا شاو</div></td>
                                        <td><div class="td-content product-brand">ساعت</div></td>
                                        <td><div class="td-content">#76844</div></td>
                                        <td><div class="td-content pricing"><span class="">110000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="badge outline-badge-success">پرداخت شده</span></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-table-three">

                        <div class="widget-heading">
                            <h5 class=""> محصول برتر فروش</h5>
                        </div>

                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">محصول</div></th>
                                        <th><div class="th-content th-heading">قیمت</div></th>
                                        <th><div class="th-content th-heading">تخفیف</div></th>
                                        <th><div class="th-content">فروخته شده</div></th>
                                        <th><div class="th-content">منبع</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">بلندگو</div></td>
                                        <td><div class="td-content"><span class="pricing">860000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">10000 تومان</span></div></td>
                                        <td><div class="td-content">240</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">مستقیم</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">عینک</div></td>
                                        <td><div class="td-content"><span class="pricing">560000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">50000 تومان</span></div></td>
                                        <td><div class="td-content">190</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">گوگل</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">ساعت</div></td>
                                        <td><div class="td-content"><span class="pricing">88000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">20000 تومان</span></div></td>
                                        <td><div class="td-content">66</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">تبلیغات</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">لپتاپ</div></td>
                                        <td><div class="td-content"><span class="pricing">110000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">56000 تومان</span></div></td>
                                        <td><div class="td-content">35</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">ایمیل</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">دوربین</div></td>
                                        <td><div class="td-content"><span class="pricing">2500000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">120000 تومان</span></div></td>
                                        <td><div class="td-content">30</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">معرف</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">کفش</div></td>
                                        <td><div class="td-content"><span class="pricing">1180000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">460000 تومان</span></div></td>
                                        <td><div class="td-content">130</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">گوگل</a></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="td-content product-name"><img src="public/admin/assets/img/90x90.jpg" alt="product">هدفون</div></td>
                                        <td><div class="td-content"><span class="pricing">1680000 تومان</span></div></td>
                                        <td><div class="td-content"><span class="discount-pricing">560000 تومان</span></div></td>
                                        <td><div class="td-content">170</div></td>
                                        <td><div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""> © کپی رایت</p>
            </div>
            <div class="footer-section f-section-2">
                <span class="copyright"> بومی سازی شده توسط : <a href="https://imanpa.ir/store/"> ایمان پاکروح </a> </span></div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->


</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="public/admin/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="public/admin/bootstrap/js/popper.min.js"></script>
<script src="public/admin/bootstrap/js/bootstrap.min.js"></script>
<script src="public/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="public/admin/assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="public/admin/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL public/admin/plugins/CUSTOM SCRIPTS -->
<script src="public/admin/plugins/apex/apexcharts.min.js"></script>
<script src="public/admin/assets/js/dashboard/dash_1.js"></script>
<!-- BEGIN PAGE LEVEL public/admin/plugins/CUSTOM SCRIPTS -->

</body>
</html>
