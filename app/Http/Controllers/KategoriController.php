<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Culture;

class KategoriController extends Controller
{
    public function index()
    {
        $footerculture = Culture::all()->take(6);
        $culture = Culture::all();
        $culture->groupBy('kategori_id');
        $culturekanan = Culture::with(['kategori'])->oldest()->limit(2)->get();
        $kategori = Kategori::withCount('culture')->get();
        $trendingCultures = Culture::withCount('views')
        ->orderBy('views_count', 'desc')
        ->limit(2)
        ->get();
        return view('landingpage.kategori', compact('footerculture','culture','culturekanan','kategori','trendingCultures'), [
            "title" => "Kategori Culture",
            "active" => "Kategori"
        ]);
    }
}
