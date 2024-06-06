@extends('layouts.admin')
@section('judul', 'List Customer')
@section('script_head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('main-content')
<div class="block-header">
    <h2>Data Customer</h2>
</div>

@if(session('status'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
    {{ session('status') }}
</div>
@endif

<div class="row clearfix">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header" style=" padding: 1rem;">
                <a href="{{ route('customer.add') }}">
                    <button type="button" class="btn btn-primary">
                        Tambah Data
                    </button>
                </a>
            </div>
            <div class="card-body p-0" style="margin: 20px">
                <table id="previewCustomer" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kode Customer</th>
                            <th>Nama Customer</th>
                            <th>Alamat</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>No. Telepon</th>
                            <th>Customer Since</th>
                            <th>Action</th>
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
        $('#previewCustomer').DataTable({
            "serverSide": true,
            "processing": true,
            "ajax": {
                "url": "{{ route('customer.dataTable') }}",
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: "{{ csrf_token() }}"
                }
            },
            "columns": [{
                    "data": "kode_customer"
                },
                {
                    "data": "nama_customer"
                },
                {
                    "data": "alamat"
                },
                {
                    "data": "city"
                },
                {
                    "data": "postal_code"
                },
                {
                    "data": "country"
                },
                {
                    "data": "no_telp"
                },
                {
                    "data": "customer_since"
                },
                {
                    "data": "options"
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

        // hapus data
        $('#previewCustomer').on('click', '.hapusData', function() {
            var kode_customer = $(this).data("id");
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
                                "kode_customer": kode_customer,
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                Swal.fire('Terhapus!', response.msg, 'success');
                                $('#previewCustomer').DataTable().ajax.reload();
                            }
                        });
                    }
                });
        });
    });
</script>
@endsection