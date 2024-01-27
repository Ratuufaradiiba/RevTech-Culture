<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culture;
use Illuminate\Support\Str;

class CulturepageController extends Controller
{
    public function index()
    {
        $footerculture = Culture::all()->take(6);
        $culture = Culture::with(['kategori'])->paginate(10);
        $trendingCultures = Culture::withCount('views')
        ->orderBy('views_count', 'desc')
        ->limit(2)
        ->get();

        return view('landingpage.culturepage', compact(['footerculture','culture','trendingCultures']), [
            "title" => "Culture Page",
            "active" => "Culture"
        ]);
    }
}
