<?php $__env->startSection('content'); ?>
<!-- Header -->
   <header>
        <div class="container">
            <div class="row">
             
               
            </div>
        </div>
    </header>
<br>

 <div class="section">
<center><form action="<?php echo e(url('Golongan')); ?>/?Nama_golongan=Nama_golongan">
     <input type="text" name="Nama_golongan" placeholder="search"></form>
 </form>
</center>
   <div class="right_col" role="main">
          <div class="">
           <center><h2>Data Golongan</h2></center>
            <div class="clearfix"></div>
 &nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('Golongan/create')); ?>" class="btn btn-primary">Input Data Golongan&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil"></i></a>
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
                    <table id="datatable" class="table table-success table-border table-hover">
                      <thead>
                        <tr class="info">
                          <th><p class="center"><center>No.</center></p></th>
                          <th><p class="center"><center>Kode Golongan</center></p></th>
                          <th><p class="center"><center>Nama Golongan</center></p></p></th>
                          <th><p class="center"><center>Besaran Uang</center></p></p></th>
                          <th colspan="3"><p class="center"><center>Tindakan</center></p></th>
                        </tr>
                      </thead>


                      <tbody>
                         <?php $no=1; ?>
                         <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                 <th><center><?php echo e($no++); ?></center></th>
                                 <th><center><?php echo e($data->Kode_golongan); ?></center></th>
                                 <th><center><?php echo e($data->Nama_golongan); ?></center></th>
                                 <th><center><?php echo 'Rp.'. number_format($data->Besaran_uang, 2,",","."); ?></center></th>
                                 <td><center><a href="<?php echo e(url('Golongan', $data->id)); ?>" class="btn btn-primary">Lihat</a></center></td>
            <td><center><a href="<?php echo e(route('Golongan.edit', $data->id)); ?>" class="btn btn-warning">Ubah</a></center></td>
                                 <th>
                                   <a data-toggle="modal" href="#delete<?php echo e($data->id); ?>" class="btn btn-danger" title="Delete" data-toggle="tooltip"><i class="fa fa-trash"></i>Hapus</a>
                                  <?php echo $__env->make('modals.del', [
                                    'url' => route('Golongan.destroy', $data->id),
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
        </div>


<?php $__env->stopSection(); ?>


     
<?php echo $__env->make('layouts.oh', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>