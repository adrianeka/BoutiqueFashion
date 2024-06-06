@extends('layouts.admin')
@section('judul', 'Edit Vendor')
@section('main-content')
<!-- Content Header (Page header) -->
<div class="block-header">
    <h2>Edot Vensor</h2>
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
                <form method="post" action="{{ route('vendor.update', ['kode_vendor' => $vendor->kode_vendor]) }}">
                    @csrf
                    @method('POST')
                    <label for="nama_vendor">Nama Vendor</label>
                    <div class="form-group">
                        <input type="text" id="nama_vendor" name="nama_vendor" class="form-control @error('nama_vendor') is-invalid @enderror" placeholder="Masukkan Nama Vendor" value="{{ $vendor->nama_vendor }}" required>
                        @error('nama_vendor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="alamat">Alamat</label>
                    <div class="form-group">
                        <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan Alamat" value="{{ $vendor->alamat }}" required>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="kota">Kota</label>
                    <div class="form-group">
                        <input type="text" id="kota" name="kota" class="form-control @error('kota') is-invalid @enderror" placeholder="Masukkan Kota" value="{{ $vendor->kota }}" required>
                        @error('kota')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="kode_pos">Kode Pos</label>
                    <div class="form-group">
                        <input type="text" id="kode_pos" name="kode_pos" class="form-control @error('kode_pos') is-invalid @enderror" placeholder="Masukkan Kode Pos" value="{{ $vendor->kode_pos }}" required>
                        @error('kode_pos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="provinsi">Provinsi</label>
                    <div class="form-group">
                        <input type="text" id="provinsi" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" placeholder="Masukkan Provinsi" value="{{ $vendor->provinsi }}" required>
                        @error('provinsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="no_telp">Nomor Telepon</label>
                    <div class="form-group">
                        <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Masukkan Nomor Telepon" value="{{ $vendor->no_telp }}" required>
                        @error('no_telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="fax">Fax</label>
                    <div class="form-group">
                        <input type="text" id="fax" name="fax" class="form-control @error('fax') is-invalid @enderror" placeholder="Masukkan Fax" value="{{ $vendor->fax }}">
                        @error('fax')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="email">Email</label>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ $vendor->email }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <label for="kategori">Kategori</label>
                    <div class="form-group">
                        <input type="text" id="kategori" name="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukkan Kategori" value="{{ $vendor->kategori }}" required>
                        @error('kategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('vendor.index') }}" class="btn btn-secondary m-t-15 waves-effect">Kembali</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan Perubahan</button>
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
        $('#form-tambah-vendor').validate({
            rules: {
                kode_vendor: {
                    required: true
                },
                nama_vendor: {
                    required: true
                },
                alamat: {
                    required: true
                },
                kota: {
                    required: true
                },
                kode_pos: {
                    required: true
                },
                provinsi: {
                    required: true
                },
                no_telp: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                kategori: {
                    required: true
                }
            },
            messages: {
                kode_vendor: {
                    required: "Kode Vendor harus diisi"
                },
                nama_vendor: {
                    required: "Nama Vendor harus diisi"
                },
                alamat: {
                    required: "Alamat harus diisi"
                },
                kota: {
                    required: "Kota harus diisi"
                },
                kode_pos: {
                    required: "Kode Pos harus diisi"
                },
                provinsi: {
                    required: "Provinsi harus diisi"
                },
                no_telp: {
                    required: "Nomor Telepon harus diisi"
                },
                email: {
                    required: "Email harus diisi",
                    email: "Format email tidak valid"
                },
                kategori: {
                    required: "Kategori harus diisi"
                }
            }
        });
    });
</script>
@endsection