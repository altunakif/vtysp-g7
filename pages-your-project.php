<?php include("fixed-part-head.php") ?>
<?php include("php/pages-your-project-get.php") ?>

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
                    <h3 class="text-themecolor">Animation</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Animation</li>
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








                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <td colspan="2">
                                                    <a class="waves-effect waves-dark" href="pages-add-project" aria-expanded="false">
                                                        <button type="button" class="btn btn-info btn-rounded" >Yeni Proje</button>
                                                    </a>

                                                </td>
                                            </tr>                                            
                                            <tr>
                                                <th>ID #</th>
                                                <th>Proje Adı</th>                                               
                                                <th>Açıklama</th>
                                                <th>Durum</th>
                                                <th>Tarih</th>
                                                <th>Sil</th>
                                                <th>Tamamlandı</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $yourProjectGet = new pagesYourProjectGet;
                                                $yourProjectGet->userId = $data[0]["userId"];
                                                echo $yourProjectGet->getAllProject(); 
                                            ?>
    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <a class="waves-effect waves-dark" href="pages-add-project" aria-expanded="false">
                                                        <button type="button" class="btn btn-info btn-rounded" >Yeni Proje</button>
                                                    </a>

                                                </td>
                                                <td colspan="6">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <!-- sample modal content -->
                                    <div id="responsive-modal" class="modal fade projectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="projectName">Proje Detayı Yapım Aşaması</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- ============================================================== -->
                                                    <!-- Project of the month copy and paste this code-->
                                                    <!-- ============================================================== -->
                                                    <!-- Card -->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="table-responsive m-t-40">
                                                                <table class="table stylish-table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="2">Görevli</th>
                                                                            <th>Görev</th>
                                                                            <th>Görevi Veren</th>
                                                                            <th>Ba. Tarihi</th>
                                                                            <th>Bi. Tarihi</th>
                                                                            <th>Durum</th>
                                                                            <th>Time Line</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="projectDetailTr"></tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ============================================================== -->
                                                    <!-- weather report copy and paste this code-->
                                                    <!-- ============================================================== -->
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Kapat</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.modal -->   

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
    $(".deleteProject").on("click", function(){

        var userid          = $( ".profile-text" ).data("userid");
        var pid             = $(this).data("pid");
        var functionName    = "deleteProject";

        /**/
        $.ajax({
            type: "POST",
            data: { 'userid'        : userid, 
                    'pid'           : pid,
                    'functionName'  : functionName
                  },
            dataType: "json",
            url: "php/general-deletion-table-row.php",
            success: function(result){

                $("#resultMsg").show();
                if(result.deletionSuccess == true){
                   //$("#resultMsg div").first("div").html(result.callBackMsg);
                   window.location.href = "pages-your-project";
                }
                if(result.dataControl == false){
                    $("#resultMsg div").html(result.callBackMsg);
                }   
                
            },
            error: function(request, status, error) {
                console.log(error);
            }            
        });
        
    });
</script>
</html>
