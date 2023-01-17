@extends('template.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ url('upd-inf', $dok->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label>Title <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="judul" value="{{ $dok->judul}}"/>
                            </div>
                            <div class="mb-3">
                                <label>Content <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="konten" value="{{ $dok->konten}}" />
                            </div>
                            <div class="mb-3">
                                <label>File <span class="text-danger">*</span></label>
                                <input class="form-control" type="file" name="data" value="{{ $dok->data}}"/>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Add</button>
                                <a class="btn btn-danger" href="#">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
