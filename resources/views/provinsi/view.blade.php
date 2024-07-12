<x-layout>
    <x-slot:card_title>Provinsi</x-slot>
    <table id="table" class="table table-bordered table-hover mb-2">
        <tr>
            <th>Nama Provinsi</th>
            <td>{{ $provinsi->nama }}</td>
        </tr>
        <tr>
            <th>Ibu Kota</th>
            <td>{{ $provinsi->ibukota }}</td>
        </tr>
        <tr>
            <th>Latitude</th>
            <td>{{ $provinsi->latitude }}</td>
        </tr>
        <tr>
            <th>Longtitude</th>
            <td>{{ $provinsi->longtitude }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('provinsi') }}" class="btn btn-danger">Kembali</a>
    </div>
</x-layout>
