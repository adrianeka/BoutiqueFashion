<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseCustomer;
use Yajra\DataTables\DataTables;

class DatabaseCustomerController extends Controller
{
    public function index()
    {
        return view('page.admin.customer.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabaseCustomer::select(['kode_customer', 'nama_customer', 'alamat', 'city', 'postal_code', 'country', 'no_telp', 'customer_since']);
            return Datatables::of($data)
                ->addColumn('options', function ($customer) {
                    $editUrl = route('customer.update', $customer->kode_customer); // Assuming 'update' is the route name for editing a customer
                    $deleteUrl = route('customer.destroy', $customer->kode_customer); // Assuming 'destroy' is the route name for deleting a customer
                    return "<a href='$editUrl'><i class='fas fa-edit fa-lg'></i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-kode_customer='$customer->kode_customer' data-url='$deleteUrl'><i class='fas fa-trash fa-lg text-danger'></i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
    }

    public function tambahCustomer(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kode_customer' => 'required|unique:database_customer,kode_customer',
                'nama_customer' => 'required',
                'alamat' => 'required',
                'city' => 'required', // Menambah validasi untuk city
                'postal_code' => 'required', // Menambah validasi untuk postal_code
                'country' => 'required', // Menambah validasi untuk country
                'no_telp' => 'required',
                'customer_since' => 'required|date', // Menambah validasi untuk customer_since
            ], [
                'kode_customer.unique' => 'Kode Customer sudah digunakan, mohon gunakan kode yang lain.',
            ]);

            DatabaseCustomer::create([
                'kode_customer' => $request->kode_customer,
                'nama_customer' => $request->nama_customer,
                'alamat' => $request->alamat,
                'city' => $request->city, // Menambah kolom city
                'postal_code' => $request->postal_code, // Menambah kolom postal_code
                'country' => $request->country, // Menambah kolom country
                'no_telp' => $request->no_telp,
                'customer_since' => $request->customer_since, // Menambah kolom customer_since
            ]);

            return redirect()->route('customer.index')->with('status', 'Data Customer telah ditambahkan');
        }

        return view('page.admin.customer.addCustomer');
    }

    public function updateCustomer($kode_customer, Request $request)
    {
        $customer = DatabaseCustomer::findOrFail($kode_customer);

        if ($request->isMethod('post')) {
            // Update data customer
            $customer->update([
                'kode_customer' => $request->kode_customer,
                'nama_customer' => $request->nama_customer,
                'alamat' => $request->alamat,
                'city' => $request->city, // Menambah kolom city
                'postal_code' => $request->postal_code, // Menambah kolom postal_code
                'country' => $request->country, // Menambah kolom country
                'no_telp' => $request->no_telp,
                'customer_since' => $request->customer_since, // Menambah kolom customer_since
            ]);

            return redirect()->route('customer.index')->with('status', 'Data Customer berhasil diperbarui.');
        }

        return view('page.admin.customer.updateCustomer', [
            'customer' => $customer
        ]);
    }

    public function hapusCustomer($kode_customer)
    {
        $customer = DatabaseCustomer::findOrFail($kode_customer);
        $customer->delete();

        return response()->json([
            'msg' => 'Data yang dipilih telah dihapus'
        ]);
    }
}
