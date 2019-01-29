<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class BarangController extends Controller
{
    protected  $barang;    

    function __construct()
    {            
        $this->barang = new Barangs();        
    }


    public function index(Request $request)
    {        
        $barang = $this->barang                                      
                    ->orderBy('created_at','asc')
                    ->paginate(10);

        $paginate = $barang->appends($request->except('page'))->links();

        return view('barang.index',compact('barang','paginate'));        

    }

    public function create()
    {             
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'kategori_id'    => 'required',
            'nama'           => 'required',          
            'jumlah'         => 'required',           
        ]);

        $this->barang->create([            
            'kategori_id'    => $request->kategori_id,
            'nama'           => $request->nama,          
            'jumlah'         => $request->jumlah,  
        ]);        

        return redirect()->route('barang.index');
    }    
}