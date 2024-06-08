<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriModel;

class AdminGaleriVideoController extends Controller
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
        return view('admin.galeri.addVideo');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'is_tampil_di_beranda' => 'required',
            'is_tampil_di_galeri' => 'required',
            'link' => 'required'
        ]);

        $kategori_galeri = "video";
        $input = new GaleriModel();
        $input->judul = $request->judul;
        $input->kategori_galeri = $kategori_galeri;
        $input->is_tampil_di_beranda = $request->is_tampil_di_beranda;
        $input->is_tampil_di_galeri = $request->is_tampil_di_galeri;
        $input->link = '<iframe ' . $request->link . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $input->save();

        return redirect()->route('adminGaleri.index')
            ->with('success', 'Video berhasil ditambahkan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $video = $this->GaleriModel->find($id);
        return view('admin.galeri.editVideo', compact('video'));
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
        if (isset($request->link)) {
            $input->link = '<iframe ' . $request->link . ' title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }
        $input->save();

        return redirect()->route('adminGaleri.index');
    }

    public function destroy($id)
    {
        $input = GaleriModel::find($id);
        $input->delete();
        return redirect()->route('adminGaleri.index');
    }
}
