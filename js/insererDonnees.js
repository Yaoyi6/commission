/*jQuery(document).ready(function($){

	$('#submit').click(function(){

		var date_fin = $('#date_fin').val();
		var heure_fin = $('#heure_fin').val();
		var description = $('#description').val();
		var bulletin_secret = $('#bulletin_secret').val();
		var commission = $('#commission').val();

		alert(date_fin + "-" + heure_fin + "-" + description + "-" + bulletin_secret + "-" + commission);

    var data {
      "date_fin" = date_fin,
  		"heure_fin" = heure_fin,
  		"description" = description,
  		"bulletin_secret" = bulletin_secret,
  		"commission" = commission
    };
    //var formData = new FormData($("#formEtape1")[0]);

		$.ajax({
    			type:'POST',
          //data: $("#formEtape1").serialize();
          //data: formData,
          data : data;
    			//data:{date:date_fin, heure:heure_fin, desc:description, bul_secr:bulletin_secret, com:commission},
    			url:"../php/insererDonnees.php",
          /*Necessaire pour envoyer vers Ajax*/
          /*cache: false,
          contentType: false,
          processData: false,
          //mientras enviamos el archivo
          beforeSend: function(){
              console.log("Loading, Veuillez patienter svp...");
          },
    			success: function(result){
    				    console.log(data);
			    }
		});
	});
});*/

jQuery(document).ready(function($){

			$('#btn-reunion').click(function(){

		    var formData = new FormData($("#formEtape1")[0]);
		    console.log(formData);
				$.ajax({
		    			type:'POST',
		          data : formData,
		    			url:"../php/insererDonnees.php",
		          cache: false,
		          contentType: false,
		          processData: false,
		          beforeSend: function(){
		              console.log("Loading, Veuillez patienter svp...");
		          },
		    			success: function(data){
		    				    console.log(data);
					    },
		          error: function(data){
		                console.log("error: " + data);
		          }
				});
				window.location.href="../onglets/creerReunion_Etape2.html";
			});
});
