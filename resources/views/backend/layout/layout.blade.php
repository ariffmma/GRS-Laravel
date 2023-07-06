<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GRS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">

  @yield('css')
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('frontend/images/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text centerfont-weight-light">GRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{route('projects.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Project
              
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{route('backend-news.index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                News
               
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Subscriber
              </p>
            </a>
            
          </li>
          <!-- <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    About
                </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-address-book"></i>
                <p>
                    Contact
                </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @yield('content')

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="https://adminlte.io">Global Rancang Selaras</a>.</strong>
    All rights reserved.
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backend/dist/js/pages/dashboard3.js')}}"></script>

<script>

// const visitors1 = document.getElementById('visitors1');
// const visitors2 = document.getElementById('visitors2');
// const visitors3 = document.getElementById('visitors3');
// const visitors4 = document.getElementById('visitors4');
// const visitors5 = document.getElementById('visitors5');
// const visitors6 = document.getElementById('visitors6');
// const visitors7 = document.getElementById('visitors7');
// const visitors8 = document.getElementById('visitors8');
// const visitors9 = document.getElementById('visitors9');
                // const visitors10 = document.getElementById('visitor10');
                // const visitors11 = document.getElementById('visitors11');
                // const visitors12 = document.getElementById('visitors12');
                // const visitors13 = document.getElementById('visitors13');
                // const visitors14 = document.getElementById('visitors14');
                // const visitors15 = document.getElementById('visitors15');
                // const visitors16 = document.getElementById('visitors16');
                // const visitors17 = document.getElementById('visitors17');
                // const visitors18 = document.getElementById('visitors18');
                // const visitors19 = document.getElementById('visitors19');
                // const visitors20 = document.getElementById('visitors20');
                // const visitors21 = document.getElementById('visitors21');
                // const visitors22 = document.getElementById('visitors22');
                // const visitors23 = document.getElementById('visitors23');
                // const visitors24 = document.getElementById('visitors24');
                // const visitors25 = document.getElementById('visitors25');
                // const visitors26 = document.getElementById('visitors26');
                // const visitors27 = document.getElementById('visitors27');
                // const visitors28 = document.getElementById('visitors28');
                // const visitors29 = document.getElementById('visitors29');
                // const visitors30 = document.getElementById('visitors30');
const labels3 = [
                  // document.getElementById("date1").value.substr(0, 10),
                  // document.getElementById("date2").value.substr(0,10),
                  // document.getElementById("date3").value.substr(0,10),
                  // document.getElementById("date4").value.substr(0,10),
                  // document.getElementById("date5").value.substr(0,10),
                  // document.getElementById("date6").value.substr(0,10),
                  // document.getElementById("date7").value.substr(0,10),
                  // document.getElementById("date8").value.substr(0,10),
                  // document.getElementById('date9').value.substr(0,10),
                  // document.getElementById('date10').value.substr(0,10),
                  // document.getElementById('date11').value.substr(0,10),
                  // document.getElementById('date12').value.substr(0,10),
                  // document.getElementById('date13').value.substr(0,10),
                  // document.getElementById('date14').value.substr(0,10),
                  // document.getElementById('date15').value.substr(0,10),
                  // document.getElementById('date16').value.substr(0,10),
                  // document.getElementById('date17').value.substr(0,10),
                  // document.getElementById('date18').value.substr(0,10),
                  // document.getElementById('date19').value.substr(0,10),
                  // document.getElementById('date20').value.substr(0,10),
                  // document.getElementById('date21').value.substr(0,10),
                  // document.getElementById('date22').value.substr(0,10),
                  // document.getElementById('date23').value.substr(0,10),
                  // document.getElementById('date24').value.substr(0,10),
                  // document.getElementById('date25').value.substr(0,10),
                  // document.getElementById('date26').value.substr(0,10),
                  // document.getElementById('date27').value.substr(0,10),
                  // document.getElementById('date28').value.substr(0,10),
                  // document.getElementById('date29').value.substr(0,10),
                  // document.getElementById('date30').value.substr(0,10),
      

                  
                  
                  
                ];
                $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [18, 38, 30, 9, 8, 2, 9]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })
  })
</script>
@stack('scripts')
</body>
</html>