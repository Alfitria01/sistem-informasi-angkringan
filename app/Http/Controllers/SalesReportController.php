<?php

namespace App\Http\Controllers;

use App\Models\Order; // Assuming you have an Order model
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'date' => 'nullable|date',
            'product' => 'nullable|integer|exists:products,id', // Assuming product_id refers to Products table
            'status' => 'nullable|string'
        ]);
        
        // Example query: You can add filters from the request (e.g., by date, product, status)
        $sales = Order::with('product', 'customer') // Assuming you have these relationships
            ->when($request->input('date'), function ($query, $date) {
                return $query->whereDate('order_date', $date);
            })
            ->when($request->input('product'), function ($query, $product) {
                return $query->where('product_id', $product);
            })
            ->when($request->input('status'), function ($query, $status) {
                return $query->where('status', $status);
            })
            ->get();

        // Calculate summary data
        $totalSales = $sales->sum('quantity');
        $totalRevenue = $sales->sum('total_price');
        $totalOrders = $sales->count();

        // Pass the data to the view
        return view('sales-report', [
            'sales' => $sales,
            'totalSales' => $totalSales,
            'totalRevenue' => $totalRevenue,
            'totalOrders' => $totalOrders
        ]);
    }
}
