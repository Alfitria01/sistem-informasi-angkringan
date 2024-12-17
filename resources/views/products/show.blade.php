<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Product</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-4">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
        @endif

        <h1 class="text-center mb-4">$product->title</h1>
        
        <div class=col-md-6 mb-4>
            <img src="{{ asset('storage/products/'.$product->image)}}" class="img-fluid rounded" alt="{{$product->title}}"
        </div>

        <!-- Card Detail Bahan Baku -->
        <div class="card shadow">
            <div class="card-body">
                <!-- Nama Bahan Baku -->
                <p class="mb-2">
                    <strong>Price</strong> {{ $product->price }}
                </p>
                <!-- Jumlah dan Satuan -->
                <p class="mb-2">
                    <strong>Stock</strong> {{ $product->stock }}
                </p>
                <!-- Jumlah dan Satuan -->
                <p class="mb-2">
                    <strong>Description</strong> {{ $product->description ?: 'No description available.' }}
                </p>
                
                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-between mt-4">
                    <!-- Kembali ke Daftar Bahan Baku -->
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <div>
                        <!-- Edit Bahan Baku -->
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning text-white me-2">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <!-- Hapus Bahan Baku -->
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus bahan baku ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
