<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;
use PDF;
use Storage;

class PenulisController extends Controller
{
    

    public function index()
    {
        $penulis = penulis::latest()->paginate(5);
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'email' => 'required',
        ]);

        $penulis = new penulis();
        $penulis->nama = $request->nama;
        $penulis->email = $request->email;

        $penulis->save();
        return redirect()->route('penulis.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $penulis = penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|min:5',
            'email' => 'required',
        ]);

        $penulis = penulis::findOrFail($id);
        $penulis->nama = $request->nama;
        $penulis->email = $request->email;

        $penulis->save();
        return redirect()->route('penulis.index');
    }

    public function destroy($id)
    {
        $penulis = penulis::findOrFail($id);
        Storage::delete('public/penuliss/' . $penulis->image);
        $penulis->delete();
        return redirect()->route('penulis.index');
    }
}
