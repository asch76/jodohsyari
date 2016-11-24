<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('post.index', [
            'posts' => Post::published()->post()->latest()
                        ->when($request->kategori, function($query) use($request) {
                            return $query->where('kategori', 'LIKE', $request->kategori);
                        })->paginate(10),
            'breadcrumb' => [
                '/post' => 'POST',
                '#' => 'INDEX'
            ]
        ]);
    }

    public function admin(Request $request)
    {
        return view('post.admin', [
            'posts' => Post::when($request->title, function($query) use($request) {
                        return $query->where('title', 'LIKE', '%'.str_replace(' ', '%', $request->q).'%');
                    })->when($request->status, function($query) use($request) {
                        return $query->where('status', $request->q);
                    })->paginate(10),
            'breadcrumb' => ['/post/admin' => 'POSTS', '#' => 'MANAGE']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create', [
            'post' => new Post,
            'breadcrumb' => ['/post/admin' => 'POSTS', '#' => 'CREATE']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['img'] = 'uploads/images/'.$fileName;
        }

        $post = Post::create($data);
        return redirect('/post/'.$post->id.'/edit')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->view += 1;
        $post->save();

        return view('post.show', [
            'post' => $post,
            'terkait' => Post::published()->post()
                        ->where('kategori', $post->kategori)
                        ->limit(4)->get(),
            'breadcrumb' => [
                '/post' => 'POST',
                '#' => $post->title
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('post.edit', [
            'post' => $post,
            'breadcrumb' => ['/post/admin' => 'POSTS', '#' => 'EDIT']
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $data = $request->all();

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['img'] = 'uploads/images/'.$fileName;

            if ($post->img && file_exists($post->img)) {
    			unlink($post->img);
    		}
        }

        $post->update($data);
        return redirect('/post/'.$post->id.'/edit')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        if ($post->img && file_exists($post->img)) {
            unlink($post->img);
        }

        return redirect('/post/admin')->with('success', 'Data berhasil dihapus.');
    }
}
