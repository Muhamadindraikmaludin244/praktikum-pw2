<x-layout>
    <x-slot:card_title>Faskes</x-slot>
    <div class="mb-2">
        <a href="{{ route('faskes.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah
        </a>
    </div>
    <table id="table" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Faskes</th>
                <th>Nama Pengelola</th>
                <th>Alamat</th>
                <th>Website</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_faskes as $faskes)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $faskes->nama }}</td>
                    <td>{{ $faskes->nama_pengelola }}</td>
                    <td>{{ $faskes->alamat }}</td>
                    <td>{{ $faskes->website }}</td>
                    <td>{{ $faskes->email }}</td>
                    <td>
                        <form action="{{ route('faskes.destroy', $faskes->id) }}" method="post">
                            <a href="{{ route('faskes.view', $faskes->id) }}" class="btn btn-primary btn-sm"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('faskes.edit', $faskes->id) }}" class="btn btn-warning btn-sm"><i
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
