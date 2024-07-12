<x-layout>
    @push('links')
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    @endpush
    <x-slot:card_title>Kabupaten/Kota</x-slot>
    <form action="{{ route('kabkota.update', $kabkota->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Kabupaten/Kota</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $kabkota->nama }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $kabkota->latitude }}">
            @error('latitude')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="longtitude">Longtitude</label>
            <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{ $kabkota->longtitude }}">
            @error('longtitude')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="provinsi_id">Provinsi</label>
            <select name="provinsi_id" id="provinsi_id" class="custom-select">
                <option value="">--- Pilih ---</option>
                @foreach ($list_provinsi as $provinsi)
                    <option value="{{ $provinsi->id }}"
                        {{ $kabkota->provinsi_id == $provinsi->id ? 'selected' : '' }}>
                        {{ $provinsi->nama }}
                    </option>
                @endforeach
            </select>
            @error('provinsi_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('kabkota') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
    @push('scripts')
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @endpush
</x-layout>
