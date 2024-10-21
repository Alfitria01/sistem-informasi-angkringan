<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-4 text-center">Your Cart</h2>

                <!-- Success Alert -->
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                    Your success message here.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <!-- Cart Items -->
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <table class="table align-middle table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Repeat for each cart item -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="path/to/image.jpg" alt="Product Name" class="img-fluid rounded me-3" style="width: 70px; height: 70px; object-fit: cover;">
                                            <div>
                                                <h6 class="mb-0">Product Name</h6>
                                                <small class="text-muted">ID: 123</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Rp 100,000.00</td>
                                    <td class="text-center">Rp 100,000.00</td>
                                    <td class="text-center">
                                        <form action="remove_cart_item_url" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="csrf_token_here">
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="bi bi-trash3"></i> Remove
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- End of item loop -->
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Total: 
                            <strong>Rp 100,000.00</strong>
                        </h5>
                        <a href="#" class="btn btn-success">Proceed to Checkout</a>
                    </div>
                </div>

                <!-- Empty Cart Alert -->
                <div class="alert alert-info text-center mt-4" role="alert" style="display: none;">
                    <h5>Your cart is empty.</h5>
                    <p>Browse our menu and add some items to your cart!</p>
                    <a href="menu_index_url" class="btn btn-primary mt-3">Explore Menu</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>