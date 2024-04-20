<?php

namespace App\Http\Controllers;

use App\Models\FoodStore;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function Buy()
    {
        return view('buyFood');
    }

    public function purchase($id)
    {
        $food = FoodStore::find($id);

        // Check if the food item exists and if the authenticated user is not the owner of the food item
        if ($food && $food->user_id != auth()->id()) {
            // Purchase the food item
            $food->Buyer_id = auth()->id();
            $food->save();

            return redirect()->route('dashboard')->with('success', 'Food item purchased successfully');
        }
    }
}
