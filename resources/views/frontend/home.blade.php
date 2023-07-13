<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/Home.css?ver=1.2')}}" media="screen">
</head>
<body class="u-body u-overlap u-overlap-transparent u-xl-mode" data-lang="en">
		@include('frontend.header')
		<section class="u-carousel u-slide u-block-ca07-1" id="carousel_e528" data-interval="2000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-ca07-5">
        <li data-u-target="#carousel_e528" class="u-active u-grey-30" data-u-slide-to="0"></li>
        <li data-u-target="#carousel_e528" class="u-grey-30" data-u-slide-to="1"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-1" src="" data-image-width="1024" data-image-height="573">
                    <div class="item item--third">
                        <img src="{{asset('frontend/images/RSSitiKhodijahSepanjang_DSC0289.jpg')}}" />
                    </div>
                </div>
                <div class="u-align-center u-carousel-item u-clearfix u-image u-shading u-section-1-2" src="" data-image-width="1024" data-image-height="768">
                    <div class="item item--third">
                        <img src="{{asset('frontend/images/RSEMCSentulDJI_02611.jpg')}}" />
                    </div>
                </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-ca07-3" href="#carousel_e528" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175">
            <path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-ca07-4" href="#carousel_e528" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg class="u-svg-link" viewBox="0 0 477.175 477.175">
            <path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path>
          </svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-section-2" id="sec-f737">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-align-left u-custom-font u-text u-text-1"><a href="{{ route('project') }}">Projects</a></div>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($projects as $project)
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-image u-image-default u-image-1" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
                <h2 class="u-custom-font u-text u-text-default u-text-2">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</h2>
                <p class="u-custom-font u-text u-text-default u-text-3"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-custom-color-3 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">Read more</a>
              </div>
            </div>
            @endforeach
            
          </div>
          <a class="u-gallery-nav u-gallery-nav-prev u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
          </a>
          <a class="u-gallery-nav u-gallery-nav-next u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-20 u-line-1"></div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-3d51">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            @foreach($projectHighlight as $project)
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-hover-feature u-layout-cell u-left-cell u-shape-rectangle u-size-30 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <h1 class="u-custom-font u-text u-text-default u-text-1"><a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</a></h1>
                  <p class="u-custom-font u-text u-text-2"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                  <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-custom-color-3 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">Read more</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2" src="" data-href="http://192.168.18.107:8000/rumah-sakit=rs-muhammadiyah-gresik">
                <div class="u-container-layout u-valign-bottom u-container-layout-2" src="">
                  <img class="u-expanded-width u-image u-image-1" alt="{{ $project->title }}" src="{{asset('images/'.$project->thumb)}}" data-image-width="1024" data-image-height="742" data-href="http://192.168.18.107:8000/rumah-sakit=rs-muhammadiyah-gresik">
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="sec-6082">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-20 u-line-1"></div>
      </div>
    </section>
     <!-- selected work -->
     <section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xs u-section-4" id="sec-e893">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-12 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-left u-custom-font u-text u-text-1">Se​le​cted <br>Works </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-48 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      @foreach($projectSelect as $project)
                      <div class="u-align-left u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                          <img alt="{{$project->title}}" class="u-image u-image-1" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" data-image-width="1005" data-image-height="768">
                          <p class="u-custom-font u-text u-text-default u-text-2">  {{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</p>
                          <p class="u-custom-font u-text u-text-default u-text-3">  {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                          <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-custom-color-3 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">Read more</a>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    <a class="u-gallery-nav u-gallery-nav-prev u-grey-70 u-hidden u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                          <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                          c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                          c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                          <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                          c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                          c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-gallery-nav u-gallery-nav-next u-grey-70 u-hidden u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                          <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                          <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-hidden-xl u-section-5" id="sec-51cd">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-12 u-layout-cell-1">
                <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                  <div class="u-align-left u-custom-font u-text u-text-1">Se​le​cted Works</div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-48 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                    @foreach($projectSelect as $project)
                      <div class="u-align-left u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                          <img class="u-image u-image-default u-image-1" alt="{{$project->title}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" data-image-width="1005" data-image-height="768" src="{{asset('images/'.$project->thumb)}}">
                          <p class="u-custom-font u-text u-text-default u-text-2"> {{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</p>
                          <p class="u-custom-font u-text u-text-default u-text-3">{{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                          <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-custom-color-3 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">Read more</a>
                        </div>
                      </div>
                    @endforeach  
                    </div>
                    <a class="u-gallery-nav u-gallery-nav-prev u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.847 451.847">
                          <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                          c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                          c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.847 451.847">
                          <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
                          c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
                          c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
                        </svg>
                      </span>
                    </a>
                    <a class="u-gallery-nav u-gallery-nav-next u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
                      <span aria-hidden="true">
                        <svg viewBox="0 0 451.846 451.847">
                          <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                      </span>
                      <span class="sr-only">
                        <svg viewBox="0 0 451.846 451.847">
                          <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                          L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                          c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end selected work -->
  
   
		
		@include('frontend.footer')
   
   
</body>

</html>