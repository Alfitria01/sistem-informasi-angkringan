<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\Response;

class QrCodeController extends Controller
{
    public function generate(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'table_number' => 'required|string|max:10',
        ]);

        // Prepare the data to be encoded in the QR code
        $data = 'Name: ' . $request->name . ', Table: ' . $request->table_number;

        // Build the QR code
        $result = Builder::create()
            ->writer(new PngWriter()) // Use PNG writer
            ->data($data)             // QR code data
            ->encoding(new Encoding('UTF-8')) // Set encoding
            ->errorCorrectionLevel(ErrorCorrectionLevel::High) // Use the correct method
            ->size(300)               // Set size
            ->margin(10)              // Set margin
            ->labelText('Scan Me!')   // Optional label
            ->build();

        // Return the QR code as a PNG response
        return new Response($result->getString(), 200, [
            'Content-Type' => 'image/png',
        ]);
    }
}
