    var country = document.getElementById('country');
    var state = document.getElementById('state');
    var city = document.getElementById('city');
  

    function callback(data) {
        country.value = data.country_name;
        state.value = data.state;
        city.value = data.city;
       
    }

    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://geolocation-db.com/json/geoip.php?jsonp=callback';
    var h = document.getElementsByTagName('script')[0];
    h.parentNode.insertBefore(script, h);