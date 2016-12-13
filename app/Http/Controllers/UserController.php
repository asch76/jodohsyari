<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
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

    public function admin(Request $request)
    {
        return view('user.admin', [
            'users' => User::when($request->q, function($query) use ($request) {
                        $q = '%'.str_replace(' ', '%', $request->q).'%';
                        return $query->where('name', 'LIKE', $q);
                    })->orderBy('name')->paginate(),
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
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] 	= bcrypt($request->password);
		$data['api_token']	= str_random(60);

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['foto'] = '/uploads/images/'.$fileName;
        }

        $user = User::create($data);
        return redirect('/user/admin/')->with('success', 'Data berhasil disimpan');
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
        return view('user.me', [
            'user' => auth()->user(),
            'breadcrumb' => [
                '/me' => 'ME',
            ]
        ]);
    }

    public function dashboard()
    {
        return view('user.dashboard', [
            'user' => auth()->user(),
            'breadcrumb' => [
                '#' => 'DASHBOARD',
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
    public function update(UserRequest $request, User $user)
    {
        $data = $request->all();
        $data['password'] 	= bcrypt($request->password);

        if ($request->hasFile('foto')) {

            $file = $request->file('foto');
            $fileName = time().'_'.$file->getClientOriginalName();
            $file->move('uploads/images/', $fileName);
            $data['foto'] = '/uploads/images/'.$fileName;

            if ($user->foto && file_exists($user->foto)) {
    			unlink($user->foto);
    		}
        }

        $user->update($data);
        return redirect('/user/admin/')->with('success', 'Data berhasil disimpan');
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

    public function notifikasi()
    {
        return view('user.notifikasi', [
            'notifications' => auth()->user()->notifications()->paginate(),
            'breadcrumb' => [
                '#' => 'NOTIFIKASI'
            ]
        ]);
    }

    public function bacaNotifikasi($id)
    {
        auth()->user()->unreadNotifications()->where('id', $id)->first()->markAsread();
        return redirect('/notifikasi');
    }

    public function hapusNotifikasi($id)
    {
        auth()->user()->notifications()->where('id', $id)->first()->delete();
        return redirect('/notifikasi');
    }

    public function verify(User $user)
    {
        $user->verified = 1;
        $user->save();
        return redirect('/user/admin');
    }

    public function activate(User $user)
    {
        $user->active = 1;
        $user->save();
        return redirect('/user/admin');
    }

    public function deactivate(User $user)
    {
        $user->active = 0;
        $user->save();
        return redirect('/user/admin');
    }
}
