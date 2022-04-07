/*  Script permettant la création de la carte en récupérant les informations des conteneurs (format JSON)   */

/*var data = [{"id":"1","lat":"48.123961","lon":"-1.244197","info":"1"}
  ,{"id":"2","lat":"48.451239","lon":"-2.486562","info":"0"}
  ,{"lat":"48.117266","lon":"-1.6777926"}
  ,{"lat": "48.117266","lon":"-1.678"}
 ];*/

function carte(data) {

  //Création de la carte centrée sur le premier conteneur
  var map = new L.Map('map', {
    center: [48.0833, -1.6833], //Centrée sur Rennes
    zoom: 5
  });
  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  //Création d'une liste contenant chaque événement et son nombre de conteneurs
  var nbcontevent = new Array(), event = "", nbcont = 0;
  for (i = 0; i < data.length; i++) {
    if (event == data[i]["nom_event"]) {
      nbcont++;
    }
    else {
      nbcontevent.push({ nomevent: event, nbconteneurs: nbcont });
      event = data[i]["nom_event"];
      nbcont = 1;
    }
  }

  for (i = 0; i < data.length; i++) {

    // Récupération du nombre de conteneurs de l'événement d'indice i
    for (j = 0; j < nbcontevent.length; j++) {
      if (data[i]["nom_event"] == nbcontevent[j].nomevent) {
        nbconti = nbcontevent[j].nbconteneurs;
      }
    }

    //Analyse de l'état des conteneurs avec un ordre de priorité : alerte > pas d'informations > pas d'alerte
    var alert = 0;

    //Traitement 1 conteneur
    if (nbconti == 1) {
      if (parseInt(data[i]["info"]) == 1) {
        alert = 1;
      }
      else if (data[i]["info"] == null) {
        alert = -1;
      }
    }

    //Traitement plusieurs conteneurs
    else {
      for (k = i; k < i + nbconti; k++) {
        if (parseInt(data[k]["info"]) == 1) {
          alert = 1;
          break;
        }
        else if (data[k]["info"] == null) {
          alert = -1;
        }
      }
    }

    //Ajout de chaque conteneur en fonction de son statut : 0 pas d'alerte, 1 alerte, pas d'informations sinon
    var position = new L.LatLng(parseFloat(data[i]["lat"]), parseFloat(data[i]["lon"]));

    //Pas d'alerte
    if (alert == 0) {
      var icon = L.divIcon({
        className: 'map-marker',
        iconSize: null,
        html: '<div class="icon" style="background: green">' + nbconti + '</div><div class="arrow" />'
      });
      L.marker(position, { icon: icon }).addTo(map).bindPopup(data[i]["nom_event"], { 'className': 'tvb' });
    }

    //Alerte
    else if (alert == 1) {
      var icon = L.divIcon({
        className: 'map-marker',
        iconSize: null,
        html: '<div class="icon" style="background: red">' + nbconti + '</div><div class="arrow" />'
      });
      L.marker(position, { icon: icon }).addTo(map).bindPopup(data[i]["nom_event"], { 'className': 'alerte' });
    }

    //Pas d'informations
    else if (alert == -1) {
      var icon = L.divIcon({
        className: 'map-marker',
        iconSize: null,
        html: '<div class="icon" style="background: purple">' + 'N/A' + '</div><div class="arrow" />'
      });
      //L.marker(position).addTo(map); //reference marker
      L.marker(position, { icon: icon }).addTo(map).bindPopup(data[i]["nom_event"], { 'className': 'na' });
    }

    //Avance jusqu'au prochain événement
    i = i + nbconti - 1;

  };

}