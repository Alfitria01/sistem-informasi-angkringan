<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Bahan Baku</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Daftar Bahan Baku</h1>

        <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Link to create new Bahan Baku -->
        <div class="d-flex justify-content mb-3">
            <a href="{{ route('bahan_baku.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Tambah Bahan Baku
            </a>
        </div>

        <!-- Table for displaying Bahan Baku data -->
        <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bahan_bakus as $bahan_baku)
                        <tr>
                            <td>{{ $bahan_baku->nama }}</td>
                            <td>{{ $bahan_baku->jumlah }}</td>
                            <td>{{ $bahan_baku->satuan }}</td>
                            <td>
                                <!-- Link to show details of the Bahan Baku -->
                                <a href="{{ route('bahan_baku.show', $bahan_baku->id) }}" class="btn btn-info btn-sm text-white">
                                    <i class="bi bi-eye"></i> Detail
                                </a>
                                
                                <!-- Link to edit the Bahan Baku -->
                                <a href="{{ route('bahan_baku.edit', $bahan_baku->id) }}" class="btn btn-warning btn-sm text-white">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                
                                <!-- Form to delete the Bahan Baku -->
                                <form action="{{ route('bahan_baku.destroy', $bahan_baku->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus bahan baku ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
