@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>

  </ol>
  <a href="{{route('category.create')}}" class="btn btn-danger">tambah data</a>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>nama category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>nama category</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
@foreach ($category as $item)
        <tr>
            <td>{{$item->nama_category}}</td>

            <td>
            <a href="{{ route('category.edit',$item->id_category)}}" class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">
                    Edit
                    <span class="btn-label btn-label-right"><i class="fa fa-edit"></i></span>
                </a>

            <form action="{{ route('category.destroy',$item->id_category)}}" method="post">
                @csrf

                {{-- <button class="btn btn-sm btn-outline-secondary" style="padding-bottom: 0px; padding-top: 0px;">delete
                <span class="btn-label btn-label-right"><i class="fa fa-delete"></i></span>
            </button> --}}
            <input type="hidden" name='_method' value="DELETE">
            <button type="submit">delete</button>
            </form>
            </td>

        </tr>
@endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
  </div>

</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © Your Website 2019</span>
    </div>
  </div>
</footer>
@endsection


