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

    /* public function purchase(Request $request)
    {   
        $user_id = auth()->id();
        $products = $this->cartRepo->getPurchasedProducts($user_id);
        $total = $this->cartRepo->calculateTotal($products); 
        $amount = $total * 100; 
        
        $this->cartRepo->buyProductsInBasket($user_id);
        $user = User::find($user_id);
        $user->id = $user->id;
        $user->name = $user->name;
        $user->email = $user->email;
        $user->password = $user->password;
        $user->direction = $request->direction;
        $user->location = $request->location;
        $user->cardholder = $request->cardholder;
        
        $user->save(); 
        
        return redirect('/')
        ->with('message' , '¡Compra realizada con éxito, muchas gracias!');

    } */

    public function purchase($token)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = $_POST['stripeToken'];

        $charge =Charge::create([
            "amount" => 1500,
            "currency" => "eur",
            "description" => "Pago en mi tienda",
            "source" => $token
        ]);

        echo "<pre>", print_r($charge), "</pre>";



        /* try {
            $token = $_POST['stripeToken'];
            Stripe::setApiKey(env('STRIPE_SECRET'));
            Charge::create ([
                    "amount" => 1500,
                    "currency" => "eur",
                    "source" => $token,
                    "description" => 'Compra en Hangar Rebelde'
            ]); 
        }
        catch (Exception $e) {
            $e->getMessage(["Oh no, ha habido un error!"]);

            // return view('cart.purchaseOrder', ["message" => "Oh no, ha habido un error!"]);
        } */
    }
}
