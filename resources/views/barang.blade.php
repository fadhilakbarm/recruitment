@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
@stop

@section('title', 'Tambah Barang')

@section('content_header')
    <h1>Tambah Barang</h1>
@stop

@section('content')
    <div class="row">
        {!! Form::open(['route'=>'barang/create']) !!}

        <div class="col-lg-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Barang</h3>
                </div>
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There is wrong input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!-- <div class="form-group">
                        <label for="">Item</label>
                        {!! Form::select('item_id', $items, null, ['class'=>'form-control']) !!}
                    </div> -->
                    <div class="form-group">
                        <label for="">Kategori id</label>
                        {!! Form::text('kategori_id',null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        {!! Form::text('nama',null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        {!! Form::text('jumlah',null, ['class'=>'form-control']) !!}
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ URL::previous() }}" class="btn btn-warning" style="padding: 6px 20px;">Back</a>

                </div>
            </div>
        </div>
        {!! Form::close() !!}

    </div>


@stop

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
@stop
