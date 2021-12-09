<x-admin-layout>
  <x-slot name="doc_title">Halaman Utama Admin</x-slot>
  
  <x-header>
    <x-slot name="url">/</x-slot>
    <x-slot name="title">Admin</x-slot>
  </x-header>

  <div id="menu-wrapper" class="m-auto lg:mt-24 mx-auto">
    <div class="grid grid-cols-2 gap-10">
      <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg">
        <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/package.svg') }}" alt="Add Product">
        <a class="font-medium text-xs text-white text-center">
          Tambah Produk
        </a>
      </div>
      <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg">
        <img class="w-12 h-12 block mb-2" src="{{ asset('/src/icons/company.svg') }}" alt="Add company">
        <a class="font-medium text-xs text-white text-center">
          Tambah Perusahaan
        </a>
      </div>
      <div class="box rounded-lg flex-col p-2 cursor-pointer hover:shadow-lg">
        <img class="w-12 h-12 block mb-3" src="{{ asset('/src/icons/clipboard.svg') }}" alt="Add Review">
        <a class="font-medium text-xs text-white text-center">
          Tambah Ulasan
        </a>
      </div>
    </div>
  </div>
</x-admin-layout>
