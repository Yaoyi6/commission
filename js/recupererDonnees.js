jQuery(document).ready(function($){

      $.ajax({
        	   url:'../php/recupererDonnees.php',

        	   success: function(reponse) {
            	      var html_text = reponse;
                        $('#commission').append(html_text);
        	  	}
      });
});
