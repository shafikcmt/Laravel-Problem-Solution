<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use PDF;

class ProductoController extends Controller
{
    public function index () {
        $products = Product::all();
        return view('/index', compact ('products'));
    }
    public function createPDF () {
        // Retrieve all products from the db
        $products = Product::all();
        view()->share ('products', $products);
        $pdf = PDF ::loadView ('index', $products);
        return $pdf->download ('file-pdf.pdf');
    }
}
