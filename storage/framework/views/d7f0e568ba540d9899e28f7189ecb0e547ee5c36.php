<?php $__env->startSection('content'); ?>

<br><br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Input Kategori Lembur</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <?php echo Form::open(['url' => 'Kategori', 'class' => 'form-horizontal form-label-left']); ?>

    <div id="pegawai">
      <div class="form-group<?php echo e($errors->has('Kode_lembur') ? ' has-error' : ''); ?>">
                            <label for="Kode_lembur" class="control-label col-md-3 col-sm-3 col-xs-12">Kode Kategori Lembur</label>

                            <div class="col-md-6">
                                <input id="Kode_lembur" type="text" class="form-control col-md-7 col-xs-12" name="Kode_lembur" value="<?php echo e(old('Kode_lembur')); ?>"  autofocus>

                                <?php if($errors->has('Kode_lembur')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Kode_lembur')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Golongan</label>

                            <div class="col-md-6">
                                <select name="golongan_id" class="form-control col-md-7 col-xs-12">
                                   
                                    <?php $__currentLoopData = $gol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_golongan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('golongan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('golongan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('jabatan_id') ? ' has-error' : ''); ?>">
                            <label for="jabatan_id" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Jabatan</label>

                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control col-md-7 col-xs-12">
                                  
                                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->Nama_jabatan); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php if($errors->has('jabatan_id')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('jabatan_id')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="Besaran_uang" class="control-label col-md-3 col-sm-3 col-xs-12">Besaran uang </label>

                            <div class="col-md-6">
                                <input id="Besaran_uang" type="number" class="form-control col-md-7 col-xs-12" name="Besaran_uang" value="<?php echo e(old('Besaran_uang')); ?>"  autofocus>

                                <?php if($errors->has('Besaran_uang')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Besaran_uang')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
      <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <?php echo Form::submit('Save', ['class' => 'btn btn-success form-control']); ?>

          </div>
      </div>
    </div>
    <?php echo Form::close(); ?>

                
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>