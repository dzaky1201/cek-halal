<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('doc_title', '<title>Admin</title>')
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  @yield('header', '')
  <main class="bg-bg_large">
    <div id="wrapper" class="wrapper-mobile">    
    @yield('content')
    </div>
  </main>
  @yield('scripts', '')
</body>
</html>