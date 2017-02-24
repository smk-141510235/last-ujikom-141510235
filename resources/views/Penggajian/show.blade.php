@extends('layouts.oh')

@section('content')
          <br><br><br><br><br><br>
 <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                    <center><h2>Detail Penggajian</h2></center>
                    <br />
                    <form class="form-horizontal">
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Pegawai</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Tunjangan_pegawai->Pegawai->User->name}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Jumlah Jam Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Jumlah_jam_lembur}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Jumlah Uang Lembur</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Jumlah_uang_lembur}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Gaji Pokok</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Gaji_pokok}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Tanggal Pengambilan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Tanggal_pengambilan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Status Pengambilan</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Status_pengambilan}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Petugas Penerima</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="isbn" placeholder="{{$data->Petugas_penerima}}" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('Penggajians')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
                  </div>
                </div>
              </div>
    
@endsection
