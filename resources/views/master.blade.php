<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="//getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet" type="text/css">

</head>

<body>

  <div class="container">
  
  @include('partials.navbar') 
  
  @yield('jumbotron')

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          @yield('content')
        </div>
        <!-- /.blog-main -->
        @include('partials.sidebar')
        <!-- /.blog-sidebar -->

      </div>
      <!-- /.row -->

    </main>
    <!-- /.container -->
  @include('footer')
</body>

</html>