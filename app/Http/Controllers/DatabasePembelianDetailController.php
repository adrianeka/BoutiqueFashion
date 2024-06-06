<?php

namespace App\Http\Controllers;

use App\Models\DatabasePembelian;
use App\Models\DatabasePembelianDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatabasePembelianDetailController extends Controller
{
    public function index()
    {
        return view('page.admin.pembelian.indexDetailPembelian');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabasePembelianDetail::with('barang')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('ID', function ($row) {
                    return $row->ID;
                })
                ->addColumn('barang.nama_barang', function ($row) {
                    return $row->barang->nama_barang;
                })
                ->addColumn('jumlah', function ($row) {
                    return $row->jumlah;
                })
                ->addColumn('harga', function ($row) {
                    return $row->harga;
                })
                ->addColumn('total', function ($row) {
                    return $row->harga * $row->jumlah;
                })
                ->make(true);
        }
        return response()->json(['message' => 'Unauthorized'], 403);
    }


    public function hapusPembelian($kode_transaksi)
    {
        $pembelian = DatabasePembelian::findOrFail($kode_transaksi);
        $pembelian->delete();

        return response()->json(['msg' => 'Data Pembelian berhasil dihapus.']);
    }
}
