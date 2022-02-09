<?= $this->extend('layouts/backend/main_layout/main.php') ?>
<?= $this->section('title')?>
All Admin
<?= $this->endsection(); ?>
<?= $this->section('page-name');?>
All Admin
<?= $this->endsection();?>

<?= $this->section('content');?>
<div class="page-titles">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/admin/dashboard') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Manage User</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Admin</a></li>
            </ol>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-12">
            <div class="float-right">
                <a href="<?= base_url('/admin/create')?>">
                    <button type="button" class="btn btn-rounded btn-primary"><span
                        class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                        </span>Add New Admin
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
                <h4 class="card-title">All Admin</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="display">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>User Type</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($admins): ?>
                                <?php foreach($admins as $row): ?>
                                    <tr>
                                        <td><?= $row['username']; ?></td>
                                        <td>
                                            <?php if($row['user_type'] == 2): ?>
                                                <span class="badge badge-info">Admin</span>
                                            <?php endif?>
                                        </td>
                                        <td><?= $row['email']; ?></td>
                                        <td><?= $row['mobile_no']; ?></td>
                                        <td><?= $row['gender']; ?></td>
                                        <td>
                                            <?php if($row['status'] == 1): ?>
                                                <span class="badge badge-success">Active</span>
                                            <?php endif?>
                                            <?php if($row['status'] == 0): ?>
                                                <span class="badge badge-primary">InActive</span>
                                            <?php endif?>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="<?php echo base_url('/admin/edit/'.$row['id']);?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="<?php echo base_url('/admin/delete/'.$row['id']);?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Username</th>
                                <th>User Type</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endsection();?>