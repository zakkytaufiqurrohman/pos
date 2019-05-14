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
            <form action="{{ route('barang.update',$barang->id_barang)}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="card-body">
                        <div class="form-group">
                            <label for="name">nama barang</label>
                            <input type="text" id="nama_barang" name="nama_barang" class="form-control{{ $errors->has('nama_barang') ? ' is-invalid' : '' }}" name="nama_barang" value="{{$barang->nama_barang }}" required autofocus>
                            @if ($errors->has('nama_barang'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nama_barang') }}</strong>
                                </span>
                            @endif
                </div>
                {{-- supliyer --}}
                  <div class="card-body">
                        <div class="form-group">
                            <label for="id_supliyer">supliyer</label>
                            <select name="id_supliyer" id="supliyer" >
                                @foreach ($supliyer as $item)
                                    <option value="{{$item->id_supliyer}}" {{ $barang->id_barang===$item->id_supliyer ?'selected' : null}}>{{$item->nama_supliyer}}</option>
                                @endforeach

                            </select>
                        </div>
                </div>
                {{-- end supliyer --}}
                {{-- category --}}
                <div class="card-body">
                        <div class="form-group">
                            <label for="id_category">category</label>
                            <select name="id_category" id="category" >
                                @foreach ($category as $item)
                                    <option value="{{$item->id_category}}" {{ $item->id_category == $barang->id_barang ? 'selected' : null}}>{{$item->nama_category}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">stok</label>
                        <input type="text" id="alamat" name="stok" class="form-control{{ $errors->has('stok') ? ' is-invalid' : '' }}" name="stok" value="{{ $barang->stok}}" required autofocus>
                        @if ($errors->has('stok'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('stok') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">harga</label>
                        <input type="text" id="harga" name="harga" class="form-control{{ $errors->has('harga') ? ' is-invalid' : '' }}" name="harga" value="{{ $barang->harga}}" required autofocus>
                        @if ($errors->has('harga'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('harga') }}</strong>
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
