
@extends('layouts.admin.app')
@section('asset-top')
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css">
@endsection
@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                <div class="mr-5">date:</div>
                <div class="mr-5">kasir:{{auth::user()->name}}</div>
                </div>
        </div>
    </div>
    <div class="col-md-4">
            <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">

                        <div class="control-group">
                            <form action="{{route('penjualan.store')}}" method="post">
                                @csrf
                                <table>
                                    <tr>
                                        <td><label for="select-search">pilih barang:</label></td>
                                        <td> <select name="barang" id="select-search" style="width:200px">
                                                <option value=""></option>
                                                @foreach ($barang as $item)
                                                    <option name="{{$item->nama_barang}}"value="{{$item->id_barang}}">{{$item->nama_barang}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="qyt">qyt:</label></td>
                                        <td>
                                            <div class="mr-5">
                                                <input type="text" name="qyt" size="20" id="qyt">
                                            </div>
                                        </td>
                                    </tr>
                            </table>
                                <button name="submit" class="center">kirim</button>
                        </form>
                    </div>
                    </div>
            </div>
    </div>
</div>
<!-- Sticky Footer -->
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Your Website 2019</span>
    </div>
  </div>
</footer>


    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script>
        $('#select-search').select2({

            placeholder:"Select a barang...",
            allowClear:true
        });
    </script>

@endsection
