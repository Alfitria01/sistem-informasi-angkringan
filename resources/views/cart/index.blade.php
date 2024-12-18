<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .card {
            border-radius: 15px;
        }

        .card-footer {
            background-color: #fff;
            border-top: 1px solid #dee2e6;
            border-radius: 0 0 15px 15px;
        }

        .table thead {
            background-color: #343a40;
            color: white;
            border-radius: 10px;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s;
        }

        .btn {
            transition: all 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .alert {
            border-radius: 10px;
        }

        .img-fluid {
            border-radius: 10px;
        }

        .badge {
            font-size: 0.85rem;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Your Cart</h2>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Error Message -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($cartItems as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ $item['image_url'] ?? 'https://via.placeholder.com/70' }}" alt="{{ $item['menu_title'] }}" class="img-fluid rounded me-3" style="width: 70px; height: 70px;">
                                        <div>
                                            <h6>{{ $item['menu_title'] }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('cart.update', $item['menu_id']) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control w-50 mx-auto">
                                        <button type="submit" class="btn btn-sm btn-primary mt-2">Update</button>
                                    </form>
                                </td>
                                <td class="text-center">Rp {{ number_format((float) $item['menu_price'], 0, ',', '.') }}</td>
                                <td class="text-center">Rp {{ number_format((float) $item['menu_price'] * (int) $item['quantity'], 0, ',', '.') }}</td>
                                <td class="text-center">
                                    <form action="{{ route('cart.destroy', $item['menu_id']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Your cart is empty.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <h4>Total: Rp {{ number_format($cartTotal, 0, ',', '.') }}</h4>
                <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">Proceed to Checkout</a>
            </div>
            <a href="{{ route('menu.index') }}" class="btn btn-primary mt-4">Kembali ke Menu</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
