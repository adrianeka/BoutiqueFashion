@extends('layouts.admin')
@section('judul', 'List Detail Pembelian')
@section('script_head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('main-content')
<div class="block-header">
    <h1>Data Detail Pembelian</h1>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-0" style="margin: 20px">
                <table id="previewDetailPembelian" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nomor Transaksi</th>
                            <th>ID Barang</th>
                            <th>Nama Barang</th>
                            <th>jumlah</th>
                            <th>Harga Beli</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script_footer')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#previewDetailPembelian').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('detailPembelian.dataTable') }}",
                "type": "POST",
                "data": {
                    _token: "{{ csrf_token() }}"
                },
                "dataSrc": function(json) {
                    if (json.data) {
                        return json.data;
                    } else {
                        return [];
                    }
                }
            },
            "columns": [{
                    "data": "kode_transaksi"
                },
                {
                    "data": "ID"
                },
                {
                    "data": "barang.nama_barang"
                },
                {
                    "data": "jumlah"
                },
                {
                    "data": "harga",
                    "render": function(data) {
                        return formatRupiah(data);
                    }
                },
                {
                    "data": "total"
                },
            ],
            "language": {
                "decimal": "",
                "emptyTable": "Tak ada data yang tersedia pada tabel ini",
                "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
                "infoFiltered": "(difilter dari _MAX_ total entri)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Tampilkan _MENU_ entri",
                "loadingRecords": "Loading...",
                "processing": "Sedang Mengambil Data...",
                "search": "Pencarian:",
                "zeroRecords": "Tidak ada data yang cocok ditemukan",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "aria": {
                    "sortAscending": ": aktifkan untuk mengurutkan kolom ascending",
                    "sortDescending": ": aktifkan untuk mengurutkan kolom descending"
                }
            }
        });

        function formatRupiah(angka) {
            var reverse = angka.toString().split('').reverse().join('');
            var ribuan = reverse.match(/\d{1,3}/g);
            var formatted = ribuan.join('.').split('').reverse().join('');
            return 'Rp ' + formatted;
        }

        // hapus data
        $('#previewDetailPembelian').on('click', '.hapusData', function() {
            var kode_transaksi = $(this).data("id");
            var url = $(this).data("url");

            Swal.fire({
                    title: 'Apa kamu yakin?',
                    text: "Kamu tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        // Hapus data setelah konfirmasi
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: {
                                "kode_transaksi": kode_transaksi,
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                Swal.fire('Terhapus!', response.msg, 'success');
                                $('#previewDetailPembelian').DataTable().ajax.reload();
                            }
                        });
                    }
                });
        });
    });
</script>
@endsection