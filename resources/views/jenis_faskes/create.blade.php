<x-layout>
    <x-slot:card_title>Jenis Faskes</x-slot>
    <form action="{{ route('jenis_faskes.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama">Jenis Faskes</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <a href="{{ route('jenis_faskes') }}" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout>
