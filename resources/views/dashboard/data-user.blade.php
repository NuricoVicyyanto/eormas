@extends('template.dashboard')
@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtUser as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>{{ $item->level }}</td>
                                    @if ($item->user_id == auth()->user()->user_id)
                                        <td>
                                            <a href="{{ url('del-us', $item->user_id) }}" type="button"
                                                class="btn btn-danger disabled"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    @else
                                        <td><a href="{{ url('del-us', $item->user_id) }}" type="button"
                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
