<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkringan Putra Pandawa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
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

        /* Jumbotron */
        .jumbotron {
            position: relative; /* Untuk anak elemen yang absolute */
            height: 90vh; /* Sesuaikan tinggi jumbotron */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url("{{ asset('img/jumbotron-.jpg') }}") center/cover no-repeat;
            overflow: hidden; /* Mencegah elemen overflow */
            margin: 0; /* Hilangkan margin bawaan */
        }

        /* Overlay untuk kontras teks */
        .jumbotron::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Overlay hitam dengan transparansi */
            z-index: 1; /* Pastikan overlay berada di bawah teks */
        }

        /* Teks di atas jumbotron */
        .jumbotron * {
            position: relative;
            z-index: 2; /* Agar berada di atas overlay */
            color: white; /* Warna teks */
            padding: 0 15px; /* Sedikit padding agar teks tidak mepet */
        }

        /* Responsivitas untuk layar kecil */
        @media (max-width: 768px) {
            .jumbotron {
                height: 60vh; /* Sesuaikan tinggi untuk layar kecil */
            }
            .jumbotron h1 {
                font-size: 2rem; /* Perkecil ukuran teks */
            }
        }

        .jumbotron h2 {
            font-size: 3.5rem;
            font-weight: 700;
            color: #f5f5f5; /* Light color for contrast */
            z-index: 2;
            position: relative;
        }

        .jumbotron p {
            font-size: 1.25rem;
            color: #d0d0d0; /* Pastel blue */
            margin-top: 20px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            z-index: 2;
            position: relative;
        }

        /* About Section */
        #about {
            padding: 80px 0;
            background-color: #ffffff; /* White */
            text-align: center;
        }

        #about h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #3e2723; /* Dark brown */
        }

        #about p {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #666;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Menu Section */
        #menu {
            padding: 80px 0;
            background-color: #f9f9f9; /* Light background */
        }

        #menu h2 {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            color: #3e2723; /* Dark brown */
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Responsive grid */
            gap: 20px; /* Space between items */
            justify-items: center; /* Center items in their grid cells */
            padding: 0 15px; /* Padding on the sides */
        }

        .menu-card {
            background-color: #ffffff; /* White */
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            max-width: 300px;
            margin: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .menu-card:hover {
            transform: translateY(-5px);
        }

        .menu-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #4CAF50; /* Green */
        }

        .menu-card p {
            color: #666;
            font-size: 1rem;
            margin-top: 10px;
        }

        /* Contact Section */
        #contact {
            padding: 50px 0;
            background-color: #ffffff; /* White */
            text-align: center;
        }

        #contact h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #3e2723; /* Dark brown */
        }

        #contact p {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #666;
        }

        #contact a {
            color: #4CAF50; /* Green */
            text-decoration: none;
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

        @media (max-width: 768px) {
            .jumbotron h2 {
                font-size: 2.5rem;
            }
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


    <!-- Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            <h2>Taste the Authentic Flavors</h2>
            <p>At Angkringan Putra Pandawa, we bring you the finest and freshest ingredients prepared by our talented chefs.</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <p>We are dedicated to providing you with the best angkringan experience, combining traditional recipes with a modern touch.</p>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu">
        <div class="container">
            <h2>Our Menu</h2>
            <div class="menu-grid">
                <div class="menu-card">
                    <h3>Jus</h3>
                    <p>Refreshing fruit juice made from seasonal fruits.</p>
                </div>
                <div class="menu-card">
                    <h3>Teh Es/Panas</h3>
                    <p>Traditional iced/hot tea with a hint of sweetness.</p>
                </div>
                <div class="menu-card">
                    <h3>Kopi Es/Panas</h3>
                    <p>Coffee served hot or iced, brewed to perfection.</p>
                </div>
                <div class="menu-card">
                    <h3>Kacang Hijau</h3>
                    <p>Sweet mung bean porridge with coconut milk.</p>
                </div>
                <div class="menu-card">
                    <h3>Gorengan</h3>
                    <p>Crispy fried snacks, perfect for sharing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>If you have any questions or want to place an order, feel free to reach out!</p>
            <p>Email: <a href="mailto:info@angkringanputrapandawa.com">info@angkringanputrapandawa.com</a></p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Angkringan Putra Pandawa. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>
</body>

</html>
