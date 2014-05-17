var ballista_url = 'http://havocstudios.com/catapult/fire-ballista.php';
var catapult_url = 'http://havocstudios.com/catapult/fire-catapult.php';

simply.on('singleClick', function(e) {
  if (e.button == 'up') {
    ajax({ url: ballista_url }, function(data) {
      simply.subtitle("Boom. Ballista Fired.");
    });
  } else if (e.button == 'select') {
    ajax({ url: catapult_url }, function(data) {
      simply.subtitle("Boom. Catapult Fired.");
    });
  } else if (e.button == 'down') {
    simply.subtitle("down button")    
  } else {
    simply.subtitle(e.button);    
  }
});

simply.setText({
  title: 'Go Medieval!',
  body: '',
}, true);
