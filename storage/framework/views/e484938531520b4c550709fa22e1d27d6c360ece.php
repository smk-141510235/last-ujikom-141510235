<?php $__env->startSection('content'); ?>
 <br><br><br><br><br><br>
 <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <center><h2>Edit Data Tunjangan</h2></center>
                    <ul class="nav navbar-right panel_toolbox">
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
    <?php echo Form::open(['url' => 'Tunjangan', 'class' => 'form-horizontal form-label-left']); ?>

    <div id="pegawai">
                     <div class="form-group<?php echo e($errors->has('Kode_tunjangan') ? ' has-error' : ''); ?>">
                            <label for="Kode_tunjangan" class="col-md-4 control-label">Kode Tunjangan</label>

                            <div class="col-md-6">
                                <input id="Kode_tunjangan" type="text" class="form-control" name="Kode_tunjangan" value="<?php echo e(old('Kode_tunjangan')); ?>"  autofocus>

                                <?php if($errors->has('Kode_tunjangan')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Kode_tunjangan')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('golongan_id') ? ' has-error' : ''); ?>">
                            <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <select name="golongan_id" class="form-control">
                                    
                                    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <label for="jabatan_id" class="col-md-4 control-label">Nama Jabatan</label>

                            <div class="col-md-6">
                                <select name="jabatan_id" class="form-control">
                                    
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


                        <div class="form-group<?php echo e($errors->has('Status') ? ' has-error' : ''); ?>">
                            <label for="Status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <select name="Status" class="form-control">
                                   
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Duda">Duda</option>
                                    <option value="Janda">Janda</option>
                                </select>
                                <?php if($errors->has('Status')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Jumlah_anak') ? ' has-error' : ''); ?>">
                            <label for="Jumlah_anak" class="col-md-4 control-label">Jumlah Anak</label>

                            <div class="col-md-6">
                                <input id="Jumlah_anak" type="text" class="form-control" name="Jumlah_anak" value="<?php echo e(old('Jumlah_anak')); ?>"  autofocus>

                                <?php if($errors->has('Jumlah_anak')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('Jumlah_anak')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('Besaran_uang') ? ' has-error' : ''); ?>">
                            <label for="Besaran_uang" class="col-md-4 control-label">Besaran Uang </label>

                            <div class="col-md-6">
                                <input id="Besaran_uang" type="number" class="form-control" name="Besaran_uang" value="<?php echo e(old('Besaran_uang')); ?>"  autofocus>

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

</div>
</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>