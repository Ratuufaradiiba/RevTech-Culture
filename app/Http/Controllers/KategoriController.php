<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Culture;

class KategoriController extends Controller
{
    public function index()
    {
        $culture = Culture::all();
        $culture->groupBy('kategori_id');
        $culturekanan = Culture::with(['kategori'])->oldest()->limit(2)->get();
        $kategori = Kategori::withCount('culture')->get();
        return view('landingpage.kategori', compact('culture','culturekanan','kategori'), [
            "title" => "Kategori Culture",
            "active" => "Kategori"
        ]);
    }
}
