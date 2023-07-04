<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use App\Models\DetailCulture;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDF;



class CultureController extends Controller
{
    public function index()
    {
        $culture = Culture::all();
        return view('admin.culture', compact('culture'), [
            "title" => "Culture Tabel",
            "active" => "Culture"
        ]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.formculture', compact('kategori'), [
            "title" => "Form Culture",
            "active" => "Culture"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_culture' => 'required|unique:cultures|max:45',
            'desc_culture' => 'required|string',
            'sejarah_culture' => 'required|string',
            'makna_culture' => 'required|string',
            'ciri_culture' => 'required|string',
            'video_culture' => 'required|url',
            'gambar_culture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required|exists:kategori,id',

        ]);

        $culture = new Culture();
        $culture->nama_culture = $request->nama_culture;
        $culture->desc_culture = $request->desc_culture;
        $culture->kategori_id = $request->kategori_id;

        if ($request->hasFile('gambar_culture')) {
            $filename = $request->file('gambar_culture')->hashName();
            $request->file('gambar_culture')->move('admin/assets/img/cultures', $filename);
            $culture->gambar_culture = 'admin/assets/img/cultures/' . $filename;
        }
        if ($request->hasFile('file')) {
            $filename = $request->file('file')->hashName();
            $request->file('file')->move('admin/assets/img/cultures', $filename);
            $culture->file = 'admin/assets/img/cultures/' . $filename;
        }


        $culture->save();

        $detailculture = new DetailCulture();
        $detailculture->sejarah_culture = $request->sejarah_culture;
        $detailculture->makna_culture = $request->makna_culture;
        $detailculture->ciri_culture = $request->ciri_culture;
        $detailculture->video_culture = $request->video_culture;

        $culture->detailculture()->save($detailculture);

        return redirect()->route('culture.index')->with('success', 'Culture berhasil ditambahkan');
    }

    public function show($id)
    {
        $row = Culture::find($id);
        return view('admin.detailculture', compact('row'), [
            "title" => "Detail Culture",
            "active" => "Culture"
        ]);
    }

    public function edit($id)
    {
        $culture = Culture::findOrFail($id);
        $kategori = Kategori::all();
        $detailculture = DetailCulture::all();
        return view('admin.editculture', compact('culture', 'kategori', 'detailculture'), [
            "title" => "Edit Culture",
            "active" => "Culture"
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_culture' => 'required|string',
            'desc_culture' => 'required|string',
            'sejarah_culture' => 'required|string',
            'makna_culture' => 'required|string',
            'ciri_culture' => 'required|string',
            'video_culture' => 'required|url',
            'gambar_culture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kategori_id' => 'required|exists:kategori,id',

        ]);

        $culture = Culture::findOrFail($id);
        $culture->nama_culture = $request->nama_culture;
        $culture->desc_culture = $request->desc_culture;
        $culture->kategori_id = $request->kategori_id;

        if ($request->hasFile('gambar_culture')) {
            if ($culture->gambar_culture != null) {
                unlink($culture->gambar_culture);
            }
            $filename = $request->file('gambar_culture')->hashName();
            $request->file('gambar_culture')->move('admin/assets/img/cultures', $filename);
            $culture->gambar_culture = 'admin/assets/img/cultures/' . $filename;
        }
        if ($request->hasFile('file')) {
            if ($culture->file != null) {
                unlink($culture->file);
            }
            $filename = $request->file('file')->hashName();
            $request->file('file')->move('admin/assets/img/cultures', $filename);
            $culture->file = 'admin/assets/img/cultures/' . $filename;
        }

        $culture->save();

        $detailculture = DetailCulture::findOrFail($id);
        $detailculture->sejarah_culture = $request->sejarah_culture;
        $detailculture->makna_culture = $request->makna_culture;
        $detailculture->ciri_culture = $request->ciri_culture;
        $detailculture->video_culture = $request->video_culture;

        $culture->detailculture()->save($detailculture);

        return redirect()->route('culture.index')->with('success', 'Culture berhasil diupdate');
    }

    public function destroy($id)
    {
        $row = Culture::find($id);
        if (!empty($row->gambar_culture)) unlink($row->gambar_culture);
        if (!empty($row->file)) unlink($row->file);
        Culture::where('id', $id)->delete();

        return redirect()->route('culture.index')->with('success', 'Culture Berhasil Di Hapus');
    }

    public function culturePDF()
    {
        $culture = Culture::all();
        $pdf = PDF::loadView('admin.culturePDF', [
            'culture' => $culture,
            'title' => 'CulturePDF',
            "active" => "Culture Table"
        ]);

        return $pdf->download('dataculture.pdf');
    }
}
