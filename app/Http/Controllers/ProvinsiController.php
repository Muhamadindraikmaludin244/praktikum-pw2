<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProvinsiController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Provinsi',
        ];
        $list_provinsi = Provinsi::all();
        View::share($data_layout);
        return view('provinsi.show', ['list_provinsi' => $list_provinsi]);
    }

    public function create()
    {
        return view('provinsi.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'ibukota' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
        ]);

        Provinsi::create($request->all());

        return redirect(route('provinsi'))->with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit', ['provinsi' => $provinsi]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $provinsi = Provinsi::findOrFail($id);
        $provinsi->update($request->all());

        return redirect(route('provinsi'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view(string $id)
    {
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.view', ['provinsi' => $provinsi]);
    }

    public function destroy(string $id): RedirectResponse
    {
        Provinsi::find($id)->delete();
        return redirect(route('provinsi'))->with('pesan', 'Data berhasil dihapus');
    }
}
