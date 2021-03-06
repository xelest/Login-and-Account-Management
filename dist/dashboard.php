<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCIS | </title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    
  <script src="js/script_date_time.js"></script>
  <style> 
    th, td, tr {
        padding: 3px !important;
        margin: 3px !important;
        font-size: medium;
    }

    table{
        margin-top: -10px;
    }
  </style>
</head>

<body>
    <div class="wrapper">
        <div id="body" class="active">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-4"><h3>Dashboard </h3></div>

                            <div class="col-8"><div class="card-body" style="text-align: right;" ><span id="date_time"></span></div></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Live Population</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>

                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Employees </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>

                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Students</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>

                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Visitors</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>

                         <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Logins / TOTAL TAPS</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>


                        <div class="col-lg-2 col-md-2 col-sm-12">
                        <div class="card">
                                <div class="card-header">Logouts / TOTAL TAPS</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            
                                        </div>
                                    </form>
                                </div>
                            </div></div>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Traffic Overview</h4>
                                        <p class="text-muted">Your year long website traffic data</p>
                                    </div>
                                    <div class="canvas-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="trafficflow" style="display: block; width: 882px; height: 441px;" width="882" height="441"></canvas>
                                    </div>
                                    <div class="ui hidden divider"></div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">Logins / TOTAL TAPS</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            <table class="table table-striped">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Time In</th>
                                                  <th scope="col">ID No</th>
                                                  <th scope="col">Name</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Mark</td>
                                                  <td>Otto</td>
                                                  <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                  <td>Jacob</td>
                                                  <td>Thornton</td>
                                                  <td>@fat</td>
                                                </tr>
                                                <tr>
                                                  <td>Larry</td>
                                                  <td>the Bird</td>
                                                  <td>@twitter</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Sales Overview</h4>
                                        <p class="text-muted">Your year long sales data</p>
                                    </div>
                                    <div class="canvas-wrapper"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas class="chart chartjs-render-monitor" id="sales" style="display: block; width: 882px; height: 441px;" width="882" height="441"></canvas>
                                    </div>
                                    <div class="ui hidden divider"></div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">Logins / TOTAL TAPS</div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" accept-charset="utf-8">
                                        <div class="form-row">
                                            <table class="table table-striped">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Time In</th>
                                                  <th scope="col">ID No</th>
                                                  <th scope="col">Name</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Mark</td>
                                                  <td>Otto</td>
                                                  <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                  <td>Jacob</td>
                                                  <td>Thornton</td>
                                                  <td>@fat</td>
                                                </tr>
                                                <tr>
                                                  <td>Larry</td>
                                                  <td>the Bird</td>
                                                  <td>@twitter</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">

                             <div class="card">
                                <div class="card-header p-2">Emergency Fire</div>
                                <div class="card-body p-2">
                                            <button type="button" class="btn mcl-red btn-sm btn-block">ACTIVE</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header  p-2">Emergency Earthquake</div>
                                <div class="card-body p-2">
                                            <button type="button" class="btn btn-sm mcl-yellow btn-block">ON-DRILLS</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header  p-2">Emergency Typhoon</div>
                                <div class="card-body p-2">
                                            <button type="button" class="btn btn-sm mcl-green btn-block">ACTIVATE</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header  p-2">Emergency Hi-jack</div>
                                <div class="card-body p-2">
                                            <button type="button" class="btn btn-primary btn-sm btn-block">IN-PROGRESS</button>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header  p-2">Emergency Hi-jack</div>
                                <div class="card-body p-2">
                                            <button type="button" class="btn btn-primary btn-sm btn-block">IN-PROGRESS</button>
                                </div>
                            </div>
                        </div>
                    </div>
                

                
            </div>

        </div>

    </div>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script type="text/javascript">window.onload = date_time('date_time');</script>
</body>

</html>