jQuery(document).ready(function($){

      $.ajax({
        	   url:'../php/connexion.php',
        	   success: function(reponse) {
            	      var html_text = reponse;
                        $('#commissions').append(html_text);


        	  	}

      });
});
