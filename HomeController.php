<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $user = DB::table('users')->paginate(10);
        return view('admin-home',['user' => $user]);
    }
    public function index()
    {
    	return view('home');
    }
    public function tambah()
    {
    	return view('tambah_user');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'nip' => 'required',
            'nik' => 'required',
    		'name' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'jabatan' => 'required',
            'is_admin' => 'required',
            'username' => 'required',
            'password' => 'required'

    	]);

        User::create([
            'nip' => $request->nip,
            'nik' => $request->nik,
    		'name' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'jabatan' => $request->jabatan,
            'is_admin' => $request->is_admin,
            'username' => $request->username,
            'password' => Hash::make($request->password)
    	]);

    	return redirect('/admin');
    }
    public function edit($id)
        {
            $user = User::find($id);
            return view('user_edit', ['user' => $user]);
        }
    public function update($id, Request $request)
        {

            $user = User::find($id);
            $user->nip = $request->input('nip');
            $user->nik = $request->input('nik');
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->hp = $request->input('hp');
            $user->jabatan = $request->input('jabatan');
            $user->is_admin = $request->input('is_admin');
            $user->username = $request->input('username');
            $user->password =  Hash::make($request->input('password'));
            $user->update();
            return redirect('/admin');
         }
    public function delete($id)
         {
             $user = User::find($id);
             $user->delete();
             return redirect('/admin');
         }
    public function cari(Request $request)
         {
        $cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$user = DB::table('users')
		->where('name','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('admin-home',['user' => $user]);

         }


}
