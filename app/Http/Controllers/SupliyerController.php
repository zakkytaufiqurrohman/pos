<?php

namespace App\Http\Controllers;
use App\Supliyer;
use Illuminate\Http\Request;

class supliyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.index');
       $data=Supliyer::all();
        return view('admin.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'nama_supliyer'=>'min:3|required',
                'alamat'=>'min:10|required',
                'no_tlp'=>'min:10',
            ]
        );
       $data=$request->all();
       Supliyer::create($data);
       return redirect()->route('supliyer.index');
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
        // $data=Supliyer::where('supliyer_id',$id);
        $data=Supliyer::findOrFail($id);
        return view('admin.edit',compact('data'));


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
        // return $request->all();
        $data=Supliyer::findOrFail($id);
        $this->validate($request,
        [
            'nama_supliyer'=>'string|min:3|required',
            'alamat'=>'required|min:6',
            'no_tlp'=>'required'
        ]);

        $data->update($request->all());
        return redirect()->route('supliyer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id= Supliyer::where('id_supliyer',$id);
        $id->delete();
        // return redirect()->route('supliyer.index');
        return redirect('supliyer')->with('success', 'Data telah di hapus');

    }
}
