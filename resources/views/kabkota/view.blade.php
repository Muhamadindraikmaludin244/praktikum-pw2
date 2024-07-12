<x-layout>
    <x-slot:card_title>Kabupaten/Kota</x-slot>
    <table id="table" class="table table-bordered table-hover mb-2">
        <tr>
            <th>Nama Kabupaten/Kota</th>
            <td>{{ $kabkota->nama }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $kabkota->latitude }}</td>
        </tr>
        <tr>
            <th>Longtitude</th>
            <td>{{ $kabkota->longtitude }}</td>
        </tr>
        <tr>
            <th>Provinsi</th>
            <td>{{ $kabkota->provinsi->nama }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('kabkota') }}" class="btn btn-danger">Kembali</a>
    </div>
</x-layout>
