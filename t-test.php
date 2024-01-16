    <?php 
        echo "test";
        echo $_SERVER["SERVER_NAME"];
    ?>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script>
        $( "#submitId" ).on( "click", function() { } ); 
            var formNameInput       = "hack4";
            var formSurnameInput    = "hack4";
            var formPhoneInput      = "hack4";
            var formPasswordInput   = "hack4";

            console.log(formNameInput);
            /**/
            $.ajax({
                type: "POST",
                data: { 'formNameInput':        formNameInput, 
                        'formSurnameInput':     formSurnameInput,
                        'formPhoneInput':       formPhoneInput,
                        'formPasswordInput':    formPasswordInput},
                dataType: "json",
                url: "https://omupys.com/php/pages-new-user-insert.php",
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

            
          
    </script>