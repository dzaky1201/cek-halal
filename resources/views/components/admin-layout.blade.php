<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $doc_title ?? "Admin"}}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <main class="bg-gray-100">
    <div id="wrapper" class="wrapper-mobile">
    {{ $slot }}
    </div>
  </main>
  {{ $script ?? "" }}
</body>
</html>