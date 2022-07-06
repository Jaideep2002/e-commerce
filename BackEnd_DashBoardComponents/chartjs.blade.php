<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zuccedd| ChartJS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="shortcut icon" type="image/png" href="\dist\img\favicon.png"/>
  <!-- Google Analytics -->
  <link rel="shortcut icon" type="image/png" href="\dist\images\header\favicon.png" />
  <script src='../../../../google_analytics_auto.js'></script>
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="hold-transition sidebar-mini">
  @if(isset(Auth::user()->email))
 
@else
<script>window.location="/home/login";</script>
@endif
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Help</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">8</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">8 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new Orders
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 2 Stocks Updation
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 2 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
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
    <a href="http://127.0.0.1:8000/home/dashboard/chartjs" class="brand-link">
      <img src="\dist\images\content\imglogo.jpeg" class="brand-image img-circle elevation-3">
      <b><span class="brand-text font-weight-light">Zuccedd</span></b>
    </a>
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin {{Auth::user()-> name}} </a>
        </div>
      </div>
</aside>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ChartJS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ChartJS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Yearly Sales Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <?php
                $con = new mysqli('127.0.0.1', 'root', '', 'ecomm');
                $query1= $con->query("
                select year(Order_Date),count(Sales)
                from sales
                group by year(Order_Date)
                order by year(Order_Date)");
                foreach ($query1 as $key => $value) {
                  $year[]=$value['year(Order_Date)'];
                  $sales[]=$value['count(Sales)'];
                }
                $query2=$con->query("
                select date_format(order_date, '%M') as monthname, count(Sales) as sales
                from sales
                group by monthname
                order by date_format(order_date, '%m')");
                foreach ($query2 as $key => $value) {
                  $month[]=$value["monthname"];
                  $sales1[]=$value["sales"];
                }
                $query3=$con->query("
                select date_format(order_date, '%Y') as year, COUNT(Sales) as sold
                from sales 
                WHERE Category='Mens'
                group by year
                order by year
                ");
                foreach ($query3 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catmens[]=$value["sold"];
                }
                $query4=$con->query("
                select date_format(order_date, '%Y') as year, COUNT(Sales) as sold
                from sales 
                WHERE Category='Womens'
                group by year
                order by year
                ");
                foreach ($query4 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catwomens[]=$value["sold"];
                }
                $query5=$con->query("
                select date_format(order_date, '%Y') as year, COUNT(Sales) as sold
                from sales 
                WHERE Category='Sneakers'
                group by year
                order by year
                ");
                foreach ($query5 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catsneakers[]=$value["sold"];
                }
                $query6=$con->query("
                select date_format(order_date, '%Y') as year, COUNT(Sales) as sold
                from sales 
                WHERE Category='Electronics'
                group by year
                order by year
                ");
                foreach ($query6 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catelectronics[]=$value["sold"];
                }
                $query7=$con->query("
                select date_format(order_date, '%M') as monthname, COUNT(Sales) as sold
                from sales 
                WHERE Category='Mens'
                group by monthname
                order by date_format(order_date, '%m')
                ");
                foreach ($query7 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catmensmonth[]=$value["sold"];
                }
                $query8=$con->query("
                select date_format(order_date, '%M') as monthname, COUNT(Sales) as sold
                from sales 
                WHERE Category='Womens'
                group by monthname
                order by date_format(order_date, '%m')
                ");
                foreach ($query8 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catwomensmonth[]=$value["sold"];
                }
                $query9=$con->query("
                select date_format(order_date, '%M') as monthname, COUNT(Sales) as sold
                from sales 
                WHERE Category='Sneakers'
                group by monthname
                order by date_format(order_date, '%m')
                ");
                foreach ($query9 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catsneakersmonth[]=$value["sold"];
                }
                $query10=$con->query("
                select date_format(order_date, '%M') as monthname, COUNT(Sales) as sold
                from sales 
                WHERE Category='Electronics'
                group by monthname
                order by date_format(order_date, '%m')
                ");
                foreach ($query10 as $key => $value) {
                  // $months[]=$value["monthname"];
                  $catelectronicsmonth[]=$value["sold"];
                }
                ?>
              <div class="card-body">
                <div>
                  <canvas id="myChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <script type="text/javascript">
                  const labels = <?php echo json_encode($year)?>;
                    const data = {
                      labels: labels,
                      datasets: [{
                        label: 'Yearly Sales',
                        backgroundColor : ['#C35817'],
                        data: <?php echo json_encode($sales)?>,
                      }]
                    };

                    const config = {
                      type: 'bar',
                      data: data,
                      options: {}
                    };
                  const myChart = new Chart(
                    document.getElementById('myChart'),
                    config
                  );
                </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            

            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Category Wise Yearly Stack Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div>
                  <canvas id="myChart1" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <script>
                  const lstackyear = <?php echo json_encode($year)?>;
                    const data1 = {
                      labels: lstackyear,
                      datasets: [{
                        label: 'Mens',
                        backgroundColor : ['#C35817'],
                        data: <?php echo json_encode($catmens)?>,
                      },
                      {
                        label: 'Womens',
                        backgroundColor : ['#560319'],
                        data: <?php echo json_encode($catwomens)?>,
                      },
                      {
                        label: 'Sneakers',
                        backgroundColor : ['#f39c12'],
                        data: <?php echo json_encode($catsneakers)?>,
                      },
                      {
                        label: 'Electronics',
                        backgroundColor : ['#00c0ef'],
                        data: <?php echo json_encode($catelectronics)?>,
                      }]
                    };

                    const config1 = {
                    type: 'bar',
                    data: data1,
                    options: {
                      responsive: true,
                      scales: {
                        x: {
                          stacked: true,
                        },
                        y: {
                          stacked: true
                        }
                      }
                    }
                  };
                  const myChart1 = new Chart(
                    document.getElementById('myChart1'),
                    config1
                  );
                </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (LEFT) -->
          <div class="col-md-6">

            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Monthly Sales Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div>
                  <canvas id="myChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <script>
                  const lbar = <?php echo json_encode($month)?>;
                    const data2 = {
                      labels: lbar,
                      datasets: [{
                        label: 'Monthly Sales',
                        backgroundColor : ['#f39c12'],
                        data: <?php echo json_encode($sales1)?>,
                      }]
                    };

                    const config2 = {
                      type: 'line',
                      data: data2,
                      options: {}
                    };
                  const myChart2 = new Chart(
                    document.getElementById('myChart2'),
                    config2
                  );
                </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Category Wise Monthly Stack Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div>
                  <canvas id="myChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <script>
                  const lstack = <?php echo json_encode($month)?>;
                    const data3 = {
                      labels: lstack,
                      datasets: [{
                        label: 'Mens',
                        backgroundColor : ['#00c0ef'],
                        data: <?php echo json_encode($catmensmonth)?>,
                      },
                      {
                        label: 'Womens',
                        backgroundColor : ['#f39c12'],
                        data: <?php echo json_encode($catwomensmonth)?>,
                      },
                      {
                        label: 'Sneakers',
                        backgroundColor : ['#560319'],
                        data: <?php echo json_encode($catsneakersmonth)?>,
                      },
                      {
                        label: 'Electronics',
                        backgroundColor : ['#C35817'],
                        data: <?php echo json_encode($catelectronicsmonth)?>,
                      }]
                    };

                    const config3 = {
                    type: 'bar',
                    data: data3,
                    options: {
                      responsive: true,
                      scales: {
                        x: {
                          stacked: true,
                        },
                        y: {
                          stacked: true
                        }
                      }
                    }
                  };
                  const myChart3 = new Chart(
                    document.getElementById('myChart3'),
                    config3
                  );
                </script>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

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
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
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
    // var areaChart       = new Chart(areaChartCanvas, { 
    //   type: 'line',
    //   data: areaChartData, 
    //   options: areaChartOptions
    // })

    //-------------
    //- LINE CHART -
    //--------------
    // var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    // var lineChart = new Chart(lineChartCanvas, { 
    //   type: 'line',
    //   data: lineChartData, 
    //   options: lineChartOptions
    // })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    // var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    // var donutChart = new Chart(donutChartCanvas, {
    //   type: 'doughnut',
    //   data: donutData,
    //   options: donutOptions      
    // })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    // var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
      // var pieChart = new Chart(pieChartCanvas, {
      //   type: 'pie',
      //   data: pieData,
      //   options: pieOptions      
      // })

    //-------------
    //- BAR CHART -
    //-------------
    // var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    // var barChart = new Chart(barChartCanvas, {
    //   type: 'bar', 
    //   data: barChartData,
    //   options: barChartOptions
    // })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    // var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    // var stackedBarChart = new Chart(stackedBarChartCanvas, {
    //   type: 'bar', 
    //   data: stackedBarChartData,
    //   options: stackedBarChartOptions
    // })
  })
</script>
</body>
</html>
