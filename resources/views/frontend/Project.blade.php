<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
@include('frontend.head')
<link rel="stylesheet" href="{{asset('frontend/Project.css?ver=')}}{{ date('YmdHis')}}" media="screen">
</head>
<body class="u-body u-overlap u-xl-mode" data-lang="en">
		@include('frontend.header')
		<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-clearfix u-section-2" id="sec-d340">
			<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-row">
							<div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-size-11-lg u-size-11-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
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
                      <li><a class="filter-items" href="#">Rumah Sakit</a></li>
                      <li><a class="filter-items" href="#">Fasilitas Pendidikan</a></li>
                      <li><a class="filter-items" href="#">Mixed Use</a></li>
                      <li><a class="filter-items" href="#">Hospitality</a></li>
                      <li><a class="filter-items" href="#">Fasilitas Komersial</a></li>
                      <li><a class="filter-items" href="#">Fasilitas Publik</a></li>
                      <li><a class="filter-items" href="#">Residential</a></li>
                      <li><a class="filter-items" href="#">Kawasan</a></li>
                    </ul>
                  </div>
                  <div class="dropdown">
                    <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Year
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="filter-items" href="#">2023</a></li>
                      <li><a class="filter-items" href="#">2022</a></li>
                      <li><a class="filter-items" href="#">2021</a></li>
                      <li><a class="filter-items" href="#">2020</a></li>
                      <li><a class="filter-items" href="#">2019</a></li>
                      <li><a class="filter-items" href="#">2018</a></li>
                      <li><a class="filter-items" href="#">2017</a></li>
                      <li><a class="filter-items" href="#">2016</a></li>
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
                    <li><a class="filter-items" href="#">Rumah Sakit</a></li>
                    <li><a class="filter-items" href="#">Fasilitas Pendidikan</a></li>
                    <li><a class="filter-items" href="#">Mixed Use</a></li>
                    <li><a class="filter-items" href="#">Hospitality</a></li>
                    <li><a class="filter-items" href="#">Fasilitas Komersial</a></li>
                    <li><a class="filter-items" href="#">Fasilitas Publik</a></li>
                    <li><a class="filter-items" href="#">Residential</a></li>
                    <li><a class="filter-items" href="#">Kawasan</a></li>
                  </ul>
                </div>
                <div class="dropdown">
                  <a class="btn-filter dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Year
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="filter-items" href="#">2023</a></li>
                    <li><a class="filter-items" href="#">2022</a></li>
                    <li><a class="filter-items" href="#">2021</a></li>
                    <li><a class="filter-items" href="#">2020</a></li>
                    <li><a class="filter-items" href="#">2019</a></li>
                    <li><a class="filter-items" href="#">2018</a></li>
                    <li><a class="filter-items" href="#">2017</a></li>
                    <li><a class="filter-items" href="#">2016</a></li>
                  </ul>
                </div>
              </div>










             
							<div class="u-container-style u-layout-cell u-size-49-lg u-size-49-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
								<div class="u-container-layout u-container-layout-2">
									<div class="u-expanded-width u-list u-list-1">
										<div class="u-repeater u-repeater-1">
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
													<img data-href="{{route('project-detail', '')}}" class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" >
													<h3 class="u-custom-font u-text u-text-10"> RS Muhammadiyah Gresik</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-11">2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
													<img class="u-expanded-width u-image u-image-default u-image-2" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center1-1612x1164.jpg')}}" alt="" data-image-width="1612" data-image-height="1164" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-12"> Bali International Hospital</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-13"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
													<img class="u-expanded-width u-image u-image-default u-image-3" src="{{asset('frontend/images/RS_Harapan_Anda_DSC0879_ok.jpg')}}" alt="" data-image-width="1024" data-image-height="703" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-14"> RS Dian Harapan Jayapura</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-15"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
													<img class="u-expanded-width u-image u-image-default u-image-4" src="{{asset('frontend/images/RSKariadiPavGaruda2_DSC0074.jpg')}}" alt="" data-image-width="1024" data-image-height="698" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-16"> RS Akademik Universitas Trisakti</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-17"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
													<img class="u-expanded-width u-image u-image-default u-image-5" src="{{asset('frontend/images/RSSitiKhodijahSepanjang_DSC0289.jpg')}}" alt="" data-image-width="1005" data-image-height="768" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-18"> RS Aisyah Ponorogo</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-19"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
										
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