<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Author;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //buat cek database, kalau data muncul di hapus aja
         return News::with('authors')->get();

        //buat ambil database dan arah blade
        // $news = News::with('authors')->get();	
        // return view('admin/news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil database dan arah blade
        // $authors = Author::all();
        // return view('admin/createNews', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //mengambil data authors
        //return $request->get('authors');
        // $data = $request->all();
        // dd($data);

        // tambah data
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'picture' => 'required|max:2048',
        //     'content' => 'required|max:250',
        //     ]);
        //     $data =News::insertGetId([
        //         'title' => $request->get('title'),
        //         'picture' => $request->get('picture'),
        //         'content' => $request->get('content'),
        //         'is_published' => $request->get('is_published'),
        //         'created_at'=> \Carbon\Carbon::now(),
        //         ]);
   
        
        //     if ($request->get('authors')){
        //         News::findOrFail($data)
        //         ->authors()->attach($request->get('authors'));
        //     }
        //     return redirect()->route('news.index');
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
        //buat cek data apa sudah masyukk
        // $data = $request->all();
        // dd(value);

        // ambil database dan arah blade (bagian edit)
        // $authors = Author::all();
        // $news = News::findOrFail($id);
        // return view('admin/editNews', compact('news','authors'));
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
        //cek data 
        //return $request->get('authors');
       
       
        // $request->validate([
        //     'title' => 'required|max:100',
        //     'picture' => 'required|max:250',
        //     'content' => 'required|max:500',
        //     ]);
        //     News::findOrFail($id)->update([
        //     'title' => $request->title,
        //     'picture' => $request->picture,
        //     'content' => $request->content,
        //     'is_published' => $request->is_published,
            
        //     ]);

            // if ($request->get('authors')){
            //     News::findOrFail($data)
            //     ->authors()->attach($request->get('authors'));
            // }    
        // $model = News::find($id);
        // $model->touch();
        // return back()->with('success','Image Upload successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->back();
    }
}
