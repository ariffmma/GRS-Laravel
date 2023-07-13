@extends('backend.layout.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Form</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
           

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
              <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" role="form">
              @csrf
                <div class="row">
                  
                    <div class="col-md-6">
                    
                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" class="form-control" placeholder="Between 20-70 char" name="title" maxlength="70">
                        </div>
                        <div class="form-group">
                          <label>Categori</label>
                          <select name="categori" class="form-control select2bs4" style="width: 100%;">
                          @foreach($categories as $categori)  
                          <option value="{{$categori->categori_id}}">{{ $categori->name }}</option>
                          @endforeach
                          </select>
                        </div>
                        <div class="form-group"  enctype="multipart/form-data">
                              <label for="newsimage">Thumbnail Image</label>
                              <input type="file" name="thumb" id="post-img" required>
                              <p class="help-block">(Image must be in .png or .jpg format)</p>
                          </div>
                        <div class="form-group">
                          <label for="">Short description(H2)</label>
                          <textarea name="short_description" class="form-control"></textarea>
                        </div>
                       
                        
                      
                      <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                         
                          <div class="form-group">
                            <label>Year</label>
                            <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4" class="form-control" placeholder="YYYY" name="year" >
                          </div>
                          <div class="form-group">
                            <label for="">Area</label>
                            <input type="text" class="form-control" name="scale">
                          </div>
                          <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" class="form-control" name="location" >
                          </div>
                          <div class="form-group"> 
                            <label for="">Langitute Longitude Gmaps</label>
                            <input type="text" class="form-control" name="latlong">
                          </div>
                    
                  
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                    <form action="{{ route('projects.uploadFile') }}" method="POST" enctype="multipart/form-data" role="form">
                      @csrf
                      <div class="form-group">
                        <label for="">Details</label>
                        <textarea name="details" class="details"></textarea>
                      </div>
                      <div class="form-group" enctype="multipart/form-data">
                        <div class="card-body">
                          <div id="actions" class="row">
                            <div class="col-lg-6">
                              <div class="btn-group w-100">
                                <span class="btn btn-success col fileinput-button">
                                  <i class="fas fa-plus"></i>
                                  <span>Add files</span>
                                </span>
                                <button type="submit" class="btn btn-primary col start">
                                  <i class="fas fa-upload"></i>
                                  <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning col cancel">
                                  <i class="fas fa-times-circle"></i>
                                  <span>Cancel upload</span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                              <div class="fileupload-process w-100">
                                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table table-striped files" id="previews">
                            <div id="template" class="row mt-2">
                              <div class="col-auto">
                                  <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                              </div>
                              <div class="col d-flex align-items-center">
                                  <p class="mb-0">
                                    <span class="lead" data-dz-name></span>
                                    (<span data-dz-size></span>)
                                  </p>
                                  <strong class="error text-danger" data-dz-errormessage></strong>
                              </div>
                              <div class="col-4 d-flex align-items-center">
                                  <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                  </div>
                              </div>
                              <div class="col-auto d-flex align-items-center">
                                <div class="btn-group">
                                  <button class="btn btn-primary start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start</span>
                                  </button>
                                  <button data-dz-remove class="btn btn-warning cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancel</span>
                                  </button>
                                  <button data-dz-remove class="btn btn-danger delete">
                                    <i class="fas fa-trash"></i>
                                    <span>Delete</span>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>  
                    </div>
                    <div class="center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
              </form>
              </form>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
     
      
     
      
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 <!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('backend/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('backend/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('backend/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('backend/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('backend/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>

<!-- ckeditor -->
<script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
  <script>
      var editor = CKEDITOR.replace( 'details',{
        filebrowserUploadUrl: "{{ route('projects.uploadImage', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        on: {
        instanceReady: function() {
            this.dataProcessor.htmlFilter.addRules( {
                elements: {
                    img: function( el ) {
                       
                        // Add some class.
                        el.addClass( 'lazy' );
                    },
                     iframe: function(el){
                        el.addClass('youtube-iframe');
                    }
                }
            } );            
        }
    }
      } );
CKFinder.setupCKEditor( editor );
  </script>

<!-- Page specific script -->
<script>
  

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "{{ route('projects.uploadFile') }}", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


@endsection
