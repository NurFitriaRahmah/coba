<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penulis;

class PenulisController extends Controller
{
    public function index()
    {
    	// mengambil data penulis
    	$penulis = Penulis::all();

    	// mengirim data penulis ke view penulis
    	return view('penulis/index', compact('penulis'));
	}
	
	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penulis/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $penulis=new Penulis;
        // $penulis->id = $request->id;
        // $penulis->qty = $request->qty;
        // $penulis->title = $request->title;
        // $penulis->save();
        $request->validate([
        
            'email'=>'required'
        ]);    
        

        Penulis::create($request->all());

    	// mengirim data penulis ke view penulis
    	return redirect('/penulis')->with('status', 'Data Penulis Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penulis = Penulis::all()->where('id', $id);
        return view('penulis/show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = Penulis::all()->where('id', $id);
        return view('penulis/edit', compact('penulis'));
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
        $request->validate([
            
            'email'=>'required'
        ]); 

        Penulis::where('id', $id)
                ->update([
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'email' => $request->email
                ]);
        return redirect('/penulis')->with('status', 'Data Penulis Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penulis::destroy('id', $id);
        return redirect('/penulis')->with('status', 'Data Penulis Berhasil Dihapus!');
    }
}
