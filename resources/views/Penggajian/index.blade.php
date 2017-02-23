@extends('layouts.app') 
 
 
 @section('content') 
 <div class="widget-box"> 
     <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span> 
          
     </div> 
     <div class="widget-content "> 
         <center><h3>Data Penggajian</h3> </center>
         <hr> 
         <a href="{{ url('/Penggajians/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Input data penggajian</a><hr/> 
        
         <hr/>   
    <table class="table table-striped table-bordered table-hover"> 
      <thead> 
        <tr class="success"> 
          <th><center>No</center></th> 
          <th><center>Nama Pegawai</center></th> 
          <th><center>Jumlah Uang Tunjangan</center></th> 
          <th><center>Jumlah Jam Lembur</center></th> 
          <th><center>Jumlah Uang Lembur</center></th> 
          <th><center>Gaji Pokok</center></th> 
          <th><center>Total Gaji</center></th> 
          <th><center>Tanggal Pengambilan</center></th> 
          <th><center>Status Pengambilan</center></th> 
          <th><center>Petugas Penerima</center></th> 
        </tr> 
      </thead> 
      <tbody> 
    
        <?php 
          $no = 1; 
        ?> 
          @foreach($penggajian as $data) 
            <tr> 
              <td><center>{{ $no++ }}</center></td> 
              <td>{{ $data->Tunjangan_pegawai->Pegawai->User->name }}</td> 
              <td>{{ $data->Jumlah_jam_lembur }}</td> 
              <td>{{ $data->Tunjangan_pegawai->Tunjangan->Besaran_uang }}</td> 
              <td>{{ $data->Jumlah_uang_lembur }}</td> 
              <td>{{ $data->Gaji_pokok }}</td> 
              <td>{{ $data->Total_gaji }}</td> 
              <td>{{ $data->Tanggal_penerimaan }}</td> 
              <td>{{ $data->Status_pengambilan }}</td> 
              <td>{{ $data->Petugas_penerima }}</td> 
              <td><center><a href="{{ url('pegawai', $data->id) }}" class="btn btn-primary">Lihat</a></center></td> 
              <a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
              @include('modals.del', [
              'url' => route('Penggajians.destroy', $data->id),
              'model' => $data
              ])
              </th> 
            </tr> 
          @endforeach 
    
      </tbody> 
    </table> 
  </div> 
 </div> 
 
 
@endsection 