<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Utama Admin</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="w-full bg-bg_large ">
      <nav class="header max-w-mobile mx-auto flex justify-between items-center">
        <a class="" href="{{ url('/') }}">
          <svg width="32" height="30" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M46.6933 10.3201L41.9466 5.6001L15.5733 32.0001L41.9733 58.4001L46.6933 53.6801L25.0133 32.0001L46.6933 10.3201Z"
              fill="#fff"/>
          </svg>
        </a>
        <h1 class=" text-lg -ml-7">Admin</h1>
        {{-- using empty elements to make layouting easier--}}
        <span></span>
      </nav>
    </header>
  
  <main class="bg-bg_large">
    <div class="wrapper-mobile">
      <div id="add-product" class="mt-20 flex flex-col items-center">
        <div class="box  mb-2">
          <img class="w-12 h-12" src="{{ asset('/src/icons/html-colored.svg') }}" alt="Add Product">
        </div>
        <a class="btn font-medium">
          Tambah Produk
        </a>

      </div>
      <div id="add-company" class="mt-12 flex flex-col items-center">
        <div class="box mb-2">
          <img class="w-12 h-12" src="{{ asset('/src/icons/apartment.svg') }}" alt="Add Company">
        </div>
        <a class="btn font-medium">
          Tambah Perusahaan
        </a>
      </div>

      <div id="add-review-product" class="mb-28 mt-12 flex flex-col items-center">
        <div class="box mb-2">
          <img class="w-12 h-12" src="{{ asset('/src/icons/clipboard-colored.svg') }}" alt="Add Review">
        </div>
        <a class="btn font-medium">
          Tambah Ulasan Produk
        </a>
      </div>
    </div>
  </main>
</body>

</html>