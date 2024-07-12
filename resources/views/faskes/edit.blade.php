<x-layout>
    @push('links')
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet"
            href="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    @endpush
    <x-slot:card_title>Faskes</x-slot>
    <form action="{{ route('faskes.update', $faskes->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama">Nama Faskes</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $faskes->nama }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_pengelola">Nama Pengelola</label>
            <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola" value="{{ $faskes->nama_pengelola }}">
            @error('nama_pengelola')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" rows="3">{{ $faskes->alamat }}</textarea>
            @error('alamat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" id="website" name="website" value="{{ $faskes->website }}">
            @error('website')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $faskes->email }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="tel" class="form-control" id="rating" name="rating" value="{{ $faskes->rating }}">
            @error('rating')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="latitude">latitude</label>
            <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $faskes->latitude }}">
            @error('latitude')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="longtitude">Longtitude</label>
            <input type="text" class="form-control" id="longtitude" name="longtitude" value="{{ $faskes->longtitude }}">
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
                        {{ $faskes->jenis_faskes_id == $jenis_faskes->id ? 'selected' : '' }}>
                        {{ $jenis_faskes->nama }}
                    </option>
                @endforeach
            </select>
            @error('kategori_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori_id">Kategori</label>
            <select name="kategori_id" id="kategori_id" class="custom-select">
                <option value="">--- Pilih ---</option>
                @foreach ($list_kategori as $kategori)
                    <option value="{{ $kategori->id }}"
                        {{ $faskes->kategori_id == $kategori->id ? 'selected' : '' }}>
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
                        {{ $faskes->kabkota_id == $kabkota->id ? 'selected' : '' }}>
                        {{ $kabkota->nama }}
                    </option>
                @endforeach
            </select>
            @error('kabkota_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('faskes') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-warning">Edit</button>
    </form>
    @push('scripts')
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('assets') }}/plugins/moment/moment.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="{{ asset('assets') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @endpush
</x-layout>
