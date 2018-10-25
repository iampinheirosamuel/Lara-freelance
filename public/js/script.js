(function(){
    //Sign up transitions
      $(document).ready(function(){
          //make an ajax call
          const baseUrl = 'http://localhost:8000';
          $.ajax({
            type: "get",
            url: `${baseUrl}/api/skills`,
            success: function(data){
              autocompleteInit(data.data);              
            }
          });
      });
      
 function autocompleteInit(data) {
   // constructs the suggestion engine
   var services = new Bloodhound({
     datumTokenizer: Bloodhound.tokenizers.whitespace,
     queryTokenizer: Bloodhound.tokenizers.whitespace,
     // `states` is an array of state names defined in "The Basics"
     local: data
   });

   $('#bloodhound .typeahead').typeahead({
     hint: true,
     highlight: true,
     minLength: 1
   },
     {
       name: 'services',
       source: services
     });

 }
 
})();


/*jslint  browser: true, white: true, plusplus: true */
/*global $, countries */

