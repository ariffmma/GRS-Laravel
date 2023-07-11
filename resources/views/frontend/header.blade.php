<header class="u-clearfix u-header u-palette-2-base u-sticky u-sticky-17ba u-header" id="sec-9867">
    <style class="u-sticky-style" data-style-id="17ba">
        .u-sticky-fixed.u-sticky-17ba:before,
        .u-body.u-sticky-fixed .u-sticky-17ba:before {
            borders: top right bottom left !important
        }
    </style>
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="desktop-navbar row align-items-center justify-content-between" style="height: 82px">
            <div class="col-2">
                <a href="{{route('home')}}" class="" data-image-width="1133" data-image-height="485" >
                    <img src="{{asset('frontend/images/grswhite.png')}}" class="image-logo">
                </a>
            </div>
            <div class="col-8">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="u-nav-container">
                            <li class="u-nav-item">
                                <a class="nav-text">COMMITMENT</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="nav-text" href="{{ route('project')}}" >PROJECTS</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="nav-text" href="{{route('contact')}}" >CONTACT</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="nav-text" href="{{route('news')}}">NEWS</a>
                            </li>
                            <li class="u-nav-item">
                                <a class="nav-text">ABOUT</a>
                                <div class="u-nav-popup text-start">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                        <li class="u-nav-item">
                                            <a class="u-button-style u-nav-link u-white" href="{{route('about-grs')}}" style="letter-spacing: 1px !important;">Profile PT. GRS</a>
                                        </li>
                                        <li class="u-nav-item">
                                            <a class="u-button-style u-nav-link u-white" href="{{route('about-partner')}}" style="letter-spacing: 1px !important;">Partners</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-end">
                <div class="btn-group" role="group" >
                    <button type="button" class="btn btn-color">ID</button>
                    <button type="button" class="btn btn-color">ENG</button>
                </div>
            </div>
        </div>
        <div class=" row align-items-center justify-content-between mobile-navbar" style="height: 82px">
            <div class="col">
                <a href="{{route('home')}}" class="" data-image-width="1133" data-image-height="485" >
                    <img src="{{asset('frontend/images/grswhite.png')}}" class="image-logo">
                </a>
            </div>
            <div class="col px-2">
              <div class="d-flex justify-content-end align-items-center">
                <div class="btn-group pe-3" role="group" >
                    <button type="button" class="btn btn-color">ID</button>
                    <button type="button" class="btn btn-color">ENG</button>
                </div>
                <nav class="u-menu u-menu-dropdown u-offcanvas ">
                    <div class="menu-collapse u-custom-font" style="font-size: 0.75rem; letter-spacing: 2px; font-family: CircularStd-Light; font-weight: 500;">
                        <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="#" style="font-size: calc(1em + 8px); background-image: none; padding: 4px;">
                            <svg class="u-svg-link" viewBox="0 0 24 24">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger">
                                </use>
                            </svg>
                            <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link">COMMITMENT</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="{{route('project')}}">PROJECTS</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="{{route('contact')}}">CONTACT</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="{{route('news')}}">NEWS</a>
                                    </li>
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link" href="{{route('about-grs')}}">ABOUT</a>
                                        <div class="u-nav-popup">
                                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                                <li class="u-nav-item">
                                                    <a class="u-button-style u-nav-link" href="{{route('about-grs')}}">Profile PT. GRS</a>
                                                </li>
                                                <li class="u-nav-item">
                                                    <a class="u-button-style u-nav-link" href="{{route('about-partner')}}">Partners</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
              </div>
            </div>
        </div>
    </div>
</header>