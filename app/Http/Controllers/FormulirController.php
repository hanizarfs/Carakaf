<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulirs = Formulir::all();

        return view("admin.tampil-formulir", compact('formulirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.tambah-formulir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
        ]);

        formulir::create([
            "nama" => $request->nama,
            "npm" => $request->npm,
        ]);

        return redirect()->route("tampilformuliradmin")->with(["success"=>"Selamat data berhasil di simpan"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formulir = Formulir::where("id", $id)->first();

        return view("admin.edit-formulir", compact('formulir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
        ]);

        Formulir::find($id)->update($request->all());

        return redirect()->route("tampilformuliradmin")->with(["success"=>"Selamat data berhasil di ubah"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formulir = Formulir::find($id);

        $formulir->delete();

        return redirect()->route("tampilformuliradmin")->with(["success"=>"Selamat data berhasil di hapus"]);
    }









    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexForUser()
    {
        $formulirs = Formulir::all();

        return view("user.tampil-formulir", compact('formulirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForUser()
    {
        return view("user.tambah-formulir");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeForUser(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'npm' => 'required',
        ]);

        formulir::create([
            "nama" => $request->nama,
            "npm" => $request->npm,
        ]);

        return redirect()->route("tampilformuliruser")->with(["success"=>"Selamat data berhasil di simpan"]);
    }
}
