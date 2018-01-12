jQuery(document).ready(function($){
      $.ajax({
	   url:'connexion.php',
	   success: function(data) {
	      var html_text = data;
	      $('#commissions').append(html_text);
	  	}
      });
});