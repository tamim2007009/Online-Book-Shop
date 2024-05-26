<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bookshop admin - Dashboard</title>
    <link rel="icon" href="{{asset('/')}}assets/img/favicon-2.png" type="image/x-icon">
  
    <link href="{{asset('/')}}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    
    <link href="{{asset('/')}}admin/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="{{asset('/')}}admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<div id="wrapper">

    
    @include('layouts.includes.admin-sidebar')

    <div id="content-wrapper" class="d-flex flex-column">

      
        <div id="content">

           
            @include('layouts.includes.admin-topbar')
           
            @yield('content')

        </div>
     
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; <strong>tamim-</strong> <span id="year"></span></span>
                </div>
            </div>
        </footer>
     

    </div>
 

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('/')}}admin/vendor/jquery-easing/jquery.easing.min.js"></script>


<script src="{{asset('/')}}admin/js/sb-admin-2.min.js"></script>

<script src="{{asset('/')}}admin/vendor/chart.js/Chart.min.js"></script>


<script src="{{asset('/')}}admin/js/demo/chart-area-demo.js"></script>
<script src="{{asset('/')}}admin/js/demo/chart-pie-demo.js"></script>

<script src="{{asset('/')}}admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>


<script src="{{asset('/')}}admin/js/demo/datatables-demo.js"></script>
@yield('script')
<script>
    $('#year').text(new Date().getFullYear())
</script>

</body>

</html>

