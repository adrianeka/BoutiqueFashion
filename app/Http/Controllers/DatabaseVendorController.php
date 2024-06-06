<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseVendor;
use Yajra\DataTables\DataTables;

class DatabaseVendorController extends Controller
{
    public function index()
    {
        return view('page.admin.vendor.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabaseVendor::select([
                'kode_vendor',
                'nama_vendor',
                'alamat',
                'kota',
                'kode_pos',
                'provinsi',
                'no_telp',
                'fax',
                'email',
                'kategori'
            ]);
            return Datatables::of($data)
                ->addColumn('options', function ($vendor) {
                    $editUrl = route('vendor.update', $vendor->kode_vendor); // Assuming 'update' is the route name for editing a 'vendor'
                    $deleteUrl = route('vendor.destroy', $vendor->kode_vendor); // Assuming 'destroy' is the route name for deleting a 'vendor'
                    return "<a href='$editUrl'><i class='fas fa-edit fa-lg'></i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-kode_vendor='$vendor->kode_vendor' data-url='$deleteUrl'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
    }

    public function tambahVendor(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kode_vendor' => 'required|unique:database_vendor,kode_vendor',
                'nama_vendor' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'kode_pos' => 'required',
                'provinsi' => 'required',
                'no_telp' => 'required',
                'fax' => 'nullable',
                'email' => 'required|email',
                'kategori' => 'required',
            ], [
                'kode_vendor.unique' => 'Kode Vendor sudah digunakan, mohon gunakan kode yang lain.',
                'email.email' => 'Format email tidak valid.',
            ]);

            DatabaseVendor::create([
                'kode_vendor' => $request->kode_vendor,
                'nama_vendor' => $request->nama_vendor,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'kode_pos' => $request->kode_pos,
                'provinsi' => $request->provinsi,
                'no_telp' => $request->no_telp,
                'fax' => $request->fax,
                'email' => $request->email,
                'kategori' => $request->kategori,
            ]);

            return redirect()->route('vendor.index')->with('status', 'Data Vendor telah ditambahkan');
        }

        return view('page.admin.vendor.addVendor');
    }

    public function updateVendor($kode_vendor, Request $request)
    {
        $vendor = DatabaseVendor::findOrFail($kode_vendor);

        if ($request->isMethod('post')) {
            // Update data vendor
            $vendor->update([
                'nama_vendor' => $request->nama_vendor,
                'alamat' => $request->alamat,
                'kota' => $request->kota,
                'kode_pos' => $request->kode_pos,
                'provinsi' => $request->provinsi,
                'no_telp' => $request->no_telp,
                'fax' => $request->fax,
                'email' => $request->email,
                'kategori' => $request->kategori,
            ]);

            return redirect()->route('vendor.update', ['kode_vendor' => $vendor->kode_vendor])->with('status', 'Data telah tersimpan di database');
        }

        return view('page.admin.vendor.updateVendor', [
            'vendor' => $vendor
        ]);
    }

    public function hapusVendor($kode_vendor)
    {
        $vendor = DatabaseVendor::findOrFail($kode_vendor);
        $vendor->delete();

        return response()->json([
            'msg' => 'Data yang dipilih telah dihapus'
        ]);
    }
}
