@extends('admin.baseAdmin')

@section('title')
    Admin Asosiasi
@endsection

@section('body')
    <h1>Admin Asosiasi</h1>
    <div class="col-md-6">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                Data telah ditambahkan
            </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Asosiasi</h4>
                        <a href="{{ route('adminAsosiasi.create') }}" style="margin-left:auto">
                            <button class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i> Tambah Asosiasi
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="box-body table-responsive">
                        <table id="tableFoto" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama</th>
                                    <th width="40%">Logo</th>
                                    <th>Tampilkan di beranda?</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n = 1; ?>
                                @foreach ($asosiasi as $item)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>
                                            <center><img src="{{ $item->logo }}" alt="{{ $item->nama }}"
                                                    style="width:50%" class="m-4"></center>
                                        </td>
                                        <td>
                                            @if ($item->is_tampil === 'tidak')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('adminAsosiasi.edit', $item->id) }}">
                                                <button class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button>
                                            </a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px"
                                                onclick="confirmDelete('{{ route('adminAsosiasi.destroy', $item->id) }}')">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(function() {
            $('#tableFoto').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
            });
        });

        function confirmDelete(url) {
            Swal.fire({
                title: 'Anda yakin ingin menghapus asosiasi ini?',
                text: "Tindakan ini tidak dapat dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    hapusData(url);
                }
            });
        }

        function hapusData(url) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    '_token': '{{ csrf_token() }}',
                    '_method': 'DELETE'
                },
                success: function(response) {
                    Swal.fire(
                        'Terhapus!',
                        'Asosiasi telah dihapus.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr) {
                    Swal.fire(
                        'Gagal!',
                        'Asosiasi tidak dapat dihapus.',
                        'error'
                    );
                }
            });
        }
    </script>
@endsection
