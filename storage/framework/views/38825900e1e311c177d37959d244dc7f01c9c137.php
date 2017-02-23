<?php $__env->startSection('content'); ?>
<br><br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Input Data Golongan</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <?php echo Form::open(['url' => 'Golongan', 'class' => 'form-horizontal form-label-left']); ?>

    <div id="pegawai">
      <div class="form-group<?php echo e($errors->has('Kode_golongan') ? ' has-error' : ''); ?>">
                            <label for="Kode_golongan" class="control-label col-md-3 col-sm-3 col-xs-12">Kode golongan</label>
                            <div class="col-md-6">
                                <input id="Kode_golongan" type="text" class="form-control col-md-7 col-xs-12" name="Kode_golongan" value="<?php echo e(old('Kode_golongan')); ?>"  autofocus>

                                <?php if($errors->has('Kode_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Kode_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
     <div class="form-group<?php echo e($errors->has('Nama_golongan') ? ' has-error' : ''); ?>">
                            <label for="Nama_golongan" class="control-label col-md-3 col-sm-3 col-xs-12">Nama golongan</label>

                            <div class="col-md-6">
                                <input id="Nama_golongan" type="Nama_golongan" class="form-control col-md-7 col-xs-12" name="Nama_golongan" value="<?php echo e(old('Nama_golongan')); ?>" >

                                <?php if($errors->has('Nama_golongan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Nama_golongan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

    <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="Besaran_uang" class="control-label col-md-3 col-sm-3 col-xs-12">Besaran uang</label>

                            <div class="col-md-6">
                                <input id="Besaran_uang" type="number" class="form-control col-md-7 col-xs-12" name="Besaran_uang" >

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