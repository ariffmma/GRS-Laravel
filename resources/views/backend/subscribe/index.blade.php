@extends('backend.layout.layout')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subscriber</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
</br>
                <table id="project-table" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                   
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                @php
                $i = 1
                @endphp
                  @foreach($subscriber as $subscribe)
                  <tr>
                   
                    <td>{{ $i++ }}</td>
                    <td>{{ $subscribe->nama }}</td>
                    <td>{{ $subscribe->email }}</td>
                    
                    <td> 
                     
                     
                      <a href="javascript:void(0)" 
                                                onclick="event.preventDefault();
                                                    document.getElementById('project-delete-form-{{$subscribe->id}}').submit();" class="btn btn-block btn-danger " target="_blank"><i class="fa fa-trash"></i></a>
                       <form id="project-delete-form-{{$subscribe->id}}" action="{{ route('subscriber.destroy',$subscribe->id)}}" method="POST" style="display: none;">
                              @csrf 
                              @method('DELETE')
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                   
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@push('script')
    <!-- DataTables  & Plugins -->
    <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script>
         $(document).ready(function() {
        $('#project-table').DataTable( {
        "order": [[ 1, "desc" ]]
            } );
        } );
    </script>
@endpush