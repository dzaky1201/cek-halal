<header class="w-full bg-bg_large ">
  <nav class="header max-w-mobile mx-auto flex justify-between items-center">
    <a class="" href="{{ $url ?? "/" }}">
      <svg width="32" height="30" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M46.6933 10.3201L41.9466 5.6001L15.5733 32.0001L41.9733 58.4001L46.6933 53.6801L25.0133 32.0001L46.6933 10.3201Z"
          fill="#fff"/>
      </svg>
    </a>
    <div>
      {{ $title ?? "<h1 class='text-lg'>Admin</h1>"}}
      {{ $subtitle ?? "" }}
    </div>
    {{-- using empty elements to make layouting easier--}}
    <span></span>
  </nav>
</header>