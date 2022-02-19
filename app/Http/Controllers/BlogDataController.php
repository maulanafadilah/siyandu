<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Blog';
        $page_description = 'Daftar Blog';
		$action = __FUNCTION__;
        
        $blog = BLog::all();

        return view('admin.blog.index', compact('page_title', 'page_description','action'), ['blog'=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Tambah Blog';
        $page_description = 'Tambah Blog';
		
		$action = __FUNCTION__;

        return view('admin.blog.create', compact('page_title', 'page_description','action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'judul' => 'required',
            'tanggal' => 'required|date',
            'penulis' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|file|max:10240'
            
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('blog');
        Blog::create($validatedData);

        return redirect('/blog')->with('success', 'Berhasil Menambah Blog!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_title = 'Detail Blog';
        $page_description = 'Detail Informasi Blog';
		
        $action = __FUNCTION__;

        $blog = Blog::find($id);

        return view('admin.blog.show', compact('page_title', 'page_description','action'), ['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_title = 'edit Blog';
        $page_description = 'edit Informasi Blog';
		
        $action = __FUNCTION__;

        $blog = Blog::find($id);

        return view('admin.blog.edit', compact('page_title', 'page_description','action'), ['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([

            'judul' => 'required',
            'tanggal' => 'required|date',
            'penulis' => 'required',
            'isi' => 'required',
            'gambar' => 'image|file|max:10240'
            
        ]);

        if($request->file('gambar')){
            Storage::delete($request->oldImage);
            $validatedData['gambar'] = $request->file('gambar')->store('blog');
        }

        Blog::where('id', $id)
                    ->update($validatedData);

        return redirect('/blog')->with('success', 'Data Blog Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Storage::delete($blog->gambar);
        Blog::destroy($blog->id);

        return redirect('/blog')->with('success', 'Data Blog berhasil dihapus!');
    }
}
