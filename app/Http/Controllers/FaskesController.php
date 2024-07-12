<?php

namespace App\Http\Controllers;

use App\Models\Faskes;
use App\Models\JenisFaskes;
use App\Models\Kategori;
use App\Models\KabKota;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FaskesController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman Faskes',
        ];
        $list_faskes = Faskes::all();
        View::share($data_layout);
        return view('faskes.show', ['list_faskes' => $list_faskes]);
    }

    public function create()
    {
        $list_kategori = Kategori::all();
        $list_jenisfaskes = JenisFaskes::all();
        $list_kabkota = KabKota::all();

        return view('faskes.create', ['list_kategori' => $list_kategori, 'list_jenisfaskes' => $list_jenisfaskes, 'list_kabkota' => $list_kabkota]);
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
        ]);

        $data = $request->all();

        Faskes::create($data);

        return redirect(route('faskes'))->with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $faskes = Faskes::findOrFail($id);
        $list_kategori = Kategori::all();
        $list_jenisfaskes = JenisFaskes::all();
        $list_kabkota = KabKota::all();

        return view('faskes.edit', ['faskes' => $faskes, 'list_kategori' => $list_kategori, 'list_jenisfaskes' => $list_jenisfaskes, 'list_kabkota' => $list_kabkota]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'nama_pengelola' => 'required',
            'alamat' => 'required',
            'website' => 'required',
            'email' => 'required',
            'rating' => 'required',
            'latitude' => 'required',
            'longtitude' => 'required',
        ]);

        $data = $request->all();

        $faskes = Faskes::findOrFail($id);
        $faskes->update($data);

        return redirect(route('faskes'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view(string $id)
    {
        $faskes = Faskes::findOrFail($id);
        return view('faskes.view', ['faskes' => $faskes]);
    }

    public function destroy(string $id): RedirectResponse
    {
        Faskes::find($id)->delete();
        return redirect(route('faskes'))->with('pesan', 'Data berhasil dihapus');
    }
}
