var moment = require('moment-timezone');

export default {
  init() {
    // JavaScript to be fired on all pages

    var tempF = 0,
        tempC = 0,
        citySlug = $('#contact').data('city'),
        locationData = {};


      if (citySlug){
        //Get the city name

      switch (citySlug){
        case 'austin':
          locationData.name = "Austin, TX";
          locationData.timeZone = "America/Chicago";
          locationData.id = "4254010";
          break;
        case 'newyork':
          locationData.name = "New York, NY";
          locationData.timeZone = "America/New_York";
          locationData.id = "5128638";
          break;
        case 'montreal':
          locationData.name = "Montreal, QC";
          locationData.timeZone = "America/montreal";
          locationData.id = "6077243";
          break;
        case 'paris':
          locationData.name = "Paris, France";
          locationData.timeZone = "Europe/Paris";
          locationData.id = "2988507";
          break;
      }
      $('#city').html(locationData.name);
    

    //Get the weather
    var request = new XMLHttpRequest();

    request.open('GET', 'https://api.openweathermap.org/data/2.5/weather?id=' + locationData.id +'&APPID=337e8b8078ae36ba233c21a3fe98277f', true);
    request.onload = function () {

      // Begin accessing JSON data here
      var data = JSON.parse(this.response);

      if (request.status >= 200 && request.status < 400) {

        //Get the tempratures
        var tempK = data.main.temp_max;

        tempF = Math.round(((tempK-273.15)*1.8)+32);
        tempC = Math.round(tempK-273.15);

        $('#tempF').html(tempF);
        $('#tempC').html(tempC);

        //Get the icon
        var weather = '<i class="fal fa-sun"></i>'
        var id = data.weather[0].id;
        if (id >=200 && id < 300) {
          weather = '<i class="fal fa-thunderstorm"></i>';
        } else if ( id >=300 && id < 600 ) {
          weather = '<i class="fal fa-cloud-showers-heavy"></i>';
        } else if ( id >=600 && id < 700 ) {
          weather = '<i class="fal fa-cloud-snow"></i>';
        } else if ( id >=700 && id < 800 ) {
          weather = '<i class="fal fa-fog"></i>';
        } else if ( id >=801 && id < 900 ) {
          weather = '<i class="fal fa-clouds"></i>';
        } else {
          weather = '<i class="fal fa-sun"></i>';
        }

        $('#weatherIcon').html(weather)

        //Get Time
        var DateTime = moment().tz(locationData.timeZone).format('h:mm A z');

        $('#time').html(DateTime)

      } else {
        console.log('error');
      }
    }

    request.send();
      }

    //Rotate the logo
    $(window).scroll(function(){
      var scroll = $(window).scrollTop() / 2;
      $('.brand img').css('transform', 'rotate(' + scroll + 'deg)')
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
