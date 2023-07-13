<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
  @include('frontend.head')
  <link rel="stylesheet" href="{{asset('frontend/About-v2.css')}}" media="screen">
</head>
<body class="u-body u-overlap u-xl-mode" data-lang="en">
		@include('frontend.header')
		<section class="u-clearfix u-image u-valign-middle u-section-1" id="sec-0dda" data-image-width="1920" data-image-height="1080"></section>
    <section class="u-clearfix u-section-2" id="sec-19eb">
      <img class="u-expanded-width u-image u-image-default u-image-1" src="{{asset('frontend/images/RSEMCSentulDJI_0261.jpg')}}" alt="" data-image-width="1024" data-image-height="768">
      <p class="u-custom-font u-text u-text-body-alt-color u-text-default u-text-1"> Founded in 2004 focuses on integrating design with function, humanity, and business solutions</p>
    </section>
    <section class="u-clearfix u-section-3" id="sec-064e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-text u-text-1">Sekilas Perusahaan</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-text u-text-default u-text-2"> {{ GoogleTranslate::trans('PT Global Rancang Selaras adalah perusahaan konsultan didirikan pada tahun 2004, perusahaan ini telah menjadi mitra terpercaya bagi klien-klien dalam menghadapi tantangan kompleks dalam pengembangan aset.', app()->getLocale()) }}<br>
                    <br>{{ GoogleTranslate::trans('Keahlian PT Global Rancang Selaras meliputi perencanaan dan perancangan rumah sakit, fasilitas pendidikan,  fasilitas publik dengan komitmen untuk memberikan solusi yang berfokus pada fungsi, kemanusiaan, dan kelestarian.', app()->getLocale()) }}<br>
                    <br>{{ GoogleTranslate::trans('PT Global Rancang Selaras terus bergerak maju, mengadopsi teknologi terbaru dan terus mengembangkan pengetahuan dan keahlian mereka untuk menghadapi tantangan masa depan. Berdedikasi untuk terus berkarya dalam industri arsitektur dan perencanaan, dengan visi untuk menciptakan dunia yang lebih baik melalui arsitektur yang berkualitas tinggi.', app()->getLocale()) }}<br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   
    @include('frontend.footer')
</body></html>
