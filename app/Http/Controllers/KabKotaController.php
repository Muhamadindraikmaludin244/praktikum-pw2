<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\KabKota;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KabKotaController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Kabupaten Kota',
        ];
        $list_kabkota = KabKota::all();
        View::share($data_layout);
        return view('kabkota.show', ['list_kabkota' => $list_kabkota]);
    }

    public function create()
    {
        $list_provinsi = Provinsi::all();

        return view('kabkota.create', ['list_provinsi' => $list_provinsi]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
        ]);

        $data = $request->all();

        KabKota::create($data);

        return redirect(route('kabkota'))->with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $kabkota = KabKota::findOrFail($id);
        $list_provinsi = Provinsi::all();

        return view('kabkota.edit', ['kabkota' => $kabkota, 'list_provinsi' => $list_provinsi]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
        ]);

        $data = $request->all();

        $kabkota = KabKota::findOrFail($id);
        $kabkota->update($data);


        return redirect(route('kabkota'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view(string $id)
    {
        $kabkota = KabKota::findOrFail($id);
        return view('kabkota.view', ['kabkota' => $kabkota]);
    }

    public function destroy(string $id): RedirectResponse
    {
        KabKota::find($id)->delete();
        return redirect(route('kabkota'))->with('pesan', 'Data berhasil dihapus');
    }
}
