<?php include("fixed-part-head.php") ?>
<?php include("php/pages-your-task-get.php"); ?>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
<?php include("fixed-part-header.php") ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php include("fixed-part-left-sidebar.php") ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Görevleriniz</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Görevleriniz</li>
                    </ol>
                </div>
                <div>
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <style type="text/css">
                                    .icheck-list li{
                                        padding: 0 0 5px 0!important;
                                    }
                                </style>                                
                                <h4 class="card-title">Görev Listesi (Yapım Aşaması)</h4>
                                <h6 class="card-subtitle">Yapmanız gereken görevler</h6>
                                <!-- ============================================================== -->
                                <!-- To do list widgets -->
                                <!-- ============================================================== -->
                                <div class="to-do-widget m-t-20">
                                    <!-- .modal for add task -->
                                    <!-- /.modal -->
                                    <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
       
                                       <?php 
                                            $taskData = new pagesYourTaskGet;
                                            $taskData->getYourTaskData($data[0]["userId"]);
                                       ?>

                                    </ul>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
<?php include("fixed-part-right-sidebar.php") ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
<?php include("fixed-part-footer.php") ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
<?php include("fixed-part-script.php") ?>
</body>
    <script>
        $('input').on('ifChecked', function(event){            
            var taskid          = $(this).data("taskid");
            var userId          = $( ".profile-text[data-userid]" ).data("userid");
            var newTaskStatus   = $(this).data("label");
            //console.log(newTaskStatus);

            $.ajax({
                type: "POST",
                data: { 'taskid'        : taskid, 
                        'userId'        : userId,
                        'newTaskStatus' : newTaskStatus},
                dataType: "json",
                url: "php/task-status-update.php",
                success: function(result){                    
                    $("#resultMsg").show();
                    if(result.taskInsert == true){
                    }                    
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 


        });  
    </script>

</html>
