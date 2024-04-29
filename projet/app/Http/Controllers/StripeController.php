<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function session(Request $request)
    {

        $id = $request->offre_id;
        $titre = $request->titre;
        $prix = (int)$request->prix;

       
        $total = $prix*10;

        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $session = \Stripe\Checkout\Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => $titre,
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success', ['offre_id' => $id]),
            'cancel_url' => route('Auth.login'),

        ]);

        return redirect()->away($session->url);
    }
    // public function checkout()
    // {
    // }

    public function success(Request $request)
    {

        $id = $request->route('offre_id');
      
        $offre = Offre::find($id);
        $offre->payment = 1;
        
        $offre->save();
        return redirect('/confirmation')->with('payment', 'Le payment est bien effectuer');
        
    }
}
