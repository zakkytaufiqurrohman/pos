<?php

namespace App\Http\Controllers;
use App\barang;
use App\categorie;
use App\supliyer;
use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang=barang::all();

        return view('admin.barang.index',compact('barang'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=categorie::all();
        $supliyer=supliyer::all();
        return view ('admin.barang.create',compact('category','supliyer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'id_supliyer'=>'required',
            'id_category'=>'required',
            'nama_barang'=>'required',
            'stok'=>'required',
            'harga'=>'required',
        ]);
        barang::create($request->all());
        return redirect()->route('barang.index');

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
        //
        $barang=barang::findOrFail($id);
        $category=categorie::all();
        $supliyer=supliyer::all();
        return view('admin.barang.edit',compact('barang','category','supliyer'));
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
        //
        $data=barang::findOrFail($id);
        $this->validate($request,[
            'id_supliyer'=>'required',
            'id_category'=>'required',
            'nama_barang'=>'string:min:3',
            'stok'=>'required|int',
            'harga'=>'required|int'
        ]);
        $data->update($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=barang::findOrFail($id);
        $data->delete();
        return redirect()->route('barang.index');
    }


}
