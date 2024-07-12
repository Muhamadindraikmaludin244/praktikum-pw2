<x-layout>
    <x-slot:card_title>Jenis Faskes</x-slot>
    <table id="table" class="table table-bordered table-hover mb-2">
        <tr>
            <th class="w-25">Jenis Faskes</th>
            <td>{{ $jenis_faskes->nama }}</td>
        </tr>
    </table>
    <div>
        <a href="{{ route('jenis_faskes') }}" class="btn btn-danger">Kembali</a>
    </div>
</x-layout>
