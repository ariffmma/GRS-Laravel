

<!-- <section class="u-align-center u-clearfix u-gradient u-section-8" id="sec-ba3e">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h2 class="u-custom-font u-text u-text-body-alt-color u-text-default u-text-1">subscribe</h2>
        <div class="u-expanded-width-xs u-form u-form-1">
          <form action="{{route('subscribe.submit')}}" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px;" >
           @csrf
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-ef64" class="u-label">Name</label>
              <input type="text" placeholder="Name" id="name-ef64" name="nama" class="u-custom-font u-input u-input-rectangle u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-ef64" class="u-label">Email</label>
              <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-custom-font u-input u-input-rectangle u-input-2" required="">
            </div>
            <div class="u-form-group u-form-submit u-label-none">
              <button type="submit" class="u-border-none u-btn  u-button-style u-custom-color-3 u-custom-font u-btn-1">Submit</button>
              
            </div>
            
            
          </form>
        </div>
      </div>
    </section> -->
    <section class="u-align-center u-clearfix u-gradient u-section-8" id="sec-ba3e">
   
   </section>
   <style class="u-overlap-style">
     .u-overlap:not(.u-sticky-scroll) .u-header {
       transparency: 30 !important
     }
   </style>
   <footer class="u-clearfix u-custom-color-5 u-footer" id="sec-76c1">
  <div class="u-clearfix u-sheet ">
    <div class="row align-items-center mt-4 mb-4">
        <div class="col-lg-8 col-md-12 px-0">
              <div class="input-group">
               <form action="{{route('subscribe.submit')}}" class="">
               @csrf
                 <input type="text" placeholder="Name" id="name-ef64" name="nama" class="input-subscribe" required="">
                 <input type="email" placeholder="Email" id="email-ef64" name="email" class="input-subscribe" required="">
                 <span class="input-group-btn">
                   <button class="btn-subscribe" type="submit">Subscribe</button>
                 </span>
               </form>
             </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="letak-social">
        <div class="u-social-icons u-spacing-10  social-icon">
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
          
        </div></div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

   
      <script type="text/javascript">
   
      var url = "{{ route('changeLang') }}";
      
      // $(".changeLang").change(function(){
      //     window.location.href = url + "?lang="+ $(this).val();
      // });

      $(function(){
          $('#id').click(function() {
            window.location.href = url + "?lang="+"id";
          });
          $('#eng').click(function() {
            window.location.href = url + "?lang="+"eng";
          });
      });
    
    </script>



