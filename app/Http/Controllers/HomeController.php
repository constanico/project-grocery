<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function homeEn() {
        App::setlocale('en');
        return view('home.index', [
            'item' => Item::latest()->paginate(8)
        ]);
    }

    public function homeId() {
        App::setlocale('id');
        return view('home.index', [
            'item' => Item::latest()->paginate(8)
        ]);
    }

    public function detailproduct($id) {
        $item = Item::where('id', $id)->first();

        return view('home.detail', compact('item'));
    }
}
