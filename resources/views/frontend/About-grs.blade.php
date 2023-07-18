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
                <div class="u-container-layout u-container-layout-1 mb-3">
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
    <!-- <section class="u-clearfix u-section-4" id="sec-5fa9">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans('Visi',app()->getLocale()) }}</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2">
                  <p class="u-custom-font u-text u-text-default-lg u-text-default-md u-text-default-xl u-text-2">{{ GoogleTranslate::trans('Global Rancang Selaras menjadi konsultan perencana fasilitas kesehatan dan pendidikan, Terbaik di Indonesia', app()->getLocale())}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-8c78">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans('Misi',app()->getLocale()) }}</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-text u-text-2">{{ GoogleTranslate::trans('Global Rancang Selaras berkarya dengan staf terbaik yang sangat fokus di bidangnya, melaksanakan peningkatan kualitas dan akurasi desain secara berkelanjutan didasarkan riset dan hasil pembelajaran praktik terbaik hingga penyampaian hasil karya desain kepada klien secara bersungguh-sungguh',app()->getLocale()) }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="sec-a309">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans('Keyakinan Dasar',app()->getLocale()) }}</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <ol class="u-custom-font u-text u-text-default u-text-2">
                    <li>Customer Focused <br>{{ GoogleTranslate::trans('Keyakinan bahwa kesuksesan jalinan kerjasama yang lestari didasarkan pada kepuasan klien terhadap kualitas kerja yang tinggi ',app()->getLocale()) }}</li>
                    <li>Teamwork <br>{{ GoogleTranslate::trans('Keyakinan bahwa kemampuan, ketrampilan, pengalaman, dan komitmen tim akan mampu meraih kepuasan klien. Dalam tim, kami harus mampu membangun kekuatan untuk meraih visi.',app()->getLocale()) }} <br>
                    </li>
                    <li>Innovation <br>{{ GoogleTranslate::trans('Kesadaran penuh bahwa dasar kerja adalah inovasi. Inovasi menghasilkan ide baru dalam proses maupun hasil perancangan. Inovasi harus selalu kami upayakan untuk menghasilkan nilai hebat bagi klien. ',app()->getLocale()) }}<br>
                    </li>
                    <li>Balanced <br>{{ GoogleTranslate::trans('Menghormati keputusan pribadi untuk meraih profesionalisme sebaik keputusan kelompok dalam keseimbangan berkarya',app()->getLocale()) }} </li>
                    <li>Integrity and Honesty <br>{{ GoogleTranslate::trans('Kelurusan hati atas gagasan desain ',app()->getLocale()) }}</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-7" id="sec-e8a7">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-4 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-container-style u-layout-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h3 class="u-custom-font u-text u-text-1">{{ GoogleTranslate::trans('Nilai Dasar',app()->getLocale()) }}</h3>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <ol class="u-custom-font u-text u-text-2">
                    <li>{{ GoogleTranslate::trans('Inovasi adalah nafas hidup',app()->getLocale())}}</li>
                    <li>{{ GoogleTranslate::trans('Integritas tinggi menyakini dan mengerjakan sesui hati dan perkataan',app()->getLocale())}} <br>
                    </li>
                    <li>{{ GoogleTranslate::trans('kejujuran dalam berkarya', app()->getLocale())}} <br>
                    </li>
                    <li>{{ GoogleTranslate::trans('Akuntabel dengan pertanggung jawaban penuh meraih visi perusahaan', app()->getLocale())}} <br>
                    </li>
                    <li>{{ GoogleTranslate::trans('Reputasi tim kerja yang tinggi',app()->getLocale())}} <br>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    @include('frontend.footer')
</body></html>