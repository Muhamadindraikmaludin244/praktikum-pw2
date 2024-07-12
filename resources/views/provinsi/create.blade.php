<x-layout>
    @push('links')
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    @endpush
    <x-slot:card_title>Provinsi</x-slot>
    <form action="{{ route('provinsi.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Provinsi</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="ibukota">Ibu Kota</label>
            <input type="text" class="form-control" id="ibukota" name="ibukota" value="{{ old('ibukota') }}">
            @error('ibukota')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude') }}">
            @error('latitude')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="longtitude">Longtitude</label>
            <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{ old('longtitude') }}">
            @error('longtitude')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('provinsi') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    @push('scripts')
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @endpush
</x-layout>
