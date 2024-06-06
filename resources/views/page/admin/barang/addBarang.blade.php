@extends('layouts.admin')
@section('judul', 'Tambah Barang')
@section('main-content')
<!-- Content Header (Page header) -->
<div class="block-header">
    <h2>Tambah Barang</h2>
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
                    Informasi Barang
                </h2>
            </div>
            <div class="body">
                <form method="post" action="{{ route('barang.add') }}">
                    @csrf
                    <label for="kode_barang">ID</label>
                    <div class="form-group">
                        <input type="text" id="ID" name="ID" class="form-control @error('ID') is-invalid @enderror" placeholder="Masukkan ID" value="{{ old('ID') }}" required>
                        @error('kode_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <label for="Kode_Barang">Kode Barang</label>
                    <div class="form-group">
                        <input type="text" id="Kode_Barang" name="Kode_Barang" class="form-control @error('Kode_Barang') is-invalid @enderror" placeholder="Masukkan Kode Barang" value="{{ old('Kode_Barang') }}" required>
                        @error('Kode_Barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="kategori">Kategori</label>
                    <div class="form-group">
                        <input type="text" id="kategori" name="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukkan Kategori" value="{{ old('kategori') }}" required>
                        @error('kategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="nama_barang">Nama Barang</label>
                    <div class="form-group">
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Masukkan Nama Barang" value="{{ old('nama_barang') }}" required>
                        @error('nama_barang')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="harga_beli">Harga Beli</label>
                    <div class="form-group">
                        <input type="text" id="harga_beli" name="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror" placeholder="Masukkan Harga Beli" value="{{ old('harga_beli') }}" required>
                        @error('harga_jual')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="harga_jual">Harga Jual</label>
                    <div class="form-group">
                        <input type="text" id="harga_jual" name="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" placeholder="Masukkan Harga Jual" value="{{ old('harga_jual') }}" required>
                        @error('harga_jual')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="unit">Unit</label>
                    <div class="form-group">
                        <input type="text" id="unit" name="unit" class="form-control @error('unit') is-invalid @enderror" placeholder="Masukkan Unit" value="{{ old('unit') }}" required>
                        @error('unit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- /.card -->

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('barang.index') }}" class="btn btn-secondary m-t-15 waves-effect">Cancel</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Tambah Barang</button>
                        </div>
                    </div>
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
        $('#form-tambah-barang').validate({
            rules: {
                ID: {
                    required: true,
                },
                Kode_Barang: {
                    required: true,
                },
                nama_barang: {
                    required: true
                },
                harga_jual: {
                    required: true,
                    number: true
                },
                unit: {
                    required: true
                }
            },
            messages: {
                ID: {
                    required: "ID harus diisi",
                },
                Kode_Barang: {
                    required: "Kode Barang harus diisi",
                    minlength: "Kode Barang minimal 3 karakter"
                },
                nama_barang: {
                    required: "Nama Barang harus diisi"
                },
                harga_jual: {
                    required: "Harga Jual harus diisi",
                    number: "Harga Jual harus berupa angka"
                },
                unit: {
                    required: "Unit harus diisi"
                }
            }
        });
    });
</script>
@endsection