<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Product;
use Illuminate\Http\Request;
use \PDF;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function Hello()
    {
        return 'Hello World';
    }
    public function index () {
        $products = Product::all();
        return view('index', compact('products'));
    }
    public function createPDF () {
        // Retrieve all products from the db
        $products = Product::all();
        view()->share('products', $products);
        $pdf = PDF::loadView('index',['products'=>$products]);
        return $pdf->download('file-pdf.pdf');
        // return dd($pdf);
    }
}
