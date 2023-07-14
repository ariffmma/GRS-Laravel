<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/Project-Detail.css?ver=')}}{{ date('YmdHis')}}" media="screen">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
sebelum </body>

</head>
  <body class="u-body u-overlap u-xl-mode" data-lang="en">
		@include('frontend.header')

		<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-align-center u-clearfix u-section-2" id="sec-e222">
			<div class="u-clearfix u-sheet u-sheet-1">
				{{-- <div class="u-carousel u-carousel-fade u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-thumbnails-position-right u-gallery-1" id="carousel-5851" data-interval="2000" data-u-ride="carousel"> --}}
				<div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-thumbnails-position-right u-gallery-1" id="carousel-5851" data-interval="2000" data-u-ride="carousel">
					<ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
						<li data-u-target="#carousel-5851" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
						<li data-u-target="#carousel-5851" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
						<li data-u-target="#carousel-5851" data-u-slide-to="2" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
						<li data-u-target="#carousel-5851" data-u-slide-to="3" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
						<li data-u-target="#carousel-5851" data-u-slide-to="4" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
					</ol>
					<div class="u-carousel-inner u-gallery-inner" role="listbox">
						<div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
							<div class="u-back-slide" data-image-width="2000" data-image-height="1250">
								<img class="u-back-image u-expanded" src="{{asset('frontend/images/6.jpg')}}">
							</div>
							<div class="u-align-center-md u-align-center-sm u-align-center-xs u-over-slide u-shading u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-over-slide-1"></div>
						</div>
						<div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
							<div class="u-back-slide" data-image-width="2000" data-image-height="1145">
								<img class="u-back-image u-expanded" src="{{asset('frontend/images/07HEALINGGARDEN.jpg')}}">
							</div>
							<div class="u-align-center-md u-align-center-sm u-align-center-xs u-over-slide u-shading u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-over-slide-2"></div>
						</div>
						<div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-3" data-image-width="2836" data-image-height="1875">
							<div class="u-back-slide" data-image-width="2000" data-image-height="1427">
								<img class="u-back-image u-expanded" src="{{asset('frontend/images/06WAITINGCLINICS.jpg')}}">
							</div>
							<div class="u-align-center-md u-align-center-sm u-align-center-xs u-over-slide u-shading u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-over-slide-3"></div>
						</div>
						<div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-4" data-image-width="1280" data-image-height="853">
							<div class="u-back-slide" data-image-width="2000" data-image-height="1250">
								<img class="u-back-image u-expanded" src="{{asset('frontend/images/003.jpg')}}">
							</div>
							<div class="u-align-center-md u-align-center-sm u-align-center-xs u-over-slide u-shading u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-over-slide-4"></div>
							<style data-mode="XL"></style>
							<style data-mode="LG"></style>
							<style data-mode="MD" data-visited="true"></style>
							<style data-mode="SM" data-visited="true"></style>
							<style data-mode="XS" data-visited="true"></style>
						</div>
						<div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-5" data-image-width="2000" data-image-height="1250">
							<div class="u-back-slide">
								<img class="u-back-image u-expanded" src="{{asset('frontend/images/08WARD.jpg')}}">
							</div>
							<div class="u-align-center-md u-align-center-sm u-align-center-xs u-over-slide u-shading u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-over-slide-5"></div>
							<style data-mode="XL"></style>
							<style data-mode="LG"></style>
							<style data-mode="MD" data-visited="true"></style>
							<style data-mode="SM" data-visited="true"></style>
							<style data-mode="XS" data-visited="true"></style>
						</div>
					</div>
					<a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-custom-color-3 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-5851" role="button" data-u-slide="prev">
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
					<a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-custom-color-3 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-5851" role="button" data-u-slide="next">
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
		
		<section class="u-clearfix u-section-3" id="sec-192c">
			<div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
				<h1 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</h1>
				<div class="u-clearfix u-expanded-width u-gutter-24 u-layout-wrap u-layout-wrap-1">
					<div class="row mt-3">
							<div class="col-md-9 col-12 mb-2">
								{!! $project['details'] !!}    
								
							</div>
							<div class="col-md-3 col-12 mb-5">
									<div id="map" style="z-index:1; margin-top: 8px;"></div>
									<h1 class="u-custom-font u-text u-text-6">PT Global Rancang Selaras</h1>
									<h1 class="u-custom-font u-text u-text-6">{{ GoogleTranslate::trans('Lokasi', app()->getLocale()) }}</h1>
									<h1 class="u-custom-font u-text u-text-7">{{ $project->location }}</h1>
									<h1 class="u-custom-font u-text u-text-6">{{ GoogleTranslate::trans('Skala', app()->getLocale()) }}</h1>
									<h1 class="u-custom-font u-text u-text-7">{{ $project->scale }}</h1>
									<h1 class="u-custom-font u-text u-text-6">{{ GoogleTranslate::trans('Tahun Proyek', app()->getLocale()) }}</h1>
									<h1 class="u-custom-font u-text u-text-7"><a href="{{route('project-year',$project->year)}}">{{ $project->year }}</a></h1>
									<h1 class="u-custom-font u-text u-text-6">{{ GoogleTranslate::trans('Tahun Penyelesaian', app()->getLocale()) }}</h1>
									<h1 class="u-custom-font u-text u-text-7"><a href="{{route('project-year',$project->year)}}">{{ $project->completion_year }}</a></h1>
								
							</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="u-clearfix u-section-3 garis"  style="margin-bottom: 10px; id="sec-192c" >
			<div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-1">
			    <div class="garis-horizontal">
			</div>
		</section>
		<section class="u-clearfix u-section-5 mb-5" id="sec-1b37">
			<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
				<h1 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans('Proyek Terkait', app()->getLocale()) }}</h1>
				<!--blog-->
				<!--blog_options_json-->
				<!--{"type":"Recent","source":"","tags":"","count":""}-->
				<!--/blog_options_json-->
				<div class="u-blog u-expanded-width u-layout-horizontal u-blog-1">
					<div class="u-repeater u-repeater-1">
						<!--blog_post-->
						@foreach($projects as $project)
						<div class="u-blog-post u-container-style u-repeater-item">
							<div class="u-container-layout u-similar-container u-container-layout-1">
								<a class="u-post-header-link" href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}">
									<!--blog_post_image-->
									<img alt="{{ $project->title }}" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="{{asset('images/'.$project->thumb)}}" data-image-width="1005" data-image-height="768">
									<!--/blog_post_image-->
								</a>
								<h3 class="u-custom-font u-text u-text-2"> {{ GoogleTranslate::trans($project->title, app()->getLocale()) }}</h3>
								<h6 class="u-custom-font u-text u-text-grey-50 u-text-3"> <a href="{{route('project-year',$project->year)}}">{{ $project->year }}</a> - Rumah Sakit <br>{{$project->location}} </h6>
							</div>
						</div>
						@endforeach
						
						
						
					
						<!--/blog_post-->
						<!--blog_post-->
						<!--/blog_post-->
						<!--blog_post-->
						<!--/blog_post-->
						<!--blog_post-->
						<!--/blog_post-->
						<!--blog_post-->
						<!--/blog_post-->
					</div>
					<a class="u-custom-color-3 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
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
					<a class="u-custom-color-3 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
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
				<!--/blog-->
			</div>
		</section>
   
		@include('frontend.footer')
		<script type="text/javascript">
		
			var url = "{{ route('changeLang') }}";
			
			$(".changeLang").change(function(){
				window.location.href = url + "?lang="+ $(this).val();
			});
		
		</script>
		<script>
            var map = L.map('map').setView([{{ $project->latlong}}], 13);
            var marker = L.marker([{{ $project->latlong}}]).addTo(map);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: 'GRS'
        }).addTo(map);
          </script>
</body></html>

