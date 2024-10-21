<!-- resources/views/products/show.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $product->title }}</title>
</head>
<body>
    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="mb-4">{{ $product->title }}</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <img src="{{ asset('storage/products/' . $product->image) }}" class="img-fluid rounded" alt="{{ $product->title }}">
            </div>

            <div class="col-md-6">
                <h3 class="mb-3">Detail Produk</h3>
                <p><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p><strong>Stock:</strong> {{ $product->stock }}</p>
                <p><strong>Description:</strong> {{ $product->description ?: 'No description available.' }}</p>

                <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Products</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning mt-3">Edit</a>
                
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
