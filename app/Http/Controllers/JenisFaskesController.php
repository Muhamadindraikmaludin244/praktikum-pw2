<?php

namespace App\Http\Controllers;

use App\Models\JenisFaskes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class JenisFaskesController extends Controller
{
    public function show()
    {
        $data_layout = [
            'title' => 'Halaman jenis faskes',
        ];
        $list_jenisfaskes = JenisFaskes::all();
        View::share($data_layout);
        return view('jenis_faskes.show', ['list_jenisfaskes' => $list_jenisfaskes]);
    }

    public function create()
    {
        return view('jenis_faskes.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
        ]);

        JenisFaskes::create($request->all());

        return redirect(route('jenis_faskes'))->with('pesan', 'Data berhasil disimpan');
    }

    public function edit(string $id)
    {
        $jenis_faskes = JenisFaskes::findOrFail($id);
        return view('jenis_faskes.edit', ['jenis_faskes' => $jenis_faskes]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $jenis_faskes = JenisFaskes::findOrFail($id);
        $jenis_faskes->update($request->all());

        return redirect(route('jenis_faskes'))->with('pesan', 'Data berhasil diupdate');
    }

    public function view(string $id)
    {
        $jenis_faskes = JenisFaskes::findOrFail($id);
        return view('jenis_faskes.view', ['jenis_faskes' => $jenis_faskes]);
    }

    public function destroy(string $id): RedirectResponse
    {
        JenisFaskes::find($id)->delete();
        return redirect(route('jenis_faskes'))->with('pesan', 'Data berhasil dihapus');
    }
}
