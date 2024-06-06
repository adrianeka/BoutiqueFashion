@extends('layouts.admin')
@section('judul', 'List Detail Penjualan')
@section('script_head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('main-content')
<div class="block-header">
    <h1>Data Detail Penjualan</h1>
</div>

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body p-0" style="margin: 20px">
                <table id="previewDetailPenjualan" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Kode Barang</th>
                            <th>Kategori</th>
                            <th>Nama Barang</th>
                            <th>jumlah Terjual</th>
                            <th>Harga satuan</th>
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
        $('#previewDetailPenjualan').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('detailPenjualan.dataTable') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: "{{ csrf_token() }}"
                }
            },
            "columns": [{
                    "data": "kode_transaksi"
                },
                {
                    "data": "barang.kode_barang"
                },
                {
                    "data": "kategori"
                },
                {
                    "data": "item"
                },
                {
                    "data": "unit_terjual"
                },
                {
                    "data": "harga"
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
        $('#previewDetailPenjualan').on('click', '.hapusData', function() {
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
            }).then((result) => {
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
                            $('#previewDetailPenjualan').DataTable().ajax.reload();
                        }
                    });
                }
            });
        });
    });
</script>
@endsection