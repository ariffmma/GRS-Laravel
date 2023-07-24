<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
	<head> @include('frontend.head')
		<link rel="stylesheet" href="{{asset('frontend/Contact.css')}}" media="screen">
		<link rel="stylesheet" href="{{asset('frontend/map-contact.css?ver=')}}{{ date('YmdHis')}}" media="screen">
		<link rel="stylesheet" href="{{asset('frontend/mapbox-gl.css?ver=')}}{{ date('YmdHis')}}" media="screen">
		<script src="{{asset('frontend/js/map/mapbox-gl.js')}}"></script>
		<script src="{{asset('frontend/js/map/popmotion.xl.min.js')}}"></script>
		<script src="{{asset('frontend/js/map/map-contact.js?ver=')}}{{ date('YmdHis')}}"></script>
	</head>
	<body class="u-body u-overlap u-xl-mode" data-lang="en"> @include('frontend.header') <section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-clearfix u-section-2" id="sec-a1d7">
			<div id="map"></div>
		</section>

		<section class="u-align-center u-clearfix u-section-4" id="sec-8cd8">
			<div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
				<h2 class="u-align-left u-custom-font u-text u-text-custom-color-3 u-text-1">Contact Us</h2>
				<div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
					<div class="u-layout">
						<div class="u-layout-row">
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
								<div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xl u-container-layout-1">
									<h6 class="u-custom-font u-text u-text-custom-color-4 u-text-2">GLOBAL RANCANG SELARAS</h6>
									<br>
									<p class="u-custom-font u-text u-text-custom-color-4 u-text-3">
										<a class="link" href="mailto:studio@globalrancangselaras.com" target="_blank">studio@globalrancangselaras.com</a>
										<br>
										<a class="link" href="https://www.google.com/maps/place/Global+Rancang+Selaras.+PT/@-7.7247442,110.4043961,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7a59eb0214b69d:0x97b808be7f71a48b!8m2!3d-7.7247495!4d110.4069764!16s%2Fg%2F1pzqk_dwc?entry=ttu" target="_blank">Jl. Apel No. 111, Nglaban, Ngaglik <br>Sleman, Yogyakarta, Indonesia 55581 </a>
										<br>
										<i>whatsapp</i> : <a class="link" href="https://wa.me/6281125013111" target="_blank">+6281125013111</a>
										<br>+62 274 880637 <br>
										<!-- <br><a href="https://wa.me/6281125013111" target="_blank" style="display: flex; align-items: center; color: #1A1A1A;"><img src="{{asset('frontend/images/wa.png')}}" style="width: 168px; padding-right: 10px;" alt=""></a><br> -->
									</p>
								</div>
							</div>
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
								<div class="u-container-layout u-valign-top u-container-layout-2">
									<div class="u-expanded-width u-form u-form-1">
										<div class="login-wrap">
											<div class="login-html">
												<!-- <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab u-text-1">Business</label><input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab u-text-1">Firm</label> -->
												<div class="login-form">
													<div class="">
														<form action="{{ route('business.submit') }}" method="POST" enctype="multipart/form-data" role="form" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;"> @csrf <div class="u-form-group u-form-categori u-label-none">
																<label for="name-3b9a" class="u-label"></label>
																<select name="categori" onChange="cateChange(event)" class="u-custom-font u-input u-input-rectangle u-input-1">
																	<option value="enquiry">Enquiry</option>
																	<option value="press">Press</option>
																	<option value="jobs">Jobs</option>
																</select>
															</div>
															<div class="u-form-group u-form-name u-label-none">
																<label for="name-3b9a" class="u-label">Name</label>
																<input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
															</div>
															<div class="u-form-email u-form-group u-label-none">
																<label for="email-3b9a" class="u-label">Email</label>
																<input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
															</div>
															<div class="" id="enquiry" style="display:flex; width: 100%">
																<div class="u-form-group u-form-name u-label-none">
																	<label for="name-3b9a" class="u-label">Company</label>
																	<input type="text" placeholder="Enter your Company" id="name-3b9a" name="company" class="u-custom-font u-input u-input-rectangle u-input-1">
																</div>
																<div class="u-form-group u-form-name u-label-none">
																	<label for="name-3b9a" class="u-label">No Telp</label>
																	<input type="text" placeholder="Enter your No Telp" id="name-3b9a" name="no_hp" class="u-custom-font u-input u-input-rectangle u-input-1">
																</div>
															</div>
															<div class="u-form-group u-form-message u-label-none">
																<label for="message-3b9a" class="u-label">Message</label>
																<textarea placeholder="Enter your message" rows="4" cols="50" id="message-3b9a" name="message" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea>
															</div>
															<div class="u-align-left u-form-group u-form-submit">
																<button type="submit" class="u-border-none u-btn  u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</button>
															</div>
														</form>
													</div>
													<!-- <div class="sign-up-htm"><form action="{{ route('firm.submit') }}" method="POST" enctype="multipart/form-data" role="form" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" >
                            @csrf
                              <div class="u-form-group u-form-name u-label-none"><label for="name-3b9a" class="u-label">Name</label><input type="text" placeholder="Enter your Name" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required=""></div><div class="u-form-email u-form-group u-label-none"><label for="email-3b9a" class="u-label">Email</label><input type="email" placeholder="Enter a valid email address" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required=""></div><div class="u-form-group u-form-message u-label-none"><label for="message-3b9a" class="u-label">Link Drive</label><textarea placeholder="Enter your G-drive link" rows="2" cols="50" id="message-3b9a" name="link" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea></div><div class="u-align-left u-form-group u-form-submit"><button type="submit" class="u-border-none u-btn u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</button></div></form></div> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> @include('frontend.footer') 
	</body>
</html>