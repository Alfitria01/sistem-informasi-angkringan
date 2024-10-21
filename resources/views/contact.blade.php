{{-- resources/views/contact.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Angkringan Putra Pandawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            </nav>
    </div>
</header>

<!-- Contact Information -->
<main class="py-5">
    <div class="container">
        <h1>Contact Us</h1>
        <p>If you have any questions or inquiries, feel free to contact us!</p>
        <ul>
            <li>Email: contact@angkringanputrapandawa.com</li>
            <li>Phone: +62 123 456 789</li>
            <li>Address: Jl. Contoh Alamat No. 123, Kota, Negara</li>
        </ul>

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</main>

<!-- Footer -->
<footer>
    <p>© 2024 Angkringan Putra Pandawa. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
