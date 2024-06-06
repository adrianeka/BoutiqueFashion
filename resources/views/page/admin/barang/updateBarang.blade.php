@extends('layouts.admin')
@section('judul', 'Ubah Barang')
@section('main-content')

<div class="block-header">
    <h2>Edit Barang</h2>
</div>

<!-- Content Header (Page header) -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Informasi Barang
                </h2>
                <div class="body">
                    <form method="post" action="{{ route('barang.update', ['ID' => $barang->ID]) }}">
                        @csrf
                        @method('POST')
                        <label for="Kode_Barang">Kode Barang</label>
                        <div class="form-group">
                            <input type="text" id="Kode_Barang" name="Kode_Barang" class="form-control @error('Kode_Barang') is-invalid @enderror" placeholder="Masukkan Kode Barang" value="{{ $barang->Kode_Barang }}" required>
                            @error('Kode_Barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="kategori">Kategori</label>
                        <div class="form-group">
                            <input type="text" id="kategori" name="kategori" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukkan Kategori" value="{{ $barang->kategori }}" required>
                            @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="nama_barang">Nama Barang</label>
                        <div class="form-group">
                            <input type="text" id="nama_barang" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Masukkan Nama Barang" value="{{ $barang->nama_barang }}" required>
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="harga_beli">Harga Beli</label>
                        <div class="form-group">
                            <input type="text" id="harga_beli" name="harga_beli" class="form-control @error('harga_beli') is-invalid @enderror" placeholder="Masukkan Harga Beli" value="{{ $barang->harga_beli }}" required>
                            @error('harga_jual')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="harga_jual">Harga Jual</label>
                        <div class="form-group">
                            <input type="text" id="harga_jual" name="harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" placeholder="Masukkan Harga Jual" value="{{ $barang->harga_jual }}" required>
                            @error('harga_jual')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <label for="unit">Unit</label>
                        <div class="form-group">
                            <input type="text" id="unit" name="unit" class="form-control @error('unit') is-invalid @enderror" placeholder="Masukkan Unit" value="{{ $barang->unit }}" required>
                            @error('unit')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('barang.index') }}" class="btn btn-secondary m-t-15 waves-effect">Cancel</a>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Simpan Perubahan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /.content -->

@endsection
@section('script_footer')
<script>
    inputFoto.onchange = evt => {
        const [file] = inputFoto.files
        if (file) {
            prevImg.src = URL.createObjectURL(file)
        }
    }
</script>
@endsection