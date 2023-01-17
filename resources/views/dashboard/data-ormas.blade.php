@extends('template.dashboard')
@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Ormas Aktif</h6>
                <a href="{{ url('export-profile') }}" type="button" class="float-right btn btn-primary"><i
                        class="fas fa-download"></i> Export Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Organisasi</th>
                                <th>Jenis Organisasi</th>
                                <th>Bidang Kegiatan</th>
                                <th>Kelurahan/Desa</th>
                                <th>Kecamatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtOrmas as $item)
                                @if ($item->status == 'Approve')
                                    <tr>
                                        <td>{{ $item->nama_organisasi }}</td>
                                        <td>{{ $item->jenis_organisasi }}</td>
                                        <td>{{ $item->bidang_kegiatan }}</td>
                                        <td>{{ $item->kelurahan }}</td>
                                        <td>{{ $item->kecamatan }}</td>
                                        @if ($item->user_id == auth()->user()->user_id)
                                            <td>
                                                <a href="{{ url('del-us', $item->user_id) }}" type="button"
                                                    class="btn btn-danger disabled"><i class="fas fa-trash-alt"></i></a>
                                                <a href="{{ url('ejtask', $item->id) }}" type="button"
                                                    class="btn btn-warning" data-toggle="edit-atas" data-placement="right"
                                                    title="Tolak data"><i class="fas fa-times"></i></a>
                                                <a href="{{ url('acctask', $item->id) }}" type="button"
                                                    class="btn btn-success" data-toggle="edit-atas" data-placement="right"
                                                    title="Approve data"><i class="fas fa-check"></i></a>
                                            </td>
                                        @else
                                            <td><a href="{{ url('del-us', $item->user_id) }}" type="button"
                                                    class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                <a href="{{ url('ejtask', $item->id) }}" type="button"
                                                    class="btn btn-warning" data-toggle="edit-atas" data-placement="right"
                                                    title="Tolak data"><i class="fas fa-times"></i></a>
                                                <a href="{{ url('acctask', $item->id) }}" type="button"
                                                    class="btn btn-success" data-toggle="edit-atas" data-placement="right"
                                                    title="Approve data"><i class="fas fa-check"></i></a>
                                            </td>
                                        @endif
                                    </tr>
                                @else
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
