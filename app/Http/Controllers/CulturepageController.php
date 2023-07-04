<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culture;
use Illuminate\Support\Str;

class CulturepageController extends Controller
{
    public function index()
    {
        $culture = Culture::with(['kategori'])->paginate(10);

        return view('landingpage.culturepage', compact('culture'), [
            "title" => "Culture Page",
            "active" => "Culture"
        ]);
    }
}
