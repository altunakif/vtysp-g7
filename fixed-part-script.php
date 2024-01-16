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
    <!-- icheck -->
    <script src="../assets/plugins/icheck/icheck.min.js"></script>
    <script src="../assets/plugins/icheck/icheck.init.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        $( "#logoutLink" ).on( "click", function() {
            //alert("logoutLink");
            /**/
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "php/pages-logout.php",
                success: function(result){
                    console.log(result.logout);
                    window.location.href = "pages-login";
                },
                error: function(request, status, error) {
                    console.log(error);
                }            
            }); 
           
            
        } );    
        console.log("Güvenlik açığı varsa 0537 500 20 90 nolu telefona bildirmenizi rica ederiz.");
    </script>    