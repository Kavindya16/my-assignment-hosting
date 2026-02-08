<?php



namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $products = Product::where('category', $category)->get();

        return response()->json($products);
    }
}

