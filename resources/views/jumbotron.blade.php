<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/ninecells/assets-twbs3/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/vendor/ninecells/assets-twbs3-jbtrn-narrow/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/vendor/ninecells/assets-twbs3-jbtrn-narrow/css/jumbotron-narrow.css" rel="stylesheet">

    @yield('head')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    @yield('header')

    @yield('content')

    <footer class="footer">
        <p>&copy; 2016 @yield('site-name').</p>
    </footer>

</div> <!-- /container -->


<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/vendor/ninecells/assets-twbs3-jbtrn-narrow/js/ie10-viewport-bug-workaround.js"></script>
@yield('script')
</body>
</html>
