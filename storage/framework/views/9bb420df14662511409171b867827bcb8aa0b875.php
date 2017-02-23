 
 
 
 <?php $__env->startSection('content'); ?> 
 <div class="widget-box"> 
     <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span> 
          
     </div> 
     <div class="widget-content "> 
         <center><h3>Data Penggajian</h3> </center>
         <hr> 
         <a href="<?php echo e(url('/Penggajians/create')); ?>" class="btn btn-success"><span class="icon-plus"></span>&nbsp;&nbsp; Input data penggajian</a><hr/> 
        
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
          <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr> 
              <td><center><?php echo e($no++); ?></center></td> 
              <td><?php echo e($data->Tunjangan_pegawai->Pegawai->User->name); ?></td> 
              <td><?php echo e($data->Jumlah_jam_lembur); ?></td> 
              <td><?php echo e($data->Tunjangan_pegawai->Tunjangan->Besaran_uang); ?></td> 
              <td><?php echo e($data->Jumlah_uang_lembur); ?></td> 
              <td><?php echo e($data->Gaji_pokok); ?></td> 
              <td><?php echo e($data->Total_gaji); ?></td> 
              <td><?php echo e($data->Tanggal_penerimaan); ?></td> 
              <td><?php echo e($data->Status_pengambilan); ?></td> 
              <td><?php echo e($data->Petugas_penerima); ?></td> 
              <td><center><a href="<?php echo e(url('pegawai', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td> 
              <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
              <?php echo $__env->make('modals.del', [
              'url' => route('Penggajians.destroy', $data->id),
              'model' => $data
              ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </th> 
            </tr> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    
      </tbody> 
    </table> 
  </div> 
 </div> 
 
 
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>