<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index () {
        $pertanyaan = DB::table('pertanyaan')->get();
        return view ('posts.index', compact('pertanyaan'));
    }
    
    public function create () {
        return view ('posts.create');
    }
    
    public function store (Request $request) {
        //dd($request -> all());
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')->insert([
                "judul" => $request["judul"],
                "isi" => $request["isi"]
        ]);
        
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil disimpan!');
    }

    public function show ($id) {
        $tanya = DB::table('pertanyaan')->where('id', $id)->first();
        return view ('posts.show', compact('tanya'));
    }

    public function edit ($id) {
        $tanya = DB::table('pertanyaan')->where('id', $id)->first();
        return view ('posts.edit', compact('tanya'));
    }

    public function update ($id, Request $request) {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $tanya = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                    ]);
        return redirect ('/pertanyaan')->with('success', 'Pertanyaan berhasil diupdate!');
    }
    
    public function destroy ($id) {
        $tanya = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect ('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus!');
    }
}
