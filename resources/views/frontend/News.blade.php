<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/News.css?ver=')}}{{ date('YmdHis')}}" media="screen">
</head>
	<body class="u-body u-overlap u-xl-mode" data-lang="en">
	@include('frontend.header')
	<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-a017" data-image-width="1920" data-image-height="1080"></section>
    <section class="u-clearfix u-section-2" id="sec-a307">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-align-left u-custom-font u-text u-text-1">News</div>
            {{-- <div class="u-align-right u-custom-font u-text u-text-custom-color-3 u-text-2">
              <br>Explore more&nbsp;&nbsp; <span class="u-file-icon u-icon u-text-custom-color-3 u-icon-1">
                <img src="{{asset('frontend/images/3549578-7a2d42c2.png')}}" alt="">
              </span>
              <br>
              <br>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    






    <section class="u-clearfix"  style="margin-top: 20px;margin-bottom: 10px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section>
    <section class="u-clearfix slider" id="sec-f737">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($projects as $project)
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a href="" style="color: #111111; text-decoration: none;">
                  <div class="u-custom-font u-text u-text-default u-text-1">business</div>
                  <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-image u-image-default u-image-1" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
                  <h2 class="u-custom-font u-text u-text-default u-text-2">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</h2>
                  <p class="u-custom-font u-text u-text-default u-text-3"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                  <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">November 22nd, 2022</a>
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
    <section class="u-clearfix"  style="margin-top: 30px;margin-bottom: 10px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section>
    <section class="u-clearfix" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="row">
        <div class="col-lg-4 col-md-6">
          <?php $i=0;?> 
          @foreach($projects as $project)
            <a href="" style="color: #111111; text-decoration: none;">
              <div class="category-news">business</div>
              <div class="title-news">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div>
              <div class="desc-news"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
              <div class="date-news"> November 22nd, 2022</div>
            </a>
          @php if (++$i == 1) break; @endphp 
          @endforeach 
          <div class="garis-horizontal" style="margin-top:10px; margin-bottom:10px">
          </div>
          <?php $i=0;?> 
          @foreach($projects as $project)
            <a href="" style="color: #111111; text-decoration: none;">
              <div class="category-news">business</div>
              <div class="title-news">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div>
              <div class="desc-news"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
              <div class="date-news"> November 22nd, 2022</div>
            </a>
          @php if (++$i == 1) break; @endphp 
          @endforeach 
          <div class="garis-horizontal" style="margin-top:10px; margin-bottom:10px">
          </div>
          <?php $i=0;?> 
          @foreach($projects as $project)
            <a href="" style="color: #111111; text-decoration: none;">
              <div class="category-news">business</div>
              <div class="title-news">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div>
              <div class="desc-news"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</div>
              <div class="date-news"> November 22nd, 2022</div>
            </a>
          @php if (++$i == 1) break; @endphp 
          @endforeach 
        </div>
        <div class="col-lg-8 col-md-6">
          <?php $i=0;?> 
          @foreach($projects as $project)
            <a href="" style="color: #111111; text-decoration: none;">
              <img class="img-headline" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
            </a>
          @php if (++$i == 1) break; @endphp 
          @endforeach 
        </div>
       </div>
    </section>
    {{-- <section class="u-clearfix"  style="margin-top: 30px;margin-bottom: 4px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section> --}}











    <section class="u-clearfix u-section-7" style="margin-top: 50px;" id="sec-2f6a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-align-left u-custom-font u-text u-text-1">Latest Project</div>
            {{-- <div class="u-align-right u-custom-font u-text u-text-custom-color-3 u-text-2">
              <br>Explore more&nbsp;&nbsp; <span class="u-file-icon u-icon u-text-custom-color-3 u-icon-1">
                <img src="{{asset('frontend/images/3549578-7a2d42c2.png')}}" alt="">
              </span>
              <br>
              <br>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix"  style="margin-top: 25px;margin-bottom: 10px;" id="sec-7996">
      <div class="u-clearfix u-sheet u-sheet-1">
       <div class="garis-horizontal">
      </div>
    </section>












    <section class="u-clearfix slider" style="margin-bottom: 30px;" id="sec-f737">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            @foreach($projects as $project)
            <div class="u-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <a href="" style="color: #111111; text-decoration: none;">
                  <div class="u-custom-font u-text u-text-default u-text-1">business</div>
                  {{-- <div class="u-custom-font u-text u-text-default u-text-1">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</div> --}}
                  <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-image u-image-default u-image-1" alt="{{ $project->title }}" data-image-width="1612" data-image-height="1029" src="{{asset('images/'.$project->thumb)}}" data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
                  <h2 class="u-custom-font u-text u-text-default u-text-2">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</h2>
                  <p class="u-custom-font u-text u-text-default u-text-3"> {{ GoogleTranslate::trans($project->short_description, app()->getLocale()) }}</p>
                  <a href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-active-none u-border-1 u-border-active-palette-2-dark-1 u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-hover-none u-none u-text-body-color u-text-hover-custom-color-3 u-btn-1">November 22nd, 2022</a>
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