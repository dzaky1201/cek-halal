<div id="search-container">
    <form class="mx-1 flex items-center" action="{{$action}}">
        <input class="form-input border-2 font-primary text-sm h-12 mr-4" type="text" name="search" id="search"
            placeholder="{{ $placeholder ?? 'Masukkan kata kunci' }}" value="{{request('search')}}">
        <button class="btn w-32 mx-auto flex items-center justify-center font-primary font-semibold" type="submit">
            Cari
            {{-- search icon --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="#fff">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
    </form>
</div>
