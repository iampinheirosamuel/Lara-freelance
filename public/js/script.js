(function(){
    //Sign up transitions
      $(document).ready(function(){
          //make an ajax call
          const baseUrl = 'http://localhost:8000';
          $.ajax({
            type: "get",
            url: `${baseUrl}/api/skills`,
            success: function(data){
              const servicesArray = data;
              
              //autocomplete
              const options = {
                url: servicesArray.data
              };

              $('#autocomplete').easyAutocomplete(options);
            }
          })
      });

 



 

  

 
})();


/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

