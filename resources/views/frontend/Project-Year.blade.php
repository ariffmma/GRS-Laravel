<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/Project.css')}}" media="screen">
</head>
<body class="u-body u-overlap u-xl-mode" data-lang="en">
		@include('frontend.header')
		<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-clearfix u-section-2" id="sec-d340">
			<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-row">
						<div class="u-container-layout u-container-layout-1">
                  <div class="dropdown mb-3">
                    <a class="btn-title-filter">
                      Select By
                    </a>
                  </div>
                  <div class="dropdown">
                    <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      @foreach($categories as $categori)
                        <li><a class="filter-items" href="{{route('project-categori',$categori->cate_slug)}}">{{ GoogleTranslate::trans( $categori->name , app()->getLocale()) }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="dropdown">
                    <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Year
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="filter-items" href="{{route('project-year',2023)}}">2023</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2022)}}">2022</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2021)}}">2021</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2020)}}">2020</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2019)}}">2019</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2018)}}">2018</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2017)}}">2017</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2016)}}">2016</a></li>
                    </ul>
                  </div>
								</div>
							</div>

              <div class="mobile-filter mb-3">
                <div class="dropdown">
                  <a class="btn-title-filter">
                    Select By
                  </a>
                </div>
                <div class="dropdown">
                  <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  @foreach($categories as $categori)
                    <li><a class="filter-items" href="{{route('project-categori',$categori->cate_slug)}}">{{ GoogleTranslate::trans( $categori->name , app()->getLocale()) }}</a></li>
                  @endforeach
                  </ul>
                </div>
                <div class="dropdown">
                  <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Year
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="filter-items" href="{{route('project-year',2023)}}">2023</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2022)}}">2022</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2021)}}">2021</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2020)}}">2020</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2019)}}">2019</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2018)}}">2018</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2017)}}">2017</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2016)}}">2016</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2015)}}">2015</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2014)}}">2014</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2013)}}">2013</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2012)}}">2012</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2011)}}">2011</a></li>
                      <li><a class="filter-items" href="{{route('project-year',2010)}}">2010</a></li>
                  </ul>
                </div>
              </div>
							<div class="u-container-style u-layout-cell u-size-49-lg u-size-49-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
								<div class="u-container-layout u-container-layout-2">
									<div class="u-expanded-width u-list u-list-1">
										<div class="u-repeater u-repeater-1">
                    @foreach($projects as $project )
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
													<img data-href="{{route('project-detail', ['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" >
													<h3 class="u-custom-font u-text u-text-10"> {{ $project->title }}</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-11"><a href="">{{ $project->year }}</a> - Rumah Sakit <br>{{$project->location}} </h6>
												</div>
											</div>
                    @endforeach  
										@foreach($projects as $project )
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
													<img data-href="{{route('project-detail',['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" >
													<h3 class="u-custom-font u-text u-text-10"> {{ $project->title }}</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-11">{{ $project->year }} - Rumah Sakit <br>{{$project->location}} </h6>
												</div>
											</div>
                    @endforeach  
                    @foreach($projects as $project )
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
													<img data-href="{{route('project-detail',['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" >
													<h3 class="u-custom-font u-text u-text-10"> {{ $project->title }}</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-11">{{ $project->year }} - Rumah Sakit <br>{{$project->location}} </h6>
												</div>
											</div>
                    @endforeach  
                    @foreach($projects as $project )
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
													<img data-href="{{route('project-detail',['category' => $project->cate_slug, 'slug' => $project->slug])}}" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" >
													<h3 class="u-custom-font u-text u-text-10"> {{ $project->title }}</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-11">{{ $project->year }} - Rumah Sakit <br>{{$project->location}} </h6>
												</div>
											</div>
                    @endforeach  
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="" class="u-black u-border-none u-btn u-btn-round u-button-style u-custom-font u-hover-palette-1-light-2 u-radius-2 u-btn-1">Next&nbsp; <span class="u-file-icon u-icon u-text-white u-icon-1">
						<img src="{{asset('frontend/images/271228-04834c2b.png')}}" alt="">
					</span>
				</a>
				<a href="" class="u-black u-border-none u-btn u-btn-round u-button-style u-custom-font u-hover-palette-1-light-2 u-radius-2 u-btn-2">
					<span class="u-file-icon u-icon u-text-white u-icon-2">
						<img src="{{asset('frontend/images/271220-bcd77dbf.png')}}" alt="">
					</span>&nbsp;Prev </a>
			</div>
		</section>
		
		@include('frontend.footer')
  
</body></html>