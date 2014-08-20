<?php

/*
 * Author: Thang Tran
 * Email: thangtran29@gmail.com
 * Blog: http://thangtran29.wordpress.com/
 * Website: http://lorenweb.com/
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <h1>Settings</h1>
            </div>
            <?php if (isset($message["success"]) && !empty($message["success"])): ?>
                <?php foreach ($message["success"] as $item): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $item; ?>
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
                    <?php if (isset($message["danger"]) && !empty($message["danger"])): ?>
                <?php foreach ($message["danger"] as $item): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $item; ?>
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-6">
            <form class="form-horizontal" role="form" method="POST">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">abc</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="value1" name="admin_settings[value]" value="<?php echo (isset($data['value']))? $data['value']:''; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>