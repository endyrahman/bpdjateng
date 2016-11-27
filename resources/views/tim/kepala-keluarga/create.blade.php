@extends('layouts.dashboard')
@section('content')

<h4>CREATE</h4>

{!! Form::open()  !!}

    <div class="form-group">
        <div class="col-xs-4">
        <label for="nama">Nama Kepala Rumah Tangga</label>
            {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required' => 'required', 'autocomplete' => 'off']) !!}
        </div>
        <div class="col-xs-2">
        <label for="jenis_kelamin">Jenis Kelamin</label>
            {!! Form::select('jenis_kelamin', ['Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki-laki'],  'Laki-laki', ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-3">
        <label for="noktp">No KTP</label>
            {!! Form::text('noKTP', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required' => 'required', 'autocomplete' => 'off']) !!}
        </div>
        <div class="col-xs-4">
        <label for="alamat">Alamat</label>
            {!! Form::textarea('alamat', null, ['class' => 'form-control', 'rows' => 3, 'required' => 'required', 'autocomplete' => 'off']) !!}
        </div>
    </div>

@endsection