<?php

namespace App\Http\Controllers;

use App\Models\DatabasePenjualan;
use App\Models\DatabasePenjualanDetail;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatabasePenjualanDetailController extends Controller
{
    public function index()
    {
        return view('page.admin.penjualan.indexDetailPenjualan');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabasePenjualanDetail::with('barang')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('barang.kode_barang', function ($row) {
                    return $row->barang->kode_barang;
                })
                ->addColumn('kategori', function ($row) {
                    return $row->kategori;
                })
                ->addColumn('item', function ($row) {
                    return $row->item;
                })
                ->addColumn('unit_terjual', function ($row) {
                    return $row->unit_terjual;
                })
                ->addColumn('harga', function ($row) {
                    return $row->harga;
                })
                ->make(true);
        }
        return response()->json(['message' => 'Unauthorized'], 403);
    }

    public function hapusPenjualan($kode_transaksi)
    {
        $penjualan = DatabasePenjualan::findOrFail($kode_transaksi);
        $penjualan->delete();

        return response()->json(['msg' => 'Data Penjualan berhasil dihapus.']);
    }
}
