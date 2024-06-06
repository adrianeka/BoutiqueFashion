@extends('layouts.admin')
@section('judul', 'Tambah Vensor')
@section('main-content')
<!-- Content Header (Page header) -->
<div class="block-header">
    <h2>Tambah Vensor</h2>
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
                    Informasi Vendor
                </h2>
            </div>
            <div class="body">
                <form method="POST" action="{{ route('customer.add') }}" id="form-tambah-customer">
                    @csrf

                    <label for="kode_customer">Kode Customer</label>
                    <input type="text" id="kode_customer" name="kode_customer" class="form-control @error('kode_customer') is-invalid @enderror" placeholder="Kode Customer" value="{{ old('kode_customer') }}" required>
                    @error('kode_customer')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="nama_customer">Nama Customer</label>
                    <input type="text" id="nama_customer" name="nama_customer" class="form-control @error('nama_customer') is-invalid @enderror" placeholder="Nama Customer" value="{{ old('nama_customer') }}" required>
                    @error('nama_customer')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}" required>
                    @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="city">City</label>
                    <input type="text" id="city" name="city" class="form-control @error('city') is-invalid @enderror" placeholder="City" value="{{ old('city') }}" required>
                    @error('city')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="postal_code">Postal Code</label>
                    <input type="text" id="postal_code" name="postal_code" class="form-control @error('postal_code') is-invalid @enderror" placeholder="Postal Code" value="{{ old('postal_code') }}" required>
                    @error('postal_code')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" class="form-control @error('country') is-invalid @enderror" placeholder="Country" value="{{ old('country') }}" required>
                    @error('country')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="no_telp">No. Telepon</label>
                    <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No. Telepon" value="{{ old('no_telp') }}" required>
                    @error('no_telp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="customer_since">Customer Since</label>
                    <input type="date" id="customer_since" name="customer_since" class="form-control @error('customer_since') is-invalid @enderror" value="{{ old('customer_since') }}" required>
                    @error('customer_since')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <a href="{{ route('vendor.index') }}" class="btn btn-secondary m-t-15 waves-effect">Kembali</a>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Tambah Customer</button>
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