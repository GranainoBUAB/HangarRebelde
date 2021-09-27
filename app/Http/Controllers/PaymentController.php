<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function order()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $products = DB::table('products')
            ->join('carts', 'products.id', '=', 'carts.product_id')
            ->where('user_id', '=', $user_id)
            ->get();
        $sumAndQuantity = Cart::sumAndQuantity();
        return view('purchase', compact('products', 'sumAndQuantity'));
    }

    public function purchase($amount)
    {
        $this->charge($amount);    
        Cart::deleteAllProductsInCart();
        return redirect()->route('getCart')
        ->with('message' , '¡Compra realizada con éxito, muchas gracias!');
    }
    
    private function charge($amount)
    {
        $token = $_POST['stripeToken'];
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            Charge::create ([
                    "amount" => $amount,
                    "currency" => "eur",
                    "source" => $token,
                    "description" => 'Pago en Hangar Rebelde'
            ]); 
        }
        catch (Exception $e) {
            $e->getMessage(["Oh no, ha habido un error!"]);
        }
    }
}
