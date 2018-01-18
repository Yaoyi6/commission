//url du site, endroit à changer unique
var url_serveur = "localhost/CMS/";
var url_Dclient = url_seveur + "client/";
var url_Dserveur = url_serveur + "serveur";
var url_index = url_Dclient + "index.html/";
var url_Onglet = url_serveur + "onglets/";
var url_Accueil = url_Onglet + "accueil.html/";

function loadPage() {
      var ref=cordova.inAppBrowser.open('aPropos.html', '_blank', 'location=yes');
      var myCallback = function(event) {
            alert(event.url);
      }

      ref.addEventListener('loadstart', myCallback);
      ref.removeEventListener('loadstart', myCallback);
}
