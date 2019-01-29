@extends('adminlte::page')

@section('title', 'Daftar Rapat')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content_header')
    <h1>Daftar Rapat</h1>
@stop

@section('content')
    <div class="row">
        
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Rapat</h3>
                </div>
                <table class="table table-bordered">
                    <tr>                                   
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pimpinan</th>
                        <th>Acara</th>   
                        <th>Status</th>                     
                        <th style="width:200px;">Menu</th>
                    </tr>

                    @foreach ($response->hasil as $res)
                        <tr>
                            <td>{{$res->rn}}</td>                            
                            <td>{{$res->tanggal}}</td>
                            <td>{{$res->pimpinan}}</td>
                            <td>{{$res->acara}}</td>
                            <td>@if($res->recid_status == 2)
                                    Valid
                                @else
                                    Batal
                                @endif
                            </td>                            
                            <td>
                                <a href='https://rapat.pdam-sby.go.id/test/undangan/{!! $res->recid_undangan !!}' target="__blank"><button class="btn btn-primary">Lihat</button></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="box-footer clearfix">
                    
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

