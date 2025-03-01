php artisan make:controller ProductController

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Afficher la liste des produits
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Afficher les détails d’un produit spécifique
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }

        return response()->json($product);
    }
}
