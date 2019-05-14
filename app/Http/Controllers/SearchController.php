<?php

namespace App\Http\Controllers;
use App\barang;
use App\categorie;
use App\supliyer;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{

    public function index(){
        return view('admin.penjualan.index');
    }
    public function search(Request $request){
        if($request->ajax()){
                $output="";
                $products=barang::where('nama_barang','LIKE','%'.$request->search."%")->get();
            if($products){
                foreach ($products as $key => $product) {
                    $output.='<tr>'.
                    '<td class="key2" id="key2">'.$product->id_barang.'</td>'.
                    '<td>'.$product->nama_barang.'</td>'.
                    '<td>'.$product->stok.'</td>'.
                    '<td>'.$product->harga.'</td>'.
                    '</tr>';
                }
                return Response($output);
            }
        }
    }
}
