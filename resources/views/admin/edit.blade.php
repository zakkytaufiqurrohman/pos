@extends('layouts.admin.app')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Users</a>
          </li>
          <li class="breadcrumb-item active">edit </li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
          <div class="col-md-12">
            <div class="card">

            <form action="{{ route('supliyer.update',$data->id_supliyer)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="card-body">
                    <div class="form-group">
                    <label for="name">nama suliyer </label>

                    <input type="text" id="nama_supliyer" name="nama_supliyer" value="{{ $data->nama_supliyer}}" class="form-control{{ $errors->has('nama_supliyer') ? ' is-invalid' : '' }}" name="nama_supliyer" required >
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

                        <input type="text" id="alamat" name="alamat" value="{{ $data->alamat}}" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" required >
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
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control{{ $errors->has('no_tlp') ? ' is-invalid' : '' }}" name="no_tlp" value="{{ $data->no_tlp}}" required autofocus>
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
