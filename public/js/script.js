    (function(){

      //Thumbnail Slider
    

 
 //Sign up transitions

               //default state of the sign up page -- hide it
               $("#signup_anchor").hide();
                
               //show sign up
               $("#show_signup").click(function(){
                 
                  $("#login_anchor").hide();

                  $("#signup_anchor").show();
                
               });

               //show login
               $("#show_login").click(function(){
                 
                  $("#signup_anchor").hide();

                  $("#login_anchor").show();
                
               });

  })();