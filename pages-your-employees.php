<?php include("fixed-part-head.php") ?>
<?php include("php/pages-your-employees-list-get.php") ?>

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
                    <h3 class="text-themecolor">Çalışan</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Çalışan</li>
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
                            <div class="card-body bg-inverse" style="background: url(../assets/images/background/user-info.jpg) / cover;">
                                <h4 class="text-white card-title">Çalışanlarınız</h4>
                                <h6 class="card-subtitle text-white m-0 op-5">Çalışan Listeniz</h6>
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">
                                    <h2 class="add-ct-btn">
                                        <button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark" data-toggle="modal" data-target="#responsive-modal">+</button>
                                    </h2>
                                    <div class="">
                                       
                                        <div class="table-responsive">
                                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                           
                                                        </div><table id="demo-foo-addrow" class="table m-t-30 table-hover no-wrap contact-list footable-loaded footable" data-page-size="10">
                                                <thead>
                                                    <tr>
                                                        <th class="footable-sortable">No<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">İsim Soyisim<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Telefon<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Başarılı Görev <span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Devam Eden Görev<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Başarısız Görev<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Toplam Görev<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Düzenle<span class="footable-sort-indicator"></span></th>
                                                        <th class="footable-sortable">Sil<span class="footable-sort-indicator"></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $pagesEmployeesListGet->userId = $data[0]["userId"];
                                                        echo $pagesEmployeesListGet->getAllUser();
                                                    ?> 
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                        <!-- .left-aside-column-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- Çalışan Ekle Modal -->
                <!-- ============================================================== -->

                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Çalışan Ekle</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="control-label">İsim Soyisim</label>
                                        <input type="text" class="form-control" id="newEmployeeNS">
                                    </div>
                                <div class="form-group">
                                        <label for="recipient-name" class="control-label">Telefon</label>
                                        <input type="text" class="form-control" id="newEmployeePhone">
                                    </div>                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Kapat</button>
                                <button type="button" id="employeeBtn" class="btn btn-danger waves-effect waves-light">Ekle</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Çalışan Ekle Modal -->
                <!-- ============================================================== -->                





                <!-- sample modal content -->
                    <div id="responsive-modal2" class="modal fade projectModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="projectName">Çalışan Düzenle</h4>
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
                                               <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">İsim Soyisim</label>
                                                        <input type="text" class="form-control" id="editEmployeeNS">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Telefon</label>
                                                        <input type="text" class="form-control" id="editEmployeePhone">
                                                    </div>                                    
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- weather report copy and paste this code-->
                                    <!-- ============================================================== -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" id="updateEmployeeBtn" data-employeeId>Güncelle</button>
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Kapat</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.modal -->   






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

    $('#employeeBtn').click(function(event) {
            var pid              = $(".profile-text").data("userid");
            var newEmployeeNS    = $( "#newEmployeeNS" ).val();
            var newEmployeePhone = $( "#newEmployeePhone" ).val();

            /**/
            $.ajax({
                type: "POST",
                data: { 'pid'               : pid, 
                        'newEmployeeNS'     : newEmployeeNS, 
                        'newEmployeePhone'  : newEmployeePhone},
                dataType: "json",
                url: "php/pages-your-employees-newemployees.php",
                success: function(result){
                    if(result.success == true){
                        window.location.reload();
                    }
                    if(result.success == false){
                    }                       
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 
           
            
    }); 

    $(".deleteemployees").on("click", function(){

        var userid          = $( ".profile-text" ).data("userid");
        var pid             = $(this).data("eid");
        var functionName    = "deleteEmployees";


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
                if(result.deletionSuccess == true){
                   //$("#resultMsg div").first("div").html(result.callBackMsg);
                   window.location.href = "pages-your-employees";
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

    $(".editemployees").on("click", function(){
        var userid          = $( ".profile-text" ).data("userid");
        var pid             = $(this).data("eeid");

        /**/
        $.ajax({
            type: "POST",
            data: { 'userid'        : userid, 
                    'pid'           : pid
                  },
            dataType: "json",
            url: "php/pages-your-employees-list-edit-get.php",
            success: function(result){
                if(result.getEditDataSuccess == true){
                   $("#editEmployeeNS").val(result.callBackNameSurname);
                   $("#editEmployeePhone").val(result.callBackPhone);
                   $("#updateEmployeeBtn").attr("data-employeeId", result.callBackemployeeId);
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

    $("#updateEmployeeBtn").on("click", function(){



            var userid              = $(".profile-text").data("userid");
            var pid                 = $("#updateEmployeeBtn").data("employeeid");
            var editEmployeeNS      = $( "#editEmployeeNS" ).val();
            var editEmployeePhone   = $( "#editEmployeePhone" ).val();
            console.log(userid);
            console.log(pid);
            console.log(editEmployeeNS);
            console.log(editEmployeePhone);
            /* */
            $.ajax({
                type: "POST",
                data: { 'pid'                : pid,
                        'userid'             : userid, 
                        'editEmployeeNS'     : editEmployeeNS, 
                        'editEmployeePhone'  : editEmployeePhone},
                dataType: "json",
                url: "php/pages-your-employees-updateemployees.php",
                success: function(result){
                    if(result.success == true){
                        window.location.reload();
                    }
                    if(result.success == false){
                    }                       
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            });
       


    }); 

</script>



</html>
