<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
        return view('admin.tugas', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
            'name' => 'required',
            'file' => 'required',
        ]);

        $file = $request->file('file');
        $file_ext = $file->getClientOriginalExtension();
        $file_name = rand(123456, 999999). '.' . $file_ext;
        $file_path = public_path('files/');
        $file->move($file_path, $file_name);

        $file = new File;
        $file->name = $request->name;
        $file->file = $file_name;

        $file->save();
        return redirect()->route('taskadmin');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $file = File::find($id);
        return view('tampil', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = File::find($id);
        return view('admin.edit', compact('file'));
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
        $file = File::find($id);

        $file_name = $file->file;
        $file_path = public_path('files/' . $file_name);

        if($request->hasfile('file')) {
            unlink($file_path);

            $f = $request->file('file');
            $file_ext = $f->getClientOriginalExtension();
            $file_name = rand(123456, 999999). '.' . $file_ext;
            $file_path = public_path('files/');
            $f->move($file_path, $file_name);
            $file->file = $file_name;
        } else {
            $file->file = $request->old_file;
        }

        $file->name = $request->name;
        $file->save();
        return redirect()->route('taskadmin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $file = File::find($id);

        $file_name = $file->file;
        $file_path = public_path('files/' . $file_name);
        unlink($file_path);

        $file->delete();
        return redirect()->route('taskadmin');
    }

    public function download(Request $request,$file){
        // return response()->download(public_path('files/'.$file));
        $file_path = public_path('files/'.$file);
        return response()->download($file_path);
    }


    public function indexForUser()
    {
        $files = File::all();
        return view('user.tugas', compact('files'));
    }
}
