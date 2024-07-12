<x-layout>
    <x-slot:card_title>Kabupaten/Kota</x-slot>
    <div class="mb-2">
        <a href="{{ route('kabkota.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kabupaten/Kota</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_kabkota as $kabkota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kabkota->nama }}</td>
                    <td>
                        <form action="{{ route('kabkota.destroy', $kabkota->id) }}" method="post">
                            <a href="{{ route('kabkota.view', $kabkota->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('kabkota.edit', $kabkota->id) }}" class="btn btn-warning btn-sm"><i
                                    class="fas fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @push('scripts')
        <script>
            $('#table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        </script>
    @endpush
</x-layout>
