function creerUtilisateur(){
    alert('lo');
    var user      = {};
    user.nom      = $('#inputNom').val();
    user.prenom   = $('#inputPrenom').val();
    user.email    = $('#inputEmail1').val();
    user.password = $('#inputPassword1').val();
    var roleId = 11;
    user.role_id = roleId;
    data = JSON.stringify(user);
    console.log(data);
    var url = "http://localhost:1230/api/app/ceerUtilisateur";
    sendData(data, url);
}


function sendData(data, url) {
  $.ajax({
    url: url,
    type: "POST",
    dataType: "json",
    crossDomain: true,
    data: data, 
    Accept : "application/json;charset=UTF-8"
    }).done(function (data) {
    jQuery('#result-title').html('<div class="alert alert-success" role="alert"><p><span class="icon-exclamation-sign" aria-hidden="true"></span>Resultat de l\'opération</p></div>');
    jQuery('#result-info').html(data.status);
    jQuery('#myModal').modal('show');
  }).fail(function (error) {
    
    jQuery('#result-title').html('<div class="alert alert-danger" role="alert"><p><span class="icon-exclamation-sign" aria-hidden="true"></span>Resultat de l\'opération</p></div>');
    jQuery('#result-info').html('<br/>Echec de l\'operation en cour');
    jQuery('#myModal').modal('show');

    if (error.status == 404) {
      window.location = "inscription.php?p=404";                    
    }
  });
}


