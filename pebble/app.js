simply.on('singleClick', function(e) {
  var the_url = 'http://havocstudios.com/catapult/fire.php';
  ajax({ url: the_url, type: 'json' }, function(data) {
    simply.subtitle("Boom. Foe slain.");
  });
});


simply.setText({
  title: 'Balista',
  body: '',
}, true);
