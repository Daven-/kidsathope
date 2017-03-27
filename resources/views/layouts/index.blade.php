<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Kids at Hope</title>
    <!-- Bootstrap core CSS -->
    <link href="http://bootswatch.com/readable/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <!--Custom styles for this template 
    <link href="./css/jumbotron.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/homepage"><img class="logo-image" alt="Kids at Hope Logo" src="img/site/logo.png" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/homepage">Aces</a> <span class="sr-only">(current)</span></li>
            <li class=""><a href="/list">Dashboard</a></li>
            <li><a href="/criteria">Aces Criteria</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/login">Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

<!-- START DIFFERENTIATED CONTENT HERE -->
    <div class="container main">
      @yield('content')
    </div>
<!-- END DIFFERENTIATED CONTENT HERE -->
      <hr>
      <footer>
        <p class="text-center">&copy; Kids at Hope 2017 | <a href="http://kidsathope.org/aces/temp/manual.pdf">Help</a></p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
