<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contactor</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Contactor</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contacts</a></li>
            <li class="nav-item"><a class="nav-link" href="/city">City</a></li>
          </ul>
        </div>
      </nav>
  <div class="container">
    @yield('content')
  </div>
  <nav class="navbar navbar-expand-lg fixed-bottom navbar-dark bg-dark">
      <span class="navbar-text text-muted">Version 0.0.3</span>
  </nav>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>