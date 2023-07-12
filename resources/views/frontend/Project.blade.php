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
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-8">
													<img class="u-expanded-width u-image u-image-default u-image-6" src="{{asset('frontend/images/rumah-sakit-priscilla-medical-center-1612x1029.jpg')}}" alt="" data-image-width="1612" data-image-height="1029" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-20"> RS Santa Maria Cilacap</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-21"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-9">
													<img class="u-expanded-width u-image u-image-default u-image-7" src="{{asset('frontend/images/RS_Harapan_Anda_DSC0879_ok.jpg')}}" alt="" data-image-width="1024" data-image-height="703" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-22"> RS Santo Yusuf</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-23"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-10">
													<img class="u-expanded-width u-image u-image-default u-image-8" src="{{asset('frontend/images/RSEMCSentulDJI_0261.jpg')}}" alt="" data-image-width="1024" data-image-height="768" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-24"> RSIA Bandung (Humana Prima)</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-25"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
												</div>
											</div>
											<div class="u-container-style u-list-item u-repeater-item">
												<div class="u-container-layout u-similar-container u-valign-top u-container-layout-11">
													<img class="u-expanded-width u-image u-image-default u-image-9" src="{{asset('frontend/images/RSSitiKhodijahSepanjang_DSC0310ok.jpg')}}" alt="" data-image-width="683" data-image-height="1024" data-href="{{route('project-detail', '')}}">
													<h3 class="u-custom-font u-text u-text-26"> RS Muhammadiyah Blora</h3>
													<h6 class="u-custom-font u-text u-text-grey-50 u-text-27"> 2020 - Rumah Sakit <br>BANYUMAS, JAWA TENGAH </h6>
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
		
		<section class="u-align-center u-clearfix u-gradient u-section-3" id="sec-ba3e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-text u-text-body-alt-color u-text-default u-text-1">subscribe</h2>
        <div class="u-form u-form-1">
          <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;" source="email">
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-ef64" class="u-label">Name</label>
              <input type="text" placeholder="Name" id="name-ef64" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-ef64" class="u-label">Email</label>
              <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
            </div>
            <div class="u-form-group u-form-submit u-label-none">
              <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="708845bc9be8a28d5347aa4cd10bf0a1">
          </form>
        </div>
      </div>
    </section>
    <style class="u-overlap-style">
      .u-overlap:not(.u-sticky-scroll) .u-header {
        transparency: 30 !important
      }
    </style>
    <footer class="u-clearfix u-custom-color-5 u-footer" id="sec-76c1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                  <!--position-->
                  <div data-position="" class="u-expanded-width u-position u-position-1">
                    <!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix">
                        <!--block_header-->
                        <h5 class="u-block-header u-custom-font u-text u-text-1">
                          <!--block_header_content--> Block header
                          <!--/block_header_content-->
                        </h5>
                        <!--/block_header-->
                        <!--block_content-->
                        <div class="u-block-content u-custom-font u-text u-text-2">
                          <!--block_content_content--> Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.
                          <!--/block_content_content-->
                        </div>
                        <!--/block_content-->
                      </div>
                    </div>
                    <!--/block-->
                  </div>
                  <!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-20 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-top-xs u-container-layout-2">
                  <!--position-->
                  <div data-position="" class="u-expanded-width u-position u-position-2">
                    <!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix">
                        <!--block_header-->
                        <h5 class="u-block-header u-custom-font u-text u-text-3">
                          <!--block_header_content--> Block header
                          <!--/block_header_content-->
                        </h5>
                        <!--/block_header-->
                        <!--block_content-->
                        <div class="u-block-content u-custom-font u-text u-text-4">
                          <!--block_content_content--> Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.
                          <!--/block_content_content-->
                        </div>
                        <!--/block_content-->
                      </div>
                    </div>
                    <!--/block-->
                  </div>
                  <!--/position-->
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-valign-top-xs u-container-layout-3">
                  <!--position-->
                  <div data-position="" class="u-expanded-width u-position u-position-3">
                    <!--block-->
                    <div class="u-block">
                      <div class="u-block-container u-clearfix">
                        <!--block_header-->
                        <h5 class="u-block-header u-custom-font u-text u-text-5">
                          <!--block_header_content--> Block header
                          <!--/block_header_content-->
                        </h5>
                        <!--/block_header-->
                        <!--block_content-->
                        <div class="u-block-content u-custom-font u-text u-text-6">
                          <!--block_content_content--> Block content. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.
                          <!--/block_content_content-->
                        </div>
                        <!--/block_content-->
                      </div>
                    </div>
                    <!--/block-->
                  </div>
                  <!--/position-->
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="">
            <span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1">
              <img src="{{asset('frontend/images/fb.webp')}}" alt="">
            </span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="">
            <span class="u-file-icon u-icon u-social-icon u-social-instagram u-icon-2">
              <img src="{{asset('frontend/images/instagram.webp')}}" alt="">
            </span>
          </a>
          <a class="u-social-url" title="pinterest" target="_blank" href="">
            <span class="u-file-icon u-icon u-social-icon u-social-pinterest u-icon-3">
              <img src="{{asset('frontend/images/linkedin.webp')}}" alt="">
            </span>
          </a>
        </div>
      </div>
    </footer>
		<span style="height: 34px; width: 34px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 10px; bottom: 20px; padding: 7px; background-image: none;" class="u-back-to-top u-custom-color-3 u-icon u-icon-circle u-text-white" data-href="#">
			<svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98">
				</use>
			</svg>
			<svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98">
				<path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path>
			</svg>
		</span>
  
</body></html>