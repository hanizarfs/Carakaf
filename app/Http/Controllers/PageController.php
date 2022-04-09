<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class PageController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function uploadpage() {
        return view('admin.upload');
    }

    public function store(Request $request){

        $data=new product();
        $file = $request->file;

        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file=$filename;

        $data->name=$request->name;
        $data->description=$request->description;

        $data->save();
        return redirect()->back();
    }


    public function show() {
        $data=product::all();
        return view('showproduct', compact('data'));
    }

    public function download(Request $request,$file){
        // return response()->download(public_path('assets/'.$file));
        $file_path = public_path('assets/'.$file);
        return response()->download($file_path);
    }

    public function view($id) {
        $data=Product::find($id);
        return view('viewproduct', compact('data'));
    }

    public function edit($id) {
        $data = Product::where("id", $id)->first();

        return view("admin.edit", compact('data'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'file' => 'required',
        // ]);

        // Product::find($id)->update($request->all());

        // return redirect()->route("showproduct")->with(["success"=>"Selamat data berhasil di ubah"]);


        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);

        $data=new product();
        $file = $request->file;

        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets', $filename);
        $data->file=$filename;

        Product::find($id)->update($request->all());

        $data->save();
        return redirect()->back();
    }
}
