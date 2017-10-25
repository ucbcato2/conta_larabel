
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ url('assets/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-register mx-auto mt-5">

        @yield('content')
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ url ('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url ('assets/vendor/popper/popper.min.js') }}"></script>
<script src="{{ url ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ url ('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>

</html>
