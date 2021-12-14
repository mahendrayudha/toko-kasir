@extends('layouts.master')

@section('title')
    Contact Us
@endsection

@section('breadcrumb')
    @parent
    <li class="active">Contact Us</li>
@endsection

@section('content')
    <div class="container mt-n10">
        <div class="card mb-4">
            <div class="card-header">Contact Us</div>


            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ $message }}
                    </div>
                @endif
                <div class="datatable">
                    <table class="table table-striped" id="contact_us" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($contact as $data)
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <?php if($data->status == 1){?>
                                        <span class="badge btn-danger">Belum Dibaca</span>
                                        <?php } ?>
                                        <?php if($data->status == 2){?>
                                        <span class="badge btn-primary">Telah Dibaca</span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="/contact/detail/{{ $data->id }}"
                                            class="btn btn-primary btn-sm">Detail</a>
                                        <a href="/contact/destroy/{{ $data->id }}"
                                            class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-script')
    <script>
        let table;

        $(function () {
            table = $('#contact_us').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: 'http://127.0.0.1:8000/kategori/data',
                },
                columns: [
                    {data: 'DT_RowIndex', searchable: false, sortable: false},
                    {data: 'nama_kategori'},
                    {data: 'aksi', searchable: false, sortable: false},
                ]
            });
        });
   </script>
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
   <script src="{{ asset('assets') }}/js/datatables-demo.js"></script>
@endpush
