<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book/index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $book=new Book;
        // // $book->id = $request->id;
        // $book->qty = $request->qty;
        // $book->title = $request->title;
        // $book->description = $request->description;
        // $book->publisher = $request->publisher;
        // $book->save();

        // Book::create([
        //     'title'=>$request->title,
        //     'description'=>$request->description,
        //     'publisher'=>$request->publisher,
        //     'qty'=>$request->qty
        // ]);

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'publisher'=>'required',
            'qty'=>'required'
        ]);    
        

        Book::create($request->all());

    	// mengirim data penulis ke view penulis
        return redirect('/book')->with('status', 'Data Buku Berhasil Ditambahkan!');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::all()->where('id', $id);
        return view('book/show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::all()->where('id', $id);
        return view('book/edit', compact('book'));
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
            'title'=>'required',
            'description'=>'required',
            'publisher'=>'required',
            'qty'=>'required'
        ]); 

        Book::where('id', $id)
                ->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'publisher' => $request->publisher,
                    'qty' => $request->qty
                ]);
        return redirect('/book')->with('status', 'Data Buku Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Book::findOrFail($id)->delete();
        Book::destroy('id', $id);
        return redirect('/book')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}
