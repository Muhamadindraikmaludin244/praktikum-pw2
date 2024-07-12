<x-layout>
    @push('links')
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    @endpush
    <x-slot:card_title>Faskes</x-slot>
    <form action="{{ route('faskes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Faskes</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_pengelola">Nama Pengelola</label>
            <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola" value="{{ old('nama_pengelola') }}">
            @error('nama_pengelola')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
            @error('alamat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" id="website" name="website" value="{{ old('website') }}">
            @error('website')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="tel" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
            @error('rating')
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
        <div class="form-group">
            <label for="jenis_faskes_id">Jenis Faskes</label>
            <select name="jenis_faskes_id" id="jenis_faskes_id" class="custom-select">
                <option value="">--- Pilih ---</option>
                @foreach ($list_jenisfaskes as $jenis_faskes)
                    <option value="{{ $jenis_faskes->id }}"
                        {{ old('jenis_faskes_id') == $jenis_faskes->id ? 'selected' : '' }}>
                        {{ $jenis_faskes->nama }}
                    </option>
                @endforeach
            </select>
            @error('jenisfaskes_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="custom-select">
                <option value="">--- Pilih ---</option>
                @foreach ($list_kategori as $kategori)
                    <option value="{{ $kategori->id }}"
                        {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="kabkota_id">Kabupaten/Kota</label>
            <select name="kabkota_id" id="kabkota_id" class="custom-select">
                <option value="">--- Pilih ---</option>
                @foreach ($list_kabkota as $kabkota)
                    <option value="{{ $kabkota->id }}"
                        {{ old('kabkota_id') == $kabkota->id ? 'selected' : '' }}>
                        {{ $kabkota->nama }}
                    </option>
                @endforeach
            </select>
            @error('kabkota_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('faskes') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    @push('scripts')
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @endpush
</x-layout>
