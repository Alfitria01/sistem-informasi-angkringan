{{-- resources/views/about.blade.php --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>About Us - Angkringan Putra Pandawa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f9f9f9;
                color: #333;
                padding-top: 0px; /* Space for sticky header */
            }

            header {
                background-color: #5D4037; /* Brown */
                color: white;
                padding: 10px 0;
                position: sticky;
                top: 0;
                z-index: 1000;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            }

            header .container {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            header h1 {
                font-weight: 700;
                margin: 0;
                font-size: 2rem; /* Larger font size */
            }

            header nav {
                display: flex;
                gap: 15px; /* Space between links */
            }

            header nav a {
                color: white;
                font-weight: 500;
                padding: 10px 20px; /* Padding for buttons */
                border-radius: 5px; /* Rounded corners */
                text-decoration: none;
                transition: background-color 0.3s, transform 0.3s;
            }

            header nav a:hover {
                background-color: #8D6E63; /* Lighter brown */
                transform: scale(1.05); /* Scale up on hover */
            }
            /* Footer */
            footer {
                background-color: #3e2723; /* Dark brown */
                padding: 5px 0;
                text-align: center;
                color: white;
            }

            footer p {
                color: #f5f5f5; /* Light color for contrast */
                font-size: 1rem;
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container d-flex justify-content-between align-items-center">
                <h1>Angkringan Putra Pandawa</h1>
                <nav>
                    <a href="{{ route('home')}}">Home</a>
                    <a href="{{ route('about')}}">About Us</a>
                    <a href="{{ route('menu.index') }}">Menu</a>
                    <a href="{{ route('contact')}}">Contact</a>
                    <!-- Ikon Keranjang -->
                    <a href="{{ route('cart.index') }}" class="ms-3 position-relative">
                        <i class="bi bi-cart-fill" style="font-size: 1.5rem; color: white;"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <!-- Dinamis, ganti dengan jumlah item di keranjang -->
                        </span>
                    </a>
                </nav>
            </div>
        </header>

        <!-- About Section -->
        <main class="py-5">
            <div class="container">
                <h2 class="mb-4">About Us</h2>
                <p>Welcome to Angkringan Putra Pandawa! We serve a variety of traditional Indonesian drinks and snacks, made with love and care.</p>
                <p>Our mission is to bring a piece of our culture to your table, providing a warm and welcoming atmosphere for all our guests.</p>
                <p>Thank you for visiting us!</p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-4">Kembali ke Homepage</a>
            </div>
        </main>

        <!-- Footer -->
        <footer>
            <p>© 2024 Angkringan Putra Pandawa. All rights reserved.</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
