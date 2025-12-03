<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    // show menu
    public function index()
    {
        // ask model for all wishes
        $wishes = Wish::all();

        // send them to the view
        return view('wishlist', ['wishes' => $wishes]);
    }

    // cook order
    public function store(Request $request)
    {
        // create a new wish in the database
        Wish::create([
            'title' => $request->title
        ]);

        // refresh the page
        return redirect('/');
    }

    // clear table
    public function destory($id)
    {

        // find the wish by ID and delete it
        Wish::find($id)->delete();

        // refresh the page
        return redirect('/');
    }
}
