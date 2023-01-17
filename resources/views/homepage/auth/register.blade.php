@extends('template.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4 ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        @if ($errors->any())
                            @foreach ($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                        @endif
                        <form action="{{ route('register.action') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="username" value="{{ old('username') }}" />
                            </div>
                            <div class="mb-3">
                                <label>Level <span class="text-danger">*</span></label>
                                <select class="form-control" name="level" value="{{ old('level') }}">
                                    <option>admin</option>
                                    <option>user</option>
                                </select>
                                {{-- <input class="form-control" type="text" name="level" value="{{ old('level') }}" /> --}}
                            </div>
                            <div class="mb-3">
                                <label>Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" />
                            </div>
                            <div class="mb-3">
                                <label>Password Confirmation<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password_confirm" />
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Register</button>
                                <a class="btn btn-danger" href="#">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
