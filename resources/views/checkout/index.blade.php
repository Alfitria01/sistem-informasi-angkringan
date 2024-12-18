<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2>Checkout</h2>
        <div class="card shadow">
            <div class="card-body">
                <h5>Cart Summary</h5>
                <ul class="list-group mb-3">
                    @foreach($cartItems as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>{{ $item['menu_title'] }} (x{{ $item['quantity'] }})</span>
                            <span>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
                        </li>
                    @endforeach
                </ul>
                <h5>Total: Rp {{ number_format($cartTotal, 0, ',', '.') }}</h5>
                <a href="#" class="btn btn-success mt-3">Confirm Order</a>
            </div>
        </div>
    </div>
</body>
</html>
