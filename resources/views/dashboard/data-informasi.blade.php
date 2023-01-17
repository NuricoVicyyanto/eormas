@extends('template.dashboard')
@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Ormas Aktif</h6>
                <a href="{{ url('create-informasi') }}" type="button" class="float-right btn btn-primary"><i
                        class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>File</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtInformasi as $item)
                                <tr>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->konten }}</td>
                                    <td><a href="{{ $item->data}}">Download</a></td>

                                    <td><a href="{{ url('del-inf', $item->id) }}" type="button"
                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        {{-- <a href="{{ url('edit-inf', $item->id) }}" type="button" class="btn btn-warning"
                                            data-toggle="edit-atas" data-placement="right" title="Tolak data"><i
                                                class="fas fa-pen"></i></a> --}}
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
