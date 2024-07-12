<x-layout>
    <x-slot:card_title>faskes</x-slot>
    <table id="table" class="table table-bordered table-hover mb-2">
        <tr>
            <th>Nama Faskes</th>
            <td>{{ $faskes->nama }}</td>
        </tr>
        <tr>
            <th>Nama Pengelola</th>
            <td>{{ $faskes->nama_pengelola }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $faskes->alamat }}</td>
        </tr>
        <tr>
            <th>Website</th>
            <td>{{ $faskes->website }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $faskes->email }}</td>
        </tr>
        <tr>
            <th>Rating</th>
            <td>{{ $faskes->rating }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $faskes->latitude }}</td>
        </tr>
        <tr>
            <th>Longtitude</th>
            <td>{{ $faskes->longtitude }}</td>
        </tr>
        <tr>
            <th>Jenis Faskes</th>
            <td>{{ $faskes->jenis_faskes_id }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $faskes->kategori->id }}</td>
        </tr>
        <tr>
            <th>Kabupaten/Kota</th>
            <td>{{ $faskes->kabkota->id }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('faskes') }}" class="btn btn-danger">Kembali</a>
    </div>
</x-layout>
