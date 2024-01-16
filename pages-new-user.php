<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>OMU VTYS Final Projesi</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                                <h4 class="card-title">Yeni Kayıt</h4>
                                <h6 class="card-subtitle">Anlamsız veri girişi yapan hesaplar silinecektir.</h6>
                                <form class="form-material m-t-40">
                                    
                                    <div class="form-group">
                                        <label>İsim</label>
                                        <input type="text" id="formNameInput" class="form-control form-control-line"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Soyisim</label>
                                        <input type="text" id="formSurnameInput" class="form-control form-control-line"> 
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input type="text" id="formPhoneInput" class="form-control form-control-line"> 
                                    </div>                                    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="formPasswordInput" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <small>BETA Sürüm</small></span> 
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LcZxkMpAAAAAMkCtS4TxxS2bp67aPCvjHf_ZUT_"></div>
                                    <br/>
                                    <button type="button" id="submitId" class="btn btn-success waves-effect waves-light m-r-10">Gönder</button>
                                    
                                </form>
                </div>
            </div>
            <br>
             <div class="login-box card" id="resultMsg" style="display: none;">
                <div class="card-body">
                </div>
            </div>            
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        $( "#submitId" ).on( "click", function() {
            var formNameInput       = $( "#formNameInput" ).val();
            var formSurnameInput    = $( "#formSurnameInput" ).val();
            var formPhoneInput      = $( "#formPhoneInput" ).val();
            var formPasswordInput   = $( "#formPasswordInput" ).val();

            /**/
            $.ajax({
                type: "POST",
                data: { 'formNameInput':        formNameInput, 
                        'formSurnameInput':     formSurnameInput,
                        'formPhoneInput':       formPhoneInput,
                        'formPasswordInput':    formPasswordInput,
                        'g-recaptcha-response': grecaptcha.getResponse()},
                dataType: "json",
                url: "php/pages-new-user-insert.php",
                success: function(result){
                    $("#resultMsg").show();

                    if(result.dataControl == true){
                        $("#resultMsg div").first("div").html(result.callBackMsg);
                       window.location.href = "index";
                    }
                    if(result.dataControl == false){
                        $("#resultMsg div").html(result.callBackMsg);
                    }   
                    
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 
            
            
        } );    
    </script>

</body>

</html>