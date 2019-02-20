<!DOCTYPE html>
<html>
<head>
    <title>aaaaaaaa</title>
    <meta charset="utf-8" />
    <script type='text/javascript'>
    var map, infobox;

    function GetMap() {
     /*   var link="active_users1.php";
        var req = new XMLHttpRequest();
    req.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      var locations=JSON.parse(this.responseText);
      }
    };
    req.open("GET",link, true);
    req.send();*/

        map = new Microsoft.Maps.Map('#myMap', {});

        //Create an infobox at the center of the map but don't show it.
        infobox = new Microsoft.Maps.Infobox(map.getCenter(), {
            visible: false
        });

        //Assign the infobox to a map instance.
        infobox.setMap(map);

        //Create random locations in the map bounds.
       // var randomLocations = Microsoft.Maps.TestDataGenerator.getLocations(5, map.getBounds());
       

        for (var i = 0; i<1; i++) {
            var pin = new Microsoft.Maps.Pushpin(locations[i]);

            //Store some metadata with the pushpin.
            pin.metadata = {
                title: 'Pin ' + i,
                description: 'Discription for pin' + i
            };

            //Add a click event handler to the pushpin.
            Microsoft.Maps.Events.addHandler(pin, 'click', pushpinClicked);

            //Add pushpin to the map.
            map.entities.push(pin);
        }
    }

    function pushpinClicked(e) {
        //Make sure the infobox has metadata to display.
        if (e.target.metadata) {
            //Set the infobox options with the metadata of the pushpin.
            infobox.setOptions({
                location: e.target.getLocation(),
                title: e.target.metadata.title,
                description: e.target.metadata.description,
                visible: true
            });
        }
    }
    </script>
    <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Aq-DI3sPZgfCJn2TxyZuQeUJXY3btDlW13btQUrRD5OPGJBb3RtBHZbvVl3SBLFI' async defer></script>
</head>
<body>
    <div id="myMap" style="position:relative;width:600px;height:400px;"></div>
</body>
</html>
