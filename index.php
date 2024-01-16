<?php include("fixed-part-head.php") ?>
<?php include("php/pages-add-project-get.php") ?>

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
                    <h3 class="text-themecolor">Proje</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Proje Listesi</li>
                    </ol>
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
                                <h4 class="card-title">Projeler</h4>
                                <h6 class="card-subtitle">Kullanıcılar tarafından oluşturulan projeler</h6>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-inverse card-info">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white" id="newProjectCount">0</h1>
                                                <h6 class="text-white">Yeni Proje</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-success card-inverse">
                                            <div class="box text-center">
                                                <h1 class="font-light text-white"><?php echo $projectData->allTaskCount(); ?></h1>
                                                <h6 class="text-white">Aktif Görev</h6>                                              
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->

                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-inverse card-warning">
                                            <div class="row">
                                                <div class="col-6 box text-center">
                                                    <h1 class="font-light text-white"><?php echo $projectData->allUserCount(); ?></h1>
                                                    <h6 class="text-white">Kullanıcı</h6>
                                                </div>
                                                <div class="col-6 box text-center">
                                                    <div class="font-light text-white">
                                                        <h1 class="font-light text-white"><?php echo $projectData->allEmployeeCount(); ?></h1>
                                                        <h6 class="text-white">Çalışan</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-inverse card-warning">
                                            <div class="box text-center">

                                            <style type="text/css">
                                                .slyt-profile-img{
                                                    width: 70px !important;                                                    
                                                    padding: 0 !important;   
                                                                                               
                                                }
                                                .slyt-profile-img img{
                                                    padding: 0 !important; 
                                                }
                                                .myfs{
                                                    font-size: 1.8em !important;
                                                }
                                            </style>

                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Carousel items -->
                                                <div class="carousel-inner">

                                                    <div class="carousel-item flex-column carousel-item-next carousel-item-left">
                                                        <i class="fa fa-bullhorn fa-2x text-white myfs"></i><br>
                                                        <p class="text-white">Anlamsız veri girişi yapmayınız.</p>                                                        
                                                    </div>

                                                    <div class="carousel-item flex-column">
                                                        <div class="user-profile">
                                                            <div class="row">
                                                                <div class="col-md-3 "><div class="profile-img slyt-profile-img"> <img src="../assets/images/users/dr-ismail-iseri.jpg" alt="user"> </div>  </div>
                                                                <div class="col-md-9 text-center align-self-center text-white">Asst.Prof.Dr. İsmail İŞERİ</div>
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item flex-column">
                                                        <div class="user-profile">
                                                            <div class="row">
                                                                <div class="col-md-3 "><div class="profile-img slyt-profile-img"> <img src="../assets/images/users/akif-profil.png" alt="user"> </div>  </div>
                                                                <div class="col-md-9 text-center align-self-center text-white">Grup Üyesi Akif Altun</div>
                                                            </div>                                        
                                                        </div>
                                                    </div>

                                                    <div class="carousel-item flex-column">
                                                        <div class="user-profile">
                                                            <div class="row">
                                                                <div class="col-md-3 "><div class="profile-img slyt-profile-img"> <img src="../assets/images/users/cansu-profil.jpg" alt="user"> </div>  </div>
                                                                <div class="col-md-9 text-center align-self-center text-white">Grup Üyesi Cansu Bahadır</div>
                                                            </div>                                        
                                                        </div>
                                                    </div>     
                                                    
                                                    <div class="carousel-item flex-column active carousel-item-left">
                                                        <div class="user-profile">
                                                            <div class="row">
                                                                <div class="col-md-3 "><div class="profile-img slyt-profile-img"> <img src="../assets/images/users/cagri-profil.jpg" alt="user"> </div>  </div>
                                                                <div class="col-md-9 text-center align-self-center text-white">Grup Üyesi Çağrı Esmer</div>
                                                            </div>                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->                                    

                                </div>
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
                                                <th>Projeyi Oluşturan</th>                                                
                                                <th>Açıklama</th>
                                                <th>Durum</th>
                                                <th>Süre</th>
                                                <th>Ba. Tarihi</th>
                                                <th>Bi. Tarihi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php echo $projectData->getAllProject(); ?>
    
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
                                        <div class="modal-dialog modal-lg" style="max-width: 80%">
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
                                                                            <th>Durum</th>
                                                                            <th>Süre</th>
                                                                            <th>Ba. Tarihi</th>
                                                                            <th>Bi. Tarihi</th>                                                                            
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
    $( window ).on( "load", function() {
        $("#newProjectCount").html($('table .label-warning').length);
    } ); 

    $('tr[data-target=".projectModal"]').click(function(event) {
        //alert( $(this).data("pid") );
            /**/
            var pid = $(this).data("pid");
            $.ajax({
                type: "POST",
                data: { 'pid': pid},
                dataType: "json",
                url: "php/pages-add-project-get-detail.php",
                success: function(result){

                    if(result.projectDetail == true){
                        $("#projectName").html(result.projectName);
                        $("#projectDetailTr").html(result.callBackMsg);

                    }
                    if(result.projectDetail == false){
                    }   
                    
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 

    });   
</script>
</html>
