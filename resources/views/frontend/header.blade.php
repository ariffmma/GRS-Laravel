<header class="u-clearfix u-header u-palette-2-base u-sticky u-sticky-17ba u-header" id="sec-9867">
    <style class="u-sticky-style" data-style-id="17ba">
        .u-sticky-fixed.u-sticky-17ba:before,
        .u-body.u-sticky-fixed .u-sticky-17ba:before {
            borders: top right bottom left !important
        }
    </style>
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
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
            <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-body-alt-color u-text-hover-custom-color-3" style="padding: 10px 20px;">COMMITMENT</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-body-alt-color u-text-hover-custom-color-3" href="{{ route('project')}}" style="padding: 10px 20px;">PROJECTS</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-body-alt-color u-text-hover-custom-color-3" href="{{route('contact')}}" style="padding: 10px 20px;">CONTACT</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-body-alt-color u-text-hover-custom-color-3" href="{{route('news')}}" style="padding: 10px 20px;">NEWS</a>
                    </li>
                    <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-body-alt-color u-text-hover-custom-color-3" style="padding: 10px 20px;">ABOUT</a>
                        <div class="u-nav-popup">
                            <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="{{route('about-grs')}}">Profile PT. GRS</a>
                                </li>
                                <li class="u-nav-item">
                                    <a class="u-button-style u-nav-link u-white" href="{{route('about-partner')}}">Partners</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
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
        <a href="{{route('home')}}" class="u-image u-logo u-image-2" data-image-width="1133" data-image-height="485" title="Copy of Copy of Aboutdffsdgsfd">
			<img src="{{asset('frontend/images/grswhite.png')}}" class="u-logo-image u-logo-image-1">
		</a>
        <div class="lang">
            <div class="theme-popup">
                <input type="radio" name="theme" id="default" checked="">
                <input type="radio" name="theme" id="light">
                <input type="radio" name="theme" id="dark">
                <input type="checkbox" id="checkbox">
                <label for="checkbox" class="theme-popup__button">
                    <span class="theme-popup__icons">
                        <svg class="default" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512">
                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm-11.34 240.23c-2.89 4.82-8.1 7.77-13.72 7.77h-.31c-4.24 0-8.31 1.69-11.31 4.69l-5.66 5.66c-3.12 3.12-3.12 8.19 0 11.31l5.66 5.66c3 3 4.69 7.07 4.69 11.31V304c0 8.84-7.16 16-16 16h-6.11c-6.06 0-11.6-3.42-14.31-8.85l-22.62-45.23c-2.44-4.88-8.95-5.94-12.81-2.08l-19.47 19.46c-3 3-7.07 4.69-11.31 4.69H50.81C49.12 277.55 48 266.92 48 256c0-110.28 89.72-200 200-200 21.51 0 42.2 3.51 61.63 9.82l-50.16 38.53c-5.11 3.41-4.63 11.06.86 13.81l10.83 5.41c5.42 2.71 8.84 8.25 8.84 14.31V216c0 4.42-3.58 8-8 8h-3.06c-3.03 0-5.8-1.71-7.15-4.42-1.56-3.12-5.96-3.29-7.76-.3l-17.37 28.95zM408 358.43c0 4.24-1.69 8.31-4.69 11.31l-9.57 9.57c-3 3-7.07 4.69-11.31 4.69h-15.16c-4.24 0-8.31-1.69-11.31-4.69l-13.01-13.01a26.767 26.767 0 0 0-25.42-7.04l-21.27 5.32c-1.27.32-2.57.48-3.88.48h-10.34c-4.24 0-8.31-1.69-11.31-4.69l-11.91-11.91a8.008 8.008 0 0 1-2.34-5.66v-10.2c0-3.27 1.99-6.21 5.03-7.43l39.34-15.74c1.98-.79 3.86-1.82 5.59-3.05l23.71-16.89a7.978 7.978 0 0 1 4.64-1.48h12.09c3.23 0 6.15 1.94 7.39 4.93l5.35 12.85a4 4 0 0 0 3.69 2.46h3.8c1.78 0 3.35-1.18 3.84-2.88l4.2-14.47c.5-1.71 2.06-2.88 3.84-2.88h6.06c2.21 0 4 1.79 4 4v12.93c0 2.12.84 4.16 2.34 5.66l11.91 11.91c3 3 4.69 7.07 4.69 11.31v24.6z" />
                        </svg>
                    </span> Lang </label>
                <div class="theme-popup__list-container">
                    <ul class="theme-popup__list">
                        <li>
                            <label for="default">
                                <span> Language </span>
                            </label>
                        </li>
                        <li>
                            <label for="light">
                                <span> Bahasa </span>
                            </label>
                        </li>
                        <li>
                            <label for="dark">
                                <span> English </span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>