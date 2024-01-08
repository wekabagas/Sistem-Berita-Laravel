<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class FotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function foto()
    {
        $foto = DB::table('fotos')->paginate(10);
        return view('galeri',['foto' => $foto]);
    }

    public function create()
    {
        return view('tambah_foto');
    }

    public function store(Request $request)
    {
        $foto = new Foto;
        $foto->judul = $request->input('judul');
        $foto->tanggal = $request->input('tanggal');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galeri/foto/', $filename);
            $foto->image = $filename;
        }
        $foto->save();
        return redirect('/foto');
    }

    public function edit($id)
    {
        $foto = Foto::find($id);
        return view('edit_foto', ['foto' => $foto]);
    }

    public function update(Request $request, $id)
    {
        $foto = Foto::find($id);
        $foto->judul = $request->input('judul');
        $foto->tanggal = $request->input('tanggal');

        if($request->hasfile('image'))
        {
            $destination = 'galeri/foto/'.$foto->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('galeri/foto/', $filename);
            $foto->image = $filename;
        }

        $foto->update();
        return redirect('/foto');
    }

    public function hapus($id)
    {
        $foto = foto::find($id);
        $destination = 'galeri/foto/'.$foto->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $foto->delete();
        return redirect()->back()->with('status','Student Image Deleted Successfully');
    }
    public function cari(Request $request)
         {
        $cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$foto = DB::table('fotos')
		->where('judul','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('galeri',['foto' => $foto]);

         }

}
