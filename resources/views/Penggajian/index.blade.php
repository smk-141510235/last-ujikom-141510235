@extends('layouts.app') 
 
 
 @section('content') 
 <div class="widget-box"> 
     <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span> 
          
     </div> 
     <div class="widget-content "> 
         <center><h3>Data Penggajian</h3> </center>
         <hr> 
         <a href="{{ url('/Penggajians/create') }}" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Input data penggajian</a><hr/> 
        
          <hr>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr class="bg-danger">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Pegawai</center></p></th>
                          <th><p class="center"><center>Jumlah Jam Lembur</center></p></th>
                          <th><p class="center"><center>Jumlah Uang Lembur</center></p></p></th>
                          <th><p class="center"><center>Gaji Pokok</center></p></p></th>
                          <th><p class="center"><center>Total Gaji</center></p></p></th>
                          <th><p class="center"><center>Tanggal Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Status Pengambilan</center></p></p></th>
                          <th><p class="center"><center>Petugas Penerima</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($gajian as $data)
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->Tunjangan_pegawai->Pegawai->User->name}}</td>
                                    <td>{{$data->Jumlah_jam_lembur}} </td>
                                    <td>{{$data->Jumlah_uang_lembur}} </td>
                                    <td>{{$data->Gaji_pokok}} </td>
                                    <td>{{$data->Total_gaji}} </td>
                                    <td>{{$data->updated_at}} </td>
                                    
                                    @if($data->Status_pengambilan == 0)
                                    
                                        <td>Belum Diambil </td>
                                    
                                    @endif
                                    @if($data->Status_pengambilan == 1)
                                    
                                        <td>Sudah Diambil</td>
                                    
                                    @endif
                                  <td>{{$data->Petugas_penerima}} </td>
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