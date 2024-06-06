<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseBarang;
use Yajra\DataTables\DataTables;

class DatabaseBarangController extends Controller
{
    public function index()
    {
        return view('page.admin.barang.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabaseBarang::select(['ID', 'Kode_Barang', 'kategori', 'nama_barang', 'harga_beli', 'harga_jual', 'unit']);
            return Datatables::of($data)
                ->addColumn('options', function ($barang) {
                    $editUrl = route('barang.update', $barang->ID);
                    $deleteUrl = route('barang.destroy', $barang->ID);
                    return "<a href='$editUrl'><i class='fas fa-edit fa-lg'></i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-id='$barang->ID' data-url='$deleteUrl'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
    }

    public function tambahBarang(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'ID' => 'required|unique:database_barang,ID',
                'Kode_Barang' => 'required',
                'kategori' => 'required',
                'nama_barang' => 'required',
                'harga_beli' => 'required|numeric',
                'harga_jual' => 'required|numeric',
                'unit' => 'required|integer',
            ], [
                'ID.unique' => 'ID sudah digunakan, mohon gunakan ID yang lain.',
            ]);

            DatabaseBarang::create([
                'ID' => $request->ID,
                'Kode_Barang' => $request->Kode_Barang,
                'kategori' => $request->kategori,
                'nama_barang' => $request->nama_barang,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'unit' => $request->unit,
            ]);

            return redirect()->route('barang.index')->with('status', 'Data Barang telah ditambahkan');
        }

        return view('page.admin.barang.addBarang');
    }

    public function updateBarang($ID, Request $request)
    {
        $barang = DatabaseBarang::findOrFail($ID);

        if ($request->isMethod('post')) {
            $request->validate([
                'Kode_Barang' => 'required',
                'kategori' => 'required',
                'nama_barang' => 'required',
                'harga_beli' => 'required|numeric',
                'harga_jual' => 'required|numeric',
                'unit' => 'required|integer',
            ]);

            $barang->update([
                'Kode_Barang' => $request->Kode_Barang,
                'kategori' => $request->kategori,
                'nama_barang' => $request->nama_barang,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'unit' => $request->unit,
            ]);

            return redirect()->route('barang.index', ['ID' => $barang->ID])->with('status', 'Data telah tersimpan di database');
        }

        return view('page.admin.barang.updateBarang', [
            'barang' => $barang
        ]);
    }

    public function hapusBarang($ID)
    {
        $barang = DatabaseBarang::findOrFail($ID);
        $barang->delete();

        return response()->json([
            'msg' => 'Data yang dipilih telah dihapus'
        ]);
    }
}
