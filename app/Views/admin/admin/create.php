<?= $this->extend('layouts/backend/main_layout/main.php') ?>
<?= $this->section('title')?>
Add New Admin
<?= $this->endsection(); ?>
<?= $this->section('page-name');?>
Add New Admin
<?= $this->endsection();?>

<?= $this->section('content');?>
<div class="page-titles">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Manage User</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add New Admin</a></li>
            </ol>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-12">
            <div class="float-right">
                <a href="<?= base_url('/admin/list') ?>">
                    <button type="button" class="btn btn-rounded btn-primary"><span
                        class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                        </span>Admin List
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Admin User</h4>
            </div>
            <form method="POST" action="<?= base_url('/admin/store') ?>">
                <div class="card-body">
                    <?php if(isset($validation)):?>
                        <div class="alert alert-warning">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif;?>
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-xs-6 col-md-6 col-lg-6 col-sm-6 col-12">
                                <h5><strong>User Name <span class="text-danger">*</span></strong></h5>
                                <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username') ?>" placeholder="Enter unique username 'Islam0**'" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-6 col-md-6 col-lg-6 col-sm-6 col-12">
                                <h5><strong>Email <span class="text-danger">*</span></strong></h5>
                                <input type="email" id="email" name="email" class="form-control" value="<?= set_value('email') ?>" placeholder="Enter valid email" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-6 col-md-6 col-lg-6 col-sm-6 col-12">
                                <h5><strong>Password <span class="text-danger">*</span></strong></h5>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter minimum 8 character password" autocomplete="off">
                            </div>
                            <div class="form-group col-xs-6 col-md-6 col-lg-6 col-sm-6 col-12">
                                <h5><strong>Confirm Password <span class="text-danger">*</span></strong></h5>
                                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" value="" placeholder="Enter confirm password" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-xs-6 col-md-6 col-lg-6 col-sm-6 col-12">
                                <h5><strong>Mobile Number <span class="text-danger">*</span></strong></h5>
                                <input type="number" id="mobile_no" name="mobile_no" class="form-control" value="<?= set_value('mobile_no') ?>" placeholder="Enter valid mobile number" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <a type="submit" onclick="reset()" class="btn btn-danger">Reset</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endsection();?>