@extends('layouts.admin')
@section('judul', 'edit customer')
@section('main-content')
<!-- Content Header (Page header) -->
<div class="block-header">
    <h2>edit customer</h2>
</div>

@if(session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
    {{ session('status') }}
</div>
@endif

<!-- Main content -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Informasi Customer
                </h2>
            </div>
            <div class="body">
                <form method="POST" action="{{ route('customer.update', ['kode_customer' => $customer->kode_customer]) }}">
                    @csrf
                    <label for="kode_customer">Kode Customer</label>
                    <input type="text" id="kode_customer" name="kode_customer" class="form-control" value="{{ $customer->kode_customer }}" disabled>

                    <label for="nama_customer">Nama Customer</label>
                    <input type="text" id="nama_customer" name="nama_customer" class="form-control" value="{{ $customer->nama_customer }}" required>

                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $customer->alamat }}" required>

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control" value="{{ $customer->city }}" required>

                    <label for="postal_code">Postal Code</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control" value="{{ $customer->postal_code }}" required>

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" class="form-control" value="{{ $customer->country }}" required>

                    <label for="no_telp">No. Telepon</label>
                    <input type="text" id="no_telp" name="no_telp" class="form-control" value="{{ $customer->no_telp }}" required>

                    <label for="customer_since">Customer Since</label>
                    <input type="date" id="customer_since" name="customer_since" class="form-control" value="{{ $customer->customer_since }}" required>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>

            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
<!-- /.content -->

@endsection

@section('script_footer')
<!-- Script untuk validasi form -->
<script>
    $(document).ready(function() {
        $('#form-tambah-customer').validate({
            rules: {
                kode_customer: {
                    required: true,
                    minlength: 3
                },
                nama_customer: {
                    required: true
                },
                alamat: {
                    required: true
                },
                city: {
                    required: true
                },
                postal_code: {
                    required: true
                },
                country: {
                    required: true
                },
                no_telp: {
                    required: true,
                    number: true
                },
                customer_since: {
                    required: true,
                    date: true
                }
            },
            messages: {
                kode_customer: {
                    required: "Kode Customer harus diisi",
                    minlength: "Kode Customer minimal 3 karakter"
                },
                nama_customer: {
                    required: "Nama Customer harus diisi"
                },
                alamat: {
                    required: "Alamat harus diisi"
                },
                city: {
                    required: "Kota harus diisi"
                },
                postal_code: {
                    required: "Kode Pos harus diisi"
                },
                country: {
                    required: "Negara harus diisi"
                },
                no_telp: {
                    required: "Nomor Telepon harus diisi",
                    number: "Nomor Telepon harus berupa angka"
                },
                customer_since: {
                    required: "Tanggal Customer Since harus diisi",
                    date: "Format tanggal tidak valid"
                }
            }
        });
    });
</script>

@endsection