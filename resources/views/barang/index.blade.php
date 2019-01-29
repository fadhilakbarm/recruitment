@extends('adminlte::page')

@section('title', 'Daftar Barang')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content_header')
    <h1>Daftar Barang</h1>
@stop

@section('content')
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Barang</h3>
                </div>
                <table class="table table-bordered">
                    <tr>            .
                        <th>No</th>                       
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>                           
                    </tr>
                    @foreach ($barang as $b)
                        <tr>
                            <td>{{$b->id}}</td>
                            <td>{{$b->nama}}</td>                            
                            <td>{{$b->jumlah}}</td>
                            <td>Kategori {{$b->kategori_id}}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="box-footer clearfix">
                    {!! $paginate !!}
                </div>
            </div>



        </div>
    </div>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.7/sweetalert2.all.min.js"></script>
    <script>
        function checkDelete(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                $.ajax({
                    url:" {{ url('admin/panic-button/')}}/"+id,
                    type: 'DELETE',
                })
                .done(function(res) {
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    location.reload();
                })
            }
        })
        }
    </script>
@stop

