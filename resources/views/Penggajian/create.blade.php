@extends('layouts.app')

@section('content')

<br><br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Input Penggajian</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  {!! Form::open(['url' => 'Penggajians', 'class' => 'form-horizontal form-label-left']) !!}
    <div id="pegawai">
    <div class="form-group">
        <div class="control-label col-md-3 col-sm-3 col-xs-12">
            {!! Form::label('Nama Pegawai', 'Nama Pegawai ') !!}
             <span class="required">*</span>
        </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control col-md-7 col-xs-12" name="Kode_tunjangan_id">
             @foreach($tunjangan_pegawai as $data)
                <option value="{{ $data->id }}">{{ $data->Pegawai->Nip }} || {{ $data->Pegawai->User->name }}</option> 
            @endforeach
            </select>
        </div>
<br><br><br>   
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              {!! Form::submit('Save', ['class' => 'btn btn-success form-control']) !!}
          </div>
      </div>
    </div>
    {!! Form::close() !!}
               
    
@endsection
