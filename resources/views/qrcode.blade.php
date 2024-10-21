<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QR Code Generator</title>
    </head>
    <body>
        <h1>Generate QR Code</h1>
        <form action="/qr-code" method="POST">
            @csrf  <!-- Ensure CSRF protection for POST requests -->
            <input type="text" name="name" placeholder="Enter Name" required>

            <input type="text" name="table_number" placeholder="Enter Table Number" required>
            
            <button type="submit">Generate QR Code</button>
        </form>
    </body>
</html>
