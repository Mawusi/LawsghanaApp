$( document ).ready(function() {

    $("#but_login").click(function(){
        var uname = $("#txt_uname").val().trim();
        var password = $("#txt_pwd").val().trim();

        // Check user
        if(uname != '' && password != ''){
            if(uname == 'makitweb' && password == '1234'){
                $("#response").hide();
                $("#response").text("Correct");
            }else{
                $("#response").show();
                $("#response").text("Incorrect username and password");

                // shake effect
                $( "#login" ).effect( "shake" );
            }
        }
    });
  
});