var app = {
  init: function() {

    // On cible le champs de recherche
    $('#searchEvents').on('keyup', app.search);
    // $('.dropdown-menu').show();
    // $('.dropdown-menu').hide();
  },
  search: function() {

    // On récupère le contenu du champs de recherche
    var value = $('#searchEvents').val();

    // On interroge le serveur pour récupérer la
    // liste des évènements qui correspondent
    $.ajax('/oclock/temp/mealoclock/events/search', {
      method: 'POST',
      data: { query: value },
      dataType: 'json', // Le format que le serveur nous envoie
    })
    // On reçoit la réponse et tout c'est bien passé
    .done(function(response) {

      // On vide la liste de résultats
      $('.dropdown-menu').empty();

      // On a bien reçu la liste de résultat
      // On va afficher cette liste
      response.forEach(app.addEvent);

      // On affiche la dropdown
      $('.dropdown-menu').show();
    })
    // Il y a eu une erreur lors de la requête
    .fail(function(response) {
      
      console.log('Erreur :', response);
    });
  },
  // Ajoute un évènement dans la dropdown
  addEvent: function( ev ) {

    // On crée l'élément HTML
    // => <a class="dropdown-item" href="#">Action</a>
    var a = $('<a>')
      .addClass('dropdown-item')
      .attr('href', '/oclock/temp/mealoclock/events/' + ev.id)
      .text(ev.title);

    // On ajoute l'évènement à la liste
    $('.dropdown-menu').append( a );
  }
};

// On démarre notre application JS
$(app.init);
