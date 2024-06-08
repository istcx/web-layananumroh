<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;
use RealRashid\SweetAlert\Facades\Alert;

class AdminGaleriFotoController extends Controller
{
    protected $GaleriModel;

    public function __construct()
    {
        $this->GaleriModel = new GaleriModel();
    }

    public function index()
    {
        // Tampilkan daftar galeri
        $galeri = $this->GaleriModel->all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('admin.galeri.addFoto');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'is_tampil_di_beranda' => 'required',
            'is_tampil_di_galeri' => 'required',
            'link' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image = $request->file('link');
        $destinationPath = 'assets/images/gallery';
        $profileImage = date('YmdHis') . uniqid() . "." . $image->getClientOriginalExtension();
        $namePath = $image->move($destinationPath, $profileImage);

        $input = new GaleriModel();
        $input->judul = $request->judul;
        $input->kategori_galeri = "foto";
        $input->is_tampil_di_beranda = $request->is_tampil_di_beranda;
        $input->is_tampil_di_galeri = $request->is_tampil_di_galeri;
        $input->link = $namePath;
        $input->save();

        Alert::success('Success', 'Sukses menambahkan galeri foto');
        return redirect()->route('adminGaleri.index');
    }

    public function edit($id)
    {
        $foto = $this->GaleriModel->find($id);
        return view('admin.galeri.editFoto', compact('foto'));
    }

    public function update(Request $request, $id)
    {
        $input = GaleriModel::find($id);
        if (isset($request->judul)) {
            $input->judul = $request->judul;
        }
        if (isset($request->is_tampil_di_beranda)) {
            $input->is_tampil_di_beranda = $request->is_tampil_di_beranda;
        }
        if (isset($request->is_tampil_di_galeri)) {
            $input->is_tampil_di_galeri = $request->is_tampil_di_galeri;
        }
        if ($request->file('link')) {
            $image = $request->file('link');
            $destinationPath = 'assets/images/gallery';
            $profileImage = date('YmdHis') . uniqid() . "." . $image->getClientOriginalExtension();
            $namePath = $image->move($destinationPath, $profileImage);
            $input->link = $namePath;
        }
        $input->save();

        Alert::success('Success', 'Sukses edit galeri foto');
        return redirect()->route('adminGaleri.index');
    }

    public function destroy($id)
    {
        $input = GaleriModel::find($id);
        $input->delete();
        Alert::success('Success', 'Sukses hapus galeri foto');
        return redirect()->route('adminGaleri.index');
    }
}
