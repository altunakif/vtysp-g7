<?php include("fixed-part-head.php") ?>

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
                    <h3 class="text-themecolor">Proje Ekle</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Proje Ekle</li>
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

                                <div class="form-group row">
                                  <label for="example-text-input" class="col-md-2 col-form-label">Proje Adı</label>
                                  <div class="col-md-10">
                                    <input class="form-control" id="projectName" type="text" id="example-text-input">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-text-input" class="col-md-2 col-form-label">Proje Açıklaması</label>
                                  <div class="col-md-10">
                                    <textarea  class="form-control" id="projectDescription" rows="4" cols="50"></textarea>
                                  </div>
                                </div>                                

                                <div class="form-group row">
                                  <label for="example-date-input" class="col-md-2 col-form-label">Başlangıç Tarihi</label>
                                  <div class="col-md-10">
                                    <input class="form-control" id="projectStartDate" type="date" id="example-date-input">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-date-input" class="col-md-2 col-form-label">Bitiş Tarihi</label>
                                  <div class="col-md-10">
                                    <input class="form-control" id="projectEndDate" type="date" id="example-date-input">
                                  </div>
                                </div>
                                <button type="button" id="addProjectBtn" class="btn btn-success waves-effect waves-light m-r-10">Proje Ekle</button>                                

                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card" id="resultMsg" style="display: none;">
                            <div class="card-body">
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
        $( "#addProjectBtn" ).on( "click", function() {
            
            var creatingProject     = $(".profile-text[data-userid]").data("userid");
            var projectName         = $( "#projectName" ).val();
            var projectDescription  = $( "#projectDescription" ).val();
            var projectStartDate    = $( "#projectStartDate" ).val();
            var projectEndDate      = $( "#projectEndDate" ).val();

            console.log(creatingProject);
            console.log(projectName);
            console.log(projectDescription);
            console.log(projectStartDate);
            console.log(projectEndDate);        

            /**/
            $.ajax({
                type: "POST",
                data: { 'creatingProject':    creatingProject, 
                        'projectName':        projectName, 
                        'projectDescription': projectDescription,
                        'projectStartDate':   projectStartDate,
                        'projectEndDate':     projectEndDate},
                dataType: "json",
                url: "php/pages-add-project-insert.php",
                success: function(result){


                    
                    $("#resultMsg").show();
                    if(result.projectInsert == true){
                        $("#resultMsg div").first("div").html(result.callBackMsg);
                    }
                    if(result.projectInsert == false){
                        $("#resultMsg div").html(result.callBackMsg);
                    }   
                    
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 
           
            
        } );    
    </script>

</html>
