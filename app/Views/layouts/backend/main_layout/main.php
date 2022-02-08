<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= $this->renderSection('title'); ?></title>

     <?php include APPPATH.'Views/layouts/backend/main_layout/common/css.php'; ?>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php include APPPATH.'Views/layouts/backend/main_layout/includes/header_logo.php'; ?>

		<?php include APPPATH.'Views/layouts/backend/main_layout/includes/chatbox.php'; ?>

		<?php include APPPATH.'Views/layouts/backend/main_layout/includes/header_top_nav.php'; ?>

        <?php include APPPATH.'Views/layouts/backend/main_layout/includes/left_sidebar.php'; ?>

        <!--**********************************
        Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Add Order -->
                <?= $this->renderSection('content') ?>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <span class="text-primary"><strong>MD Tauhedul Islam</strong></span> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

   <?php include APPPATH.'Views/layouts/backend/main_layout/common/js.php'; ?>

</body>

</html>
