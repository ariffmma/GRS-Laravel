<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
  @include('frontend.head')
  <link rel="stylesheet" href="{{asset('frontend/Contact.css?ver=')}}{{ date('YmdHis')}}" media="screen">
</head>
<body class="u-body u-overlap u-xl-mode" data-lang="en">
		@include('frontend.header')
		<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
		<section class="u-clearfix u-section-2" id="sec-a1d7">
			<div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
				<img class="u-expanded-width u-image u-image-contain u-image-default u-image-1" src="{{asset('frontend/images/map2.png')}}" alt="" data-image-width="4713" data-image-height="2231">
			</div>
		</section>
		<section class="u-clearfix u-section-3" id="sec-036d">
			<div class="u-clearfix u-sheet u-sheet-1">
				<div class="u-border-1 u-border-custom-color-3 u-expanded-width u-line u-line-horizontal u-opacity u-opacity-20 u-line-1"></div>
			</div>
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
									<p class="u-custom-font u-text u-text-custom-color-4 u-text-3"> studio_globalrancangselaras@yahoo.com <br>Jl. Apel No. 111, Nglaban, Ngaglik <br>Sleman, Yogyakarta, Indonesia 55581 <br>+62 274 880637 <br>
                   <br>
                    <a href="#" style="display: flex; align-items: center; color: #1A1A1A;">
											<img src="{{asset('frontend/images/wa.png')}}" style="width: 168px; padding-right: 10px;" alt="">
										</a>
										<br>
                  </p>
								</div>
							</div>
							<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
								<div class="u-container-layout u-valign-top u-container-layout-2">
									<div class="u-expanded-width u-form u-form-1">
                    <div class="login-wrap">
											<div class="login-html">
												<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
												<label for="tab-1" class="tab u-text-1">Business</label>
												<input id="tab-2" type="radio" name="tab" class="sign-up">
												<label for="tab-2" class="tab u-text-1">Firm</label>
												<div class="login-form">
													<div class="sign-in-htm">
														<form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" source="email" name="form">
															<div class="u-form-group u-form-name u-label-none">
																<label for="name-3b9a" class="u-label">Name</label>
																<input type="text" placeholder="Enter your Name bisnis" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
															</div>
															<div class="u-form-email u-form-group u-label-none">
																<label for="email-3b9a" class="u-label">Email</label>
																<input type="email" placeholder="Enter a valid email address bisnis" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
															</div>
															<div class="u-form-group u-form-message u-label-none">
																<label for="message-3b9a" class="u-label">Message</label>
																<textarea placeholder="Enter your message bisnis" rows="4" cols="50" id="message-3b9a" name="message" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea>
															</div>
															<div class="u-align-left u-form-group u-form-submit">
																<a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</a>
																<input type="submit" value="submit" class="u-form-control-hidden">
															</div>
															<div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
															<div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
															<input type="hidden" value="" name="recaptchaResponse">
															<input type="hidden" name="formServices" value="708845bc9be8a28d5347aa4cd10bf0a1">
														</form>
													</div>
													<div class="sign-up-htm">
														<form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 0px;" source="email" name="form">
															<div class="u-form-group u-form-name u-label-none">
																<label for="name-3b9a" class="u-label">Name</label>
																<input type="text" placeholder="Enter your Name firm" id="name-3b9a" name="name" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
															</div>
															<div class="u-form-email u-form-group u-label-none">
																<label for="email-3b9a" class="u-label">Email</label>
																<input type="email" placeholder="Enter a valid email address firm" id="email-3b9a" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
															</div>
															<div class="u-form-group u-form-message u-label-none">
																<label for="message-3b9a" class="u-label">Message</label>
																<textarea placeholder="Enter your message firm" rows="4" cols="50" id="message-3b9a" name="message" class="u-custom-font u-input u-input-rectangle u-input-3" required=""></textarea>
															</div>
															<div class="u-align-left u-form-group u-form-submit">
																<a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</a>
																<input type="submit" value="submit" class="u-form-control-hidden">
															</div>
															<div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
															<div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
															<input type="hidden" value="" name="recaptchaResponse">
															<input type="hidden" name="formServices" value="708845bc9be8a28d5347aa4cd10bf0a1">
														</form>
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
			</div>
		</section>
		@include('frontend.footer')
</body></html>