<?php

namespace App\Http\Controllers;

use App\Models\DatabasePenjualan;
use App\Models\DatabasePenjualanDetail;
use App\Models\DatabaseCustomer;
use App\Models\DatabaseBarang;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DatabasePenjualanController extends Controller
{
    public function index()
    {
        return view('page.admin.penjualan.indexPenjualan');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabasePenjualan::with('customer')->latest()->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('kode_customer', function ($row) {
                    return $row->customer->kode_customer;
                })
                ->addColumn('tanggal;', function ($row) {
                    return $row->tanggal;
                })
                ->addColumn('options', function ($penjualan) {
                    $deleteUrl = route('penjualan.destroy', $penjualan->kode_transaksi); // Assuming 'destroy' is the route name for deleting a 'vendor'
                    return "<a style='border: none; background-color:transparent;' class='hapusData' data-kode_transaksi='$penjualan->kode_transaksi' data-url='$deleteUrl'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
        return response()->json(['message' => 'Unauthorized'], 403);
    }


    public function tambahPenjualan(Request $request)
    {
        // Ambil nomor faktur terakhir dari database
        $lastInvoice = DatabasePenjualan::orderBy('kode_transaksi', 'desc')->first();
        // dd($lastInvoice);

        // Jika ada faktur terakhir, buat faktur baru dengan menambah 1
        if ($lastInvoice != null) {
            $lastNumber = intval(substr($lastInvoice->kode_transaksi, 2));
            $newNumber = $lastNumber + 1;
            $newInvoiceNumber = 'T' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika tidak ada faktur terakhir, mulai dari T001
            $newInvoiceNumber = 'T001';
        }

        $customers = DatabaseCustomer::all();
        $barangs = DatabaseBarang::all();


        if ($request->isMethod('post')) {
            $request->validate([
                'tanggal_transaksi' => 'required|date',
                'kode_customer' => 'required|exists:database_customer,kode_customer',
                'items' => 'required|array',
                'items.*.nama_barang' => 'required|exists:database_barang,nama_barang',
                'items.*.jumlah' => 'required|integer|min:1',
            ]);

            $penjualan = DatabasePenjualan::create([
                'kode_transaksi' => $newInvoiceNumber,
                'tanggal' => $request->tanggal_transaksi,
                'kode_customer' => $request->kode_customer,
            ]);

            foreach ($request->items as $item) {
                $barang = DatabaseBarang::where('nama_barang', $item['nama_barang'])->first();
                if ($barang->unit >= $item['jumlah']) {
                    $barang->unit -= $item['jumlah'];
                    $barang->save();
                    DatabasePenjualanDetail::create([
                        'kode_transaksi' => $penjualan->kode_transaksi,
                        'ID' => $barang->ID,
                        'kategori' => $barang->kategori,
                        'item' => $barang->nama_barang,
                        'unit_terjual' => $item['jumlah'],
                        'harga' => $barang->harga_jual,
                    ]);
                } else {
                    return redirect()->back()->withErrors(['msg' => 'Stok barang ' . $barang->nama_barang . ' tidak mencukupi.']);
                }
            }

            return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil ditambahkan.');
        }

        return view('page.admin.penjualan.addPenjualan', compact('newInvoiceNumber', 'customers', 'barangs'));
    }




    public function hapusPenjualan($kode_transaksi)
    {
        $penjualan = DatabasePenjualan::findOrFail($kode_transaksi);
        $penjualan->delete();

        return response()->json(['msg' => 'Data Penjualan berhasil dihapus.']);
    }
}
