<x-admin-layout>
    <x-slot name="doc_title">Data Admin</x-slot>
    <x-header>
      <x-slot name="url">/admin</x-slot>
      <x-slot name="title">
        <h1 class="text-lg -ml-6">Data Admin</h1>
      </x-slot>
      <x-slot name="subtitle">
        <h2 class="text-light text-sm text-center -ml-6">Super Admin</h2>
      </x-slot>
    </x-header>
  
    <div id="admin-form" class="mt-10 mb-12 w-11/12">
      <form class="mx-2" action="" method="post">
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="admin_name">Nama</label>
            <input class="mt-2 form-input" type="text" name="admin_name" id="admin_name" 
              placeholder="Masukkan nama Admin"
              required>
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="email">E-mail</label>
            <input class="mt-2 form-input" type="email" name="email" id="email" 
              placeholder="Masukkan E-mail"
              required>
          </div>
          <div class="mt-4 relative">
            <label class="font-semibold tracking-wider" for="password">Password</label>
            <input id="passwordInput" class="form-input z-0" type="password" name="password" id="password"
              placeholder="Masukkan password" required>
            <img id="eye" src="{{ asset('/src/icons/eye.svg') }}" ] class="absolute top-8 right-3 cursor-pointer w-8"
              onclick="showPassword()" alt="view password">
            <img id="eye-closed" src="{{ asset('/src/icons/eye_close.svg') }}" ]
              class="absolute top-8 right-3 cursor-pointer w-8 hidden" onclick="showPassword()" alt="view password">
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="role">Role:</label>
              <select class="mt-2 form-input font-primary font-medium" name="role" id="role">
                <option value="admin">Admin</option>
                <option value="super-admin">Super Admin</option>
              </select>
          </div>
          <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Admin</button>
      </form>
    </div>
    <x-slot name="script">
        <script src="{{ asset('js/functions.js') }}"></script>
    </x-slot>
</x-admin-layout>

  