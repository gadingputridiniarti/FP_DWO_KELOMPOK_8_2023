<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ADW2023 - Vendor</title>
        <link rel="icon" href="img\storage.png">
        
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles and charts for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <!-- <link rel="stylesheet" href="/drilldown.css"/> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">ADW2023</div>
                </a>
                
                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="home.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <div class="sidebar-heading">
                    Chart Menu
                </div>

                <!-- Item - Items -->
                <li class="nav-item">
                    <a class="nav-link" href="vendor.php">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Vendor Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="productvendor.php">
                        <i class="fa fa-box"></i>                
                        <span>Product Vendor Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="production.php">
                        <i class="fa fa-boxes"></i>
                        <span>Production Chart</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="shipmethod.php">
                        <i class="fa fa-chart-line"></i>
                        <span>ShipMethod Chart</span>
                    </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">Data Warehouse AdventureWorks2023</div>
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Top Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                    <img class="img-profile rounded-circle"src="img/user.webp">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="index.html" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->

                    <!-- Page Content -->
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-900">Vendor</h1> 
                        </div>

                        <!-- Content 1: Card Summary -->
                        <div class="row">
                            <!-- Total Vendor Card -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Vendor</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-900">
                                                    <?php  
                                                        $mysqli = mysqli_connect("localhost","root","","uas_kelompok8");
                                                        $sql = "SELECT COUNT(VendorID) as jumlah_vendor from dim_vendor";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_vendor'],0,".",",");
                                                        }
                                                    ?>  
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total Vendor in 2001 -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Vendor Tahun 2001</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT COUNT(DISTINCT(sf.VendorID)) dim_vendor FROM fakta_purchase sf JOIN dim_time t ON sf.time_key = t.time_key WHERE t.year=2001";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['dim_vendor'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-user-alt fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    
                            <!-- Average Spend -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col auto">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Rata-rata Order</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php
                                                        $sql = "SELECT AVG(OrderQty) as avg FROM fakta_purchase";
                                                        $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo "$".number_format($row2['avg'],0,".",",");
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-3 col-md-6 mb-4">
                            </div> -->
                        </div>
                            
                        <!-- Content 2: vendor Charts -->
                        <div class="row">
                            <!-- Line Chart -->
                            <div class="col-xl-6 col-lg-6">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-dark">Trend Peningkatan Jumlah Vendor Setiap Tahun</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Line Chart -->
                            <div class="col-xl-6 col-lg-6">
                                <div class="card shadow mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-dark">Trend Peningkatan Jumlah Vendor Setiap Bulan</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-area">
                                        <canvas id="myAreaChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; UAS KELOMPOK 8</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure, do you want to Leave this Site?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" button below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-success" href="index.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- JavaScript for Charts -->
        <!-- JavaScript Line Chart Trend Peningkatan vendor tiap Tahun -->
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "uas_kelompok8";
            $conn= mysqli_connect($host, $user, $password, $database);
            $year = "SELECT DISTINCT(t.year) as year FROM fakta_purchase sf JOIN dim_time t on t.time_key = sf.time_key";
            $vendor = "SELECT COUNT(DISTINCT(sf.VendorID)) as dim_vendor FROM fakta_purchase sf JOIN dim_time t on t.time_key = sf.time_key GROUP BY t.year";
            $i=1;
            $query_year=mysqli_query($conn, $year);
            $jumlah_year = mysqli_num_rows($query_year);
            $chart_year="";
            while($row=mysqli_fetch_array($query_year)){
            if ($i<$jumlah_year) {
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='",';
                $i++;
            }else{
                $chart_year.='"';
                $chart_year.=$row['year'];
                $chart_year.='"';
            }
            }
            $a=1;
            $query_vendor = mysqli_query($conn, $vendor);
            $jumlah_vendor = mysqli_num_rows($query_vendor);
            $chart_vendor="";
            while ($row1=mysqli_fetch_array($query_vendor)) {
                if ($a<$jumlah_vendor) {
                    $chart_vendor.=$row1['dim_vendor'];
                    $chart_vendor.=',';
                    $a++;
                }else{
                    $chart_vendor.=$row1['dim_vendor'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_year; ?>],
                datasets: [{
                label: "Jumlah Vendor",
                lineTension: 0.3,
                backgroundColor: "rgba(204, 255, 204)",
                borderColor: "rgba(0, 128, 0, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(204, 255, 204, 1)",
                pointBorderColor: "rgba(0, 128, 0, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(204, 255, 204, 1)",
                pointHoverBorderColor: "rgba(0, 128, 0, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_vendor;?>],
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: false
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                    }
                }
                }
            }
            });
        </script>

        <!-- JavaScript Line Chart Trend Peningkatan Vendor tiap Bulan -->
        <script type="text/javascript">
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            function number_format(number, decimals, dec_point, thousands_sep) {
            // *     example: number_format(1234.56, 2, ',', ' ');
            // *     return: '1 234,56'
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
            }

            // Area Chart Example 2
            <?php
            $host= "localhost";
            $user= "root";
            $password= "";
            $database= "uas_kelompok8";
            $conn= mysqli_connect($host, $user, $password, $database);
            $month = "SELECT MONTHNAME(t.date_value) month FROM fakta_purchase sf JOIN dim_time t ON sf.time_key = t.time_key GROUP BY t.month";
            $amount1 = "SELECT COUNT(DISTINCT(sf.VendorID)) as dim_vendor FROM fakta_purchase sf JOIN dim_time t on t.time_key = sf.time_key WHERE t.year = 2004 GROUP BY t.month";
            $amount2 = "SELECT COUNT(DISTINCT(sf.VendorID)) as dim_vendor FROM fakta_purchase sf JOIN dim_time t on t.time_key = sf.time_key WHERE t.year = 2003 GROUP BY t.month";
            $amount3 = "SELECT COUNT(DISTINCT(sf.VendorID)) as dim_vendor FROM fakta_purchase sf JOIN dim_time t on t.time_key = sf.time_key WHERE t.year = 2002 GROUP BY t.month";
            $i=1;
            $query_month=mysqli_query($conn, $month);
            $jumlah_month = mysqli_num_rows($query_month);
            $chart_month="";
            while($row=mysqli_fetch_array($query_month)){
            if ($i<$jumlah_month) {
                $chart_month.='"';
                $chart_month.=$row['month'];
                $chart_month.='",';
                $i++;
            }else{
                $chart_month.='"';
                $chart_month.=$row['month'];
                $chart_month.='"';
            }
            }
            $a=1;
            $query_amount1 = mysqli_query($conn, $amount1);
            $jumlah_amount1 = mysqli_num_rows($query_amount1);
            $chart_amount1="";
            while ($row1=mysqli_fetch_array($query_amount1)) {
                if ($a<$jumlah_amount1) {
                    $chart_amount1.=$row1['dim_vendor'];
                    $chart_amount1.=',';
                    $a++;
                }else{
                    $chart_amount1.=$row1['dim_vendor'];
                }
            }
            $b=1;
            $query_amount2 = mysqli_query($conn, $amount2);
            $jumlah_amount2 = mysqli_num_rows($query_amount2);
            $chart_amount2="";
            while ($row2=mysqli_fetch_array($query_amount2)) {
                if ($b<$jumlah_amount2) {
                    $chart_amount2.=$row2['dim_vendor'];
                    $chart_amount2.=',';
                    $b++;
                }else{
                    $chart_amount2.=$row2['dim_vendor'];
                }
            }
            $c=1;
            $query_amount3 = mysqli_query($conn, $amount3);
            $jumlah_amount3 = mysqli_num_rows($query_amount3);
            $chart_amount3="";
            while ($row3=mysqli_fetch_array($query_amount3)) {
                if ($c<$jumlah_amount3) {
                    $chart_amount3.=$row3['dim_vendor'];
                    $chart_amount3.=',';
                    $c++;
                }else{
                    $chart_amount3.=$row3['dim_vendor'];
                }
            }
            ?>
            var ctx = document.getElementById("myAreaChart2");
            var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo $chart_month; ?>],
                datasets: [{
                label: "2004",
                lineTension: 0.3,
                backgroundColor: "rgba(7118, 123, 22, 0.5)",
                borderColor: "rgba(118, 123, 22, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(118, 123, 22, 1)",
                pointBorderColor: "rgba(118, 123, 22, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(118, 123, 22, 1)",
                pointHoverBorderColor: "rgba(118, 123, 22, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount1;?>],
                },{
                label: "2003",
                lineTension: 0.3,
                backgroundColor: "rgba(179, 255, 255)",
                borderColor: "rgba(0, 128, 128, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(0, 128, 128, 1)",
                pointBorderColor: "rgba(0, 128, 128, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(0, 128, 128, 1)",
                pointHoverBorderColor: "rgba(0, 128, 128, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount2;?>],
                },{
                label: "2002",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.5)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [<?php echo $chart_amount3;?>],
                }
                ],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
                },
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false,
                    drawBorder: false
                    },
                    ticks: {
                    maxTicksLimit: 12
                    }
                }],
                yAxes: [{
                    ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return number_format(value);
                    }
                    },
                    gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                    }
                }],
                },
                legend: {
                display: true
                },
                tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + ' vendors';
                    }
                }
                }
            }
            });
        </script>
        
        <!-- JavaScript for Bar Chart -->
        <script src="js/demo/chart-bar-demo1.js"></script>
    </body>
</html>