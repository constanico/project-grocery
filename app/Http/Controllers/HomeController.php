<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        return view('home.index', [
            'item' => Item::latest()->paginate(8)
        ]);
    }

    public function detailproduct($id) {
        $item = Item::where('id', $id)->first();

        return view('home.detail', compact('item'));
    }
}
