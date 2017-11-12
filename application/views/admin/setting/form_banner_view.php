<div class="box-body pt15">
    <form name="fbanner_aeFrm" id="fbanner_aeFrm" method="post" action="" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">				
            <label class="col-sm-2 control-label require">Banner Image</label>
            <div class="col-sm-5">
                <?= form_upload('img', NULL, (empty($banner[0]->img)) ? ['class' => 'view_photo mt10', 'accept' => 'image/.jpe,.jpg,.jpeg,.png', 'required' => '', 'label-name' => 'Banner'] : ['class' => 'view_photo mt10', 'accept' => 'image/.jpe,.jpg,.jpeg,.png']) ?>
            </div>
        </div>
        <div class="box-footer">
            <div class="col-sm-2">
                <button class="btn btn-default btn-sm btn-flat" type="reset">Cancel</button>
            </div>
            <div class="col-sm-2 col-sm-offset-5 text-right">
                <button name="submit" value="<?= (!empty($banner[0]->title)) ? 'update' : 'add' ?>" class="btn bg-green btn-sm btn-flat" type="submit">Submit Banner</button>
            </div>
        </div>
    </form>
</div>