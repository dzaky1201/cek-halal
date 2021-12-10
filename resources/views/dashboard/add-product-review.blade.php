@extends('layouts.admin-layout')

@section('doc_title')
  <title>Tambah Ulasan</title>
@endsection

@section('content')
    @extends('layouts.header')
    @section('title')
      <h1 class="text-lg -ml-6">Tambah Ulasan</h1>
    @endsection

    <div id="review-form" class="mt-10 mb-12 w-11/12">
      <form class="mx-2" action="" method="post" enctype="multipart/form-data">
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="product_name">Nama Produk:</label>
              <select class="mt-1 form-input font-primary font-medium" name="product_name" id="product_name">
                <option value="indomie">Indomie</option>
                <option value="j_co">J.Co Donat</option>
                <option value="chatime">Chatime</option>
              </select>
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="product_name">Pengulas</label>
            <input class="mt-1 form-input" type="text" name="product_name" id="product_name" 
              placeholder="Masukkan nama Pengulas"
              required>
          </div>
          <div class="mt-4 pr-1">
            <label class="font-medium tracking-wider mb-2" for="review">Ulasan</label>
            <textarea 
              id="review" 
              class="mt-1 form-input resize-x" 
              name="review" 
              rows="6" 
              cols="30" 
              placeholder="Masukkan Ulasan"></textarea>
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="source">Sumber</label>
            <input class="mt-1 form-input" type="text" name="source" id="source" 
              placeholder="Masukkan URL sumber"
              required>
          </div>
          <div class="mt-4">
            <label class="font-medium tracking-wider" for="source_photo">Foto sumber</label>
            <input class="mt-1 form-input border-dashed" type="file" name="source_photo" id="source_photo" 
              7 placeholder="Masukkan Foto sumber"
              required>
          </div>
          <button class="btn w-full mt-32" type="submit" name="submit">Tambahkan Ulasan</button>
      </form>
    </div>
@endsection
