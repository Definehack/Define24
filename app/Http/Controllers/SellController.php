<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    //

    public function Sell()
    {
        return view('sellFood');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
            'foodCategory' => 'required',
            'foodItemName' => 'required',
            'quantity' => 'required|integer',
            'Price' => 'required|numeric',
        ]);

        $path = $request->file('photo')->store('photos');

        $food = new Food;
        $food->photo = $path;
        $food->category = $request->input('foodCategory');
        $food->name = $request->input('foodItemName');
        $food->quantity = $request->input('quantity');
        $food->price = $request->input('Price');
        $food->save();

        return back()->with('success', 'Food item uploaded successfully.');
    }
}
