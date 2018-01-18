
$(document).ready(function(){

        $("#login").click(function(){
              var email = $("#email").val();
              var password = $("#password").val();
              // verification des champs vides.
              if( email =='' || password ==''){
                  $('input[type="text"],input[type="email"]').css("border","2px solid red");
                  $('input[type="text"],input[type="password"]').css("box-shadow","0 0 3px red");
                  alert("Veuillez remplir tous les champs !");

              }else {
                  $.post("php/login.php",{ 'email1': email, 'password1':password},

                                                          function(data) {
                                                                  if(data=='format email incorrect !') {
                                                                      $('input[type="text"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                                                                      $('input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                                                                      alert(data);

                                                                    } else if(data=="Connexion en cours"){
                                                                        window.location.href='onglets/accueil.html';
                                                                        $("formLogin")[0].reset();
                                                                        $('input[type="text"],input[type="password"]').css({"border":"2px solid #00F5FF","box-shadow":"0 0 5px #00F5FF"});
                                                                        alert(data);
                                                                        window.location.href='onglets/accueil.html';
                                                                        //window.location.href = "onglets/accueil.html";


                                                                      }else if(data=='Email ou mot de passe incorrect!'){
                                                                          $('input[type="text"],input[type="password"]').css({"border":"2px solid red","box-shadow":"0 0 3px red"});
                                                                          alert(data);

                                                                      } else{
                                                                            alert(data);
                                                                      }
                                                          });

              }
        });
});
