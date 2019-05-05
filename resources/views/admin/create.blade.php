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
                Add New User
              </div>
            <form action="{{ route('supliyer.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">nama suliyer</label>
                        <input type="text" id="nama_supliyer" name="nama_supliyer" class="form-control{{ $errors->has('nama_supliyer') ? ' is-invalid' : '' }}" name="nama_supliyer" value="{{ old('nama_supliyer') }}" required autofocus>
                        @if ($errors->has('nama_supliyer'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nama_supliyer') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">alamat suliyer</label>
                        <input type="text" id="alamat" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>
                        @if ($errors->has('alamat'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">no tlp suliyer</label>
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control{{ $errors->has('no_tlp') ? ' is-invalid' : '' }}" name="no_tlp" value="{{ old('no_tlp') }}" required autofocus>
                        @if ($errors->has('no_tlp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('no_tlp') }}</strong>
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
