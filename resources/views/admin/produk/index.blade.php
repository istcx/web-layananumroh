@extends('admin.baseAdmin')

@section('title')
    Data Produk
@endsection

@section('body')
    <H1>Admin Produk</H1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Data Produk</h4>
                        <a href="{{ route('adminProduk.create') }}" style="margin-left:auto">
                            <button class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Tambah Produk
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
                                    <th>Kode Produk</th>
                                    <th>Brosur</th>
                                    <th width="10%">Tampil di Beranda</th>
                                    <th width="10%">Tampil di Halaman Produk</th>
                                    <th width="10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody><?php $n = 1; ?>
                                @foreach ($produk as $produk)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->slug }}</td>
                                        <td><img src="{{ $produk->gambar }}" alt="{{ $produk->nama }}"
                                                style="max-height: 400%;" class="mb-2 mt-2"></td>
                                        <td>
                                            @if ($produk->is_tampil_di_beranda != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($produk->is_tampil_di_halaman_produk != 'ya')
                                                <center><i class="fa fa-times" style="color: brown"></i></center>
                                            @else
                                                <center><i class="fa fa-check" style="color: green"></i></center>
                                            @endif
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm" style="margin: 5px" data-toggle="modal"
                                                data-target="#ModalProdukDetail-{{ $produk->id }}">
                                                <span class="btn-label">
                                                    <i class="fa fa-info" style="font-size:10px "></i>
                                                </span>
                                                Detail
                                            </button>
                                            <a href="{{ route('adminProduk.edit', $produk->id) }}">
                                                <button class="btn btn-success btn-sm" style="margin: 5px">
                                                    <span class="btn-label">
                                                        <i class="fa fa-edit" style="font-size:10px"></i>
                                                    </span>
                                                    Edit
                                                </button>
                                            </a>
                                            <button class="btn btn-danger btn-sm" style="margin: 5px"
                                                onclick="hapusData('{{ route('adminProduk.destroy', $produk->id) }}')">
                                                <span class="btn-label">
                                                    <i class="fa fa-trash" style="font-size:10px"></i>
                                                </span>
                                                Hapus
                                            </button>
                                        </td>
                                    </tr>

                                    {{-- Modal Produk Detail --}}
                                    <div class="modal fade" id="ModalProdukDetail-{{ $produk->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 120%">
                                                <div class="modal-header border-0">
                                                    <h5 class="modal-title">
                                                        Detail Produk
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-9">
                                                        <div class="modal-body">
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama" class="col-md-4">Nama Produk</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->nama }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama" class="col-md-4">Kategori Produk</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->kategori_paket }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Kode" class="col-md-4">Kode Produk</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->slug }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Harga"
                                                                    class="col-md-4 col-md-offset-1 control-label">Harga Produk</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->harga }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Tanggal Berangkat</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->tgl_berangkat }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Durasi</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->durasi }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Total Seat</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->total_seat }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Berangkat Dari</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->berangkat_dari }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Hotel</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->hotel }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row" style="margin-bottom: -15px">
                                                                <label for="Nama"
                                                                    class="col-md-4 col-md-offset-1 control-label">Maskapai</label>
                                                                <div class="col-md-8">
                                                                    <span>{{ $produk->maskapai }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <div class="form-group row"
                                                            style="margin-bottom: -15px; margin-left:-280px">
                                                            <center><img src="{{ $produk->gambar }}"
                                                                    alt="{{ $produk->nama }}" style="max-width:50%">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer border-0">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.js"></script>
    <script>
        let table;

        $(function() {
            table = $('#tableFoto').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                // 
            });
        });

        function hapusData(url) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan aksi ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post(url, {
                        '_token': $('[name=csrf-token]').attr('content'),
                        '_method': 'delete'
                    })
                    .done((response) => {
                        Swal.fire(
                            'Dihapus!',
                            'Produk berhasil dihapus.',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    })
                    .fail((errors) => {
                        Swal.fire(
                            'Gagal!',
                            'Produk gagal dihapus.',
                            'error'
                        );
                    });
                }
            });
        }
    </script>
@endsection
