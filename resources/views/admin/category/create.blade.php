@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Users</a>
          </li>
          <li class="breadcrumb-item active">Add New</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header text-white bg-primary">
                Add New category
              </div>
            <form action="{{ route('category.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">nama category</label>
                        <input type="text" id="nama_supliyer" name="nama_category" class="form-control{{ $errors->has('nama_category') ? ' is-invalid' : '' }}" name="nama_category" value="{{ old('nama_category') }}" required autofocus placeholder="exp:buku,obat.dll">
                        @if ($errors->has('nama_category'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama_category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="card-footer bg-transparent">
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </div>
            </form>
            </div>
          </div>
        </div>
    </div>
@endsection
