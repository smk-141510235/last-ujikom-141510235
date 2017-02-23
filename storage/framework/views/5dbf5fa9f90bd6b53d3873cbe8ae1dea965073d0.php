<?php $__env->startSection('content'); ?>
<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
             <center><h2>Data Jabatan</h2></center>
                <div class="section">
<center><form action="<?php echo e(url('Jabatan')); ?>/?Nama_jabatan=Nama_jabatan">
     <input type="text" name="Nama_jabatan" placeholder="search"></form>
 </form>
</center>
            </div>
        </div>
    </header>
<br>
	 <div class="right_col" role="main">
          <div class="">
          
            <div class="clearfix"></div>
 &nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('Jabatan/create')); ?>" class="btn btn-primary">Input Data Jabatan&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
<br><br>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Jabatan</center></p></th>
                          <th><p class="center"><center>Nama Jabatan</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <th><center><?php echo e($no++); ?></center></th>
                                 <th><center><?php echo e($data->Kode_jabatan); ?></center></th>
                                 <th><center><?php echo e($data->Nama_jabatan); ?></center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>
                                   <td><center><a href="<?php echo e(url('Jabatan', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
            <td><center><a href="<?php echo e(route('Jabatan.edit', $data->id)); ?>" class="btn btn-warning">Ubah</a></center></td>
                                 <th>
                                   <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
                                  <?php echo $__env->make('modals.del', [
                                    'url' => route('Jabatan.destroy', $data->id),
                                    'model' => $data
                                  ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                 </th>
                             </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>