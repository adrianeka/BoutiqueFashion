@extends('layouts.admin')
@section('judul', 'Tambah Penjualan')
@section('main-content')

<!-- Content Header (Page header) -->
<div class="block-header">
    <h2>Tambah Penjualan</h2>
</div>

<!-- Main content -->
@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Informasi Penjualan</h2>
            </div>
            <div class="body">
                <form method="post" action="{{ route('penjualan.add') }}">
                    @csrf
                    <div class="form-group">
                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input type="date" id="tanggal_transaksi" name="tanggal_transaksi" class="form-control @error('tanggal_transaksi') is-invalid @enderror" placeholder="Masukkan Tanggal Transaksi" value="{{ old('tanggal_transaksi', \Carbon\Carbon::now()->format('Y-m-d')) }}" required>
                        @error('tanggal_transaksi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kode_customer">Nama Customer</label>
                        <select name="kode_customer" id="kode_customer" class="form-control @error('kode_customer') is-invalid @enderror" required>
                            @foreach($customers as $customer)
                            <option value="{{ $customer->kode_customer }}">{{ $customer->nama_customer }}</option>
                            @endforeach
                        </select>
                        @error('kode_customer')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="items">Barang</label>
                        <div id="items">
                            <div class="item">
                                <div class="mb-4">
                                    <select name="items[0][nama_barang]" class="form-control @error('items.0.nama_barang') is-invalid @enderror" required>
                                        @foreach($barangs as $barang)
                                        <option value="{{ $barang->nama_barang }}">{{ $barang->nama_barang }} (Stok: {{ $barang->unit }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <input type="number" name="items[0][jumlah]" class="form-control @error('items.0.jumlah') is-invalid @enderror" placeholder="Jumlah" required>
                                </div>
                                @error('items.0.kode_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                @error('items.0.jumlah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="button" id="add-item" class="btn btn-primary mt-2">Tambah Barang</button>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Tambah Penjualan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script_footer')
<script>
    let itemIndex = 1;
    document.getElementById('add-item').addEventListener('click', function() {
        const itemsDiv = document.getElementById('items');
        const newItem = document.createElement('div');
        newItem.classList.add('item', 'mb-4');
        newItem.innerHTML = `
            <div class="form-group">
                <label for="items[${itemIndex}][nama_barang]">Barang</label>
                <select name="items[${itemIndex}][nama_barang]" class="form-control @error('items.${itemIndex}.nama_barang') is-invalid @enderror" required>
                    <option value="" disabled selected>Pilih Barang</option>
                    @foreach($barangs as $barang)
                        <option value="{{ $barang->nama_barang }}">{{ $barang->nama_barang }} (Stok: {{ $barang->unit }})</option>
                    @endforeach
                </select>
                @error('items.${itemIndex}.kode_barang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="items[${itemIndex}][jumlah]">Jumlah</label>
                <input type="number" name="items[${itemIndex}][jumlah]" class="form-control @error('items.${itemIndex}.jumlah') is-invalid @enderror" placeholder="Jumlah" required>
                @error('items.${itemIndex}.jumlah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        `;
        itemsDiv.appendChild(newItem);
        itemIndex++;
    });
</script>
@endsection