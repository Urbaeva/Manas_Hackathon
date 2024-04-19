<div class="iq-sidebar  sidebar-default  ">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="../backend/index.html" class="header-logo">
            <img src="{{asset('assets/logo326.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
            <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
            <span>{{__('main.app')}}</span>
        </a>
        <div class="side-menu-bt-sidebar-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <li class="active sidebar-layout">
                    <a href="../backend/index.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </i>
                        <span class="ml-2">Dashboard</span>
                        <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">Pages</span>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{ route('post.index') }}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                            </svg>
                        </i><span class="ml-2">Posts</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{ route('faculty.index') }}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                            </svg>
                        </i><span class="ml-2">Faculties</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="../backend/pages-faq.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                            </svg>
                        </i><span class="ml-2">Faq</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="../backend/pricing.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </i><span class="ml-2">Pricing</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="../backend/timeline.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </i><span class="ml-2">Timeline</span>
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2">
                    <span class="text-uppercase small font-weight-bold">Components</span>
                </li>
                <li class="sidebar-layout">
                    <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                            <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i>
                        <span class="ml-2">UI Elements</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-avatars.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Avatars</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-alerts.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" style="stroke-dasharray: 56, 76; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Alerts</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-badges.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Badges</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-breadcrumb.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" style="stroke-dasharray: 48, 68; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Breadcrumb</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-buttons.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" style="stroke-dasharray: 72, 92; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Buttons</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-buttons-group.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-ui-1-5" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Buttons Group</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-boxshadow.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" style="stroke-dasharray: 84, 104; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Box Shadow</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-colors.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Colors</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-cards.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" style="stroke-dasharray: 79, 99; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Cards</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-carousel.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" style="stroke-dasharray: 133, 153; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Carousel</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-grid.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" style="stroke-dasharray: 83, 103; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Grid</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-images.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" style="stroke-dasharray: 85, 105; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Images</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-list-group.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                    </svg>
                                </i><span class="">list Group</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-media-object.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Media</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-modal.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18" style="stroke-dasharray: 87, 107; stroke-dashoffset: 0;">
                                        </path>
                                    </svg>
                                </i><span class="">Modal</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-notifications.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" style="stroke-dasharray: 63, 83; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Notifications</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-pagination.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" style="stroke-dasharray: 19, 39; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Pagination</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-popovers.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                                    </svg>
                                </i><span class="">Popovers</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-progressbars.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </i><span class="">Progressbars</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-typography.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-ui-1-20" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" style="stroke-dasharray: 67, 87; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Typography</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-tabs.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" style="stroke-dasharray: 98, 118; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Tabs</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-tooltips.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </i><span class="">Tooltips</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/ui-embed-video.html" class="svg-icon">
                                <i class="">
                                    <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i><span class="">Video</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-layout">
                    <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                            <svg class="svg-icon" id="iq-form-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i>
                        <span class="ml-2">Forms</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="sidebar-layout">
                            <a href="#form1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-form-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" style="stroke-dasharray: 61, 81; stroke-dashoffset: 0;"></path>
                                    </svg>
                                </i>
                                <span class="">Form Control</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <ul id="form1" class="submenu collapse" data-parent="#app3">
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-layout.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                            </svg>
                                        </i><span class="">Form Elements</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-input-group.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                            </svg>
                                        </i><span class="">Form Input</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-validation.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </i><span class="">Form Validation</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-switch.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                            </svg>
                                        </i><span class="">Form Switch</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-chechbox.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </i><span class="">Form Checkbox</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-radio.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </i><span class="">Form Radio</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-textarea.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </i><span class="">Form Textarea</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-layout">
                            <a href="#form2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i class="">
                                    <svg class="svg-icon" width="18" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </i>
                                <span class="">Form Widget</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <ul id="form2" class="submenu collapse" data-parent="#app3">
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-datepicker.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </i><span class="">Datepicker</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-select.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                            </svg>
                                        </i><span class="">Select2</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-file-uploader.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                            </svg>
                                        </i><span class="">File Upload</span>
                                    </a>
                                </li>
                                <li class=" sidebar-layout">
                                    <a href="../backend/form-quill.html" class="svg-icon">
                                        <i class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </i><span class="">Form quill</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-layout">
                    <a href="#app5" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </i>
                        <span class="ml-2">Table</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" sidebar-layout">
                            <a href="../backend/tables-basic.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                    </svg>
                                </i>
                                <span class="ml-2">Basic Tables</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/table-data.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                    </svg>
                                </i>
                                <span class="ml-2">Data Table</span>
                            </a>
                        </li>
                        <li class=" sidebar-layout">
                            <a href="../backend/table-editable.html" class="svg-icon">
                                <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                    </svg>
                                </i>
                                <span class="ml-2">Editable Table</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" sidebar-layout">
                    <a href="../backend/chart-apex.html" class="svg-icon">
                        <i class="">
                            <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i>
                        <span class="ml-2">Chart</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="../backend/icon-heroicon.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                            </svg>
                        </i>
                        <span class="ml-2">Icon</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="pt-5 pb-5"></div>
    </div>
</div>
