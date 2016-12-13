<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Events\PostPublished;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::published()->latest()
                    ->when($request->kategori, function($query) use($request) {
                        return $query->where('kategori', 'LIKE', $request->kategori);
                    })->paginate(10);


        return view('post.index', [
            'posts' => $posts,
            'breadcrumb' => [
                '#' => 'VIDEO & ARTIKEL',
            ]
        ]);
    }

    public function artikel(Request $request)
    {
        $posts = Post::published()->latest()->artikel()
                    ->when($request->kategori, function($query) use($request) {
                        return $query->where('kategori', 'LIKE', $request->kategori);
                    })->paginate(10);


        return view('post.index', [
            'posts' => $posts,
            'breadcrumb' => [
                '#' => 'ARTIKEL',
            ]
        ]);
    }

    public function video(Request $request)
    {
        $posts = Post::published()->latest()->video()
                    ->when($request->kategori, function($query) use($request) {
                        return $query->where('kategori', 'LIKE', $request->kategori);
                    })->paginate(10);


        return view('post.index', [
            'posts' => $posts,
            'breadcrumb' => [
                '#' => 'VIDEO',
            ]
        ]);
    }

    public function admin(Request $request)
    {
        $type = 'artikel';

        if (in_array($request->type, ['video', 'halaman'])) {
            $type = $request->type;
        }

        return view('post.admin-'.$type, [
            'type' => $type,
            'posts' => Post::when($request->q, function($query) use($request) {
                            $q = '%'.str_replace(' ', '%', $request->q).'%';
                            return $query->where('title', 'LIKE', $q)
                                    ->orWhere('kategori', 'LIKE', $q)
                                    ->orWhere('content', 'LIKE', $q)
                                    ->orWhere('video_url', 'LIKE', $q);
                        })->where('type', $type)->paginate(10),
            'breadcrumb' => [
                '/post/admin?type='.$type => strtoupper($type),
                '#' => 'MANAGE'
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = 'artikel';

        if (in_array($request->type, ['video', 'halaman'])) {
            $type = $request->type;
        }

        return view('post.create', [
            'type' => $type,
            'post' => new Post,
            'breadcrumb' => [
                '/post/admin?type='.$type => strtoupper($type),
                '#' => 'CREATE'
            ]
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
            $data['img'] = '/uploads/images/'.$fileName;
        }

        $post = Post::create($data);

        if ($post->status == 1) {
            event(new PostPublished($post));
        }

        return redirect('/post/admin?type='.$post->type)
                    ->with('success', 'Data berhasil disimpan.');
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
            'terkait' => Post::published()
                        ->where('kategori', $post->kategori)
                        ->where('id', 'not in', $post->id)
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
    public function edit(Post $post, Request $request)
    {
        $type = 'artikel';

        if (in_array($request->type, ['video', 'halaman'])) {
            $type = $request->type;
        }

        return view('post.edit', [
            'type' => $type,
            'post' => $post,
            'breadcrumb' => [
                '/post/admin?type='.$type => strtoupper($type),
                '#' => 'EDIT'
            ]
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
        $statusBefore = $post->status;
        $data = $request->all();

        if ($request->hasFile('img')) {

            $file = $request->file('img');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['img'] = '/uploads/images/'.$fileName;

            if ($post->img && file_exists($post->img)) {
    			unlink($post->img);
    		}
        }

        $post->update($data);

        if ($statusBefore != 1 && $post->status == 1) {
            event(new PostPublished($post));
        }

        return redirect('/post/admin?type='.$post->type)->with('success', 'Data berhasil disimpan.');
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

        return redirect('/post/admin?type='.$post->type)->with('success', 'Data berhasil dihapus.');
    }

    public function draft(Post $post)
    {
        $post->status = 0;
        $post->save();
        return redirect('/post/admin?type='.$post->type);
    }

    public function publish(Post $post)
    {
        $post->status = 1;
        $post->save();
        event(new PostPublished($post));
        return redirect('/post/admin?type='.$post->type);
    }

    public function archive(Post $post)
    {
        $post->status = 2;
        $post->save();
        return redirect('/post/admin?type='.$post->type);
    }
}
