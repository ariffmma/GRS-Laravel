<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/Home.css?ver=')}}{{ date('YmdHis')}}" media="screen">
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
        <div class="headline"><a href="{{ route('project') }}">Projects</a></div>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1" style="margin-top: 10px;">
          <div class="u-repeater u-repeater-1">
            @foreach($projects as $project)
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" style="color: #111111; text-decoration: none;">
                  <img class="img-projects" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
                  <div class="title-projects">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div>
                  <div class="year-projects">{{ GoogleTranslate::trans($project->completion_year, app()->getLocale()) }}</div>
                  <div class="desc-projects"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
                  <div class="more-projects"><a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">lanjutkan</a></div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
          <a class="u-gallery-nav u-gallery-nav-prev u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
          </a>
          <a class="u-gallery-nav u-gallery-nav-next u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3"  style="margin-top: 30px;margin-bottom: 30px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-3d51">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-22 u-layout-wrap u-layout-wrap-1">
          <div class="row">
            @foreach($projectHighlight as $project)
            <div class="col-md-5 col-12">
              <img class="img-highlight-1" alt="{{ $project->title }}" src="{{asset('images/'.$project->thumb)}}" data-image-width="1024" data-image-height="742" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
              <div class="footnote">FASAD DEPAN</div>
            </div>
            <div class="col-md-3 col-12">
              <img class="img-highlight-2" alt="{{ $project->title }}" src="{{asset('images/'.$project->thumb)}}" data-image-width="1024" data-image-height="742" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
              <div class="footnote">INTERIOR RAWAT INAP</div>
            </div>
            <div class="col-md-4 col-12">
              <div class="title-highlight"><a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</a></div>
              <div class="desc-highlight"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
              <div class="more-highlight"><a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">lanjutkan</a></div>
            </div>
          
            @endforeach
          </div>
    
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-3" style="margin-top: 30px;margin-bottom: 30px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section>
    <section class="u-clearfix u-section-2" style="margin-bottom: 40px;" id="sec-f737">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="headline-1"><a href="{{ route('project') }}">Se​le​cted Works</a></div>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1" style="margin-top: 10px;">
          <div class="u-repeater u-repeater-1">
            @foreach($projectSelect as $project)
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" style="color: #111111; text-decoration: none;">
                  <img class="img-projects" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
                  <div class="title-projects">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div>
                  <div class="year-projects">{{ GoogleTranslate::trans($project->completion_year, app()->getLocale()) }}</div>
                  <div class="desc-projects"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
                  <div class="more-projects"><a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">lanjutkan</a></div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
          <a class="u-gallery-nav u-gallery-nav-prev u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847">
                <path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path>
              </svg>
            </span>
          </a>
          <a class="u-gallery-nav u-gallery-nav-next u-gradient u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847">
                <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section>
		@include('frontend.footer')
</body>
</html>