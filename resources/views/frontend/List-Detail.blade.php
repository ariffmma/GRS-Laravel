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
					<div class="row mb-5">
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
						</div>
						<div class="col-4 mb-2">
							<div class="u-text-10">RS EMC Pertamina Sentul City</div>
							<div class="u-text-11">2011 - Rumah Sakit <br>Sentul, Bogor</div>
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
					</span>&nbsp;Prev 
        		</a>
			</div>
		</section>
		
		@include('frontend.footer')
    <script type="text/javascript">
    
    var url = "{{ route('changeLang') }}";
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    
  </script>
   
</body></html>