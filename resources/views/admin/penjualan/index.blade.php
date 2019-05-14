
@extends('layouts.admin.app')
@section('asset-top')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
                            {{-- ======================== --}}
                                <h2>Modal Example</h2>
                                <!-- Button to Open the Modal -->
                                <input type="text" data-toggle="modal" data-target="#myModal" id="search" name="search">
                                </input>
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <!-- Modal Header -->
                                      <div class="modal-header">
                                        <h4 class="modal-title">Modal Heading</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <!-- Modal body -->
                                      <div class="modal-body bg-success">
                                        <table class="table table-bordered table-hover success" >
                                            <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            </tr>
                                            </thead>
                                            <tbody class="key">
                                            </tbody>
                                        </table>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            {{-- ======================== --}}
                            <div class="mr-5">qyt:<input type="text"  size="30"></div>
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
    $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
        type : 'get',
        url : '{{URL::to('search')}}',
        data:{'search':$value},

        success:function(data){
            $('tbody').html(data);

        }
        });
    })

    $(".key").click(function(){

    });

</script>



    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>

@endsection
