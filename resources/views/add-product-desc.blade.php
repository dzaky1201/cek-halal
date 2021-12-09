<x-admin-layout>
  <x-slot name="doc_title">Tambah Produk</x-slot>
  <x-header>
    <x-slot name="url">/admin</x-slot>
    <x-slot name="title">
      <h1 class="text-lg -ml-6">Tambah Produk</h1>
    </x-slot>
  </x-header>

  <div id="product-form" class="mt-10 mb-12 w-11/12">
    <form class="mx-2" action="" method="post" enctype="multipart/form-data">
        <div>
          <label class="font-medium tracking-wider" for="product_name">Nama Produk</label>
          <input class="mt-2 form-input" type="text" name="product_name" id="product_name" placeholder="Masukkan nama produk"
            required>
        </div>
        <div class="mt-4">
          <label class="font-medium tracking-wider" for="company">Pilih Perusahaan:</label>
            <select class="mt-2 form-input font-primary font-medium" name="company" id="company">
              <option value="pt-abc">PT. ABC</option>
              <option value="rm-makan-padang">RM Makan padang</option>
              <option value="yaumi-digital">Yaumi Digital</option>
              <option value="pt-mencari-cs">Pt. Mencari Cinta Sejati</option>
            </select>
        </div>
        <div class="mt-4">
          <label class="font-medium tracking-wider block mb-2" for="halal_status">
            Keterangan: (Status Sertifikasi Halal)
          </label>
          <div class="form-input border-dashed">
            <input class="mr-2" type="radio" name="halal_status" onclick="isHalal(this.value)" value="false">
            Belum Tersertifikasi<br>
            <input class="mr-2" type="radio" name="halal_status" onclick="isHalal(this.value)" value="true">
            Tersertifikasi Halal
          </div>
        </div>
        {{-- form below will only shown if product is halal --}}
        <div id="cert_number" class="mt-4 hidden">
          <label class="font-medium tracking-wider" for="certification_number">Nomor sertifikasi</label>
          <input class="mt-2 form-input" type="text" name="certification_number" id="certification_number" 
            placeholder="Masukkan nomor sertifikasi">
        </div>
        <div id="exp_date" class="mt-4 hidden">
          <label class="font-medium tracking-wider" for="cert_exp_date">Expire Date</label>
          <input class="mt-2 form-input" type="text" name="cert_exp_date" id="cert_exp_date" 
            placeholder="Masukkan tanggal kadaluarsa sertifikat halal">
        </div>
        {{-- end --}}
        <div class="mt-4">
          <label class="font-medium tracking-wider" for="composition">Komposisi</label>
          <input class="mt-2 form-input" type="text" name="composition" id="composition" 
            placeholder="Masukkan komposisi produk"
            required>
        </div>
        <div class="mt-4">
          <label class="font-medium tracking-wider" for="photo">Foto produk</label>
          <input class="mt-2 form-input border-dashed" type="file" name="photo" id="photo" 
            placeholder="Masukkan Foto produk"
            required>
        </div>
        <button class="btn w-full mt-32" type="submit" name="submit">Tambah Produk</button>
    </form>
  </div>

  <x-slot name="script">
    <script src="{{ asset('js/functions.js') }}"></script>
  </x-slot>

</x-admin-layout>

