<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BiodataRequest;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', [
            'users' => User::ofRole('member')->active()->paginate(),
            'breadcrumb' => [
                '/user' => 'MEMBER',
                '#' => 'LIST'
            ]
        ]);
    }

    public function admin()
    {
        return view('user.admin', [
            'users' => User::paginate(),
            'breadcrumb' => [
                'user/admin' => 'USER',
                '#' => 'MANAGE'
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create', ['user' => new User]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BiodataRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['foto'] = 'uploads/images/'.$fileName;
        }

        $user = User::create($data);
        return redirect('/user/edit/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', [
            'user' => $user,
            'breadcrumb' => [
                '/user' => 'MEMBER',
                '#' => $user->nama_lengkap
            ]
        ]);
    }

    public function me()
    {
        return view('user.show', [
            'user' => auth()->user(),
            'breadcrumb' => [
                '/me' => 'ME',
            ]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BiodataRequest $request, User $user)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['foto'] = 'uploads/images/'.$fileName;

            if ($user->foto && file_exists($user->foto)) {
    			unlink($user->foto);
    		}
        }

        $user->update($data);
        return redirect('/user/edit/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        if ($user->foto && file_exists($user->foto)) {
            unlink($user->foto);
        }

        return redirect('/user/admin');
    }
}
