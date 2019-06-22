function loadJSON(callback) {
   var xobj = new XMLHttpRequest();
   xobj.overrideMimeType("application/json");
   xobj.open('GET', '/assets/data/messages.json', true);
   xobj.onreadystatechange = function () {
     if (xobj.readyState == 4 && xobj.status == "200") {
       // Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
       callback(xobj.responseText);
     }
   };
   xobj.send(null);
}

loadJSON(function(response) {
  // Parse JSON string into object
  var data = JSON.parse(response);

  var ractive = Ractive({
    target: '#target',
    template: '#template',
    data: data
  });

  var buttons = document.querySelectorAll('button');

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
      var audio = new Audio('/assets/sounds/'+this.dataset.file+'.m4a');
      audio.play();
    });
  }
});

