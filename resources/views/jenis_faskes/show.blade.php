<x-layout>
    <x-slot:card_title>Jenis Faskes</x-slot>
    <div class="mb-2">
        <a href="{{ route('jenis_faskes.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_jenisfaskes as $jenis_faskes)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $jenis_faskes->nama }}</td>
                    <td>
                        <form action="{{ route('jenis_faskes.destroy', $jenis_faskes->id) }}" method="post">
                            <a href="{{ route('jenis_faskes.view', $jenis_faskes->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('jenis_faskes.edit', $jenis_faskes->id) }}" class="btn btn-warning btn-sm"><i
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
