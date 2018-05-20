@extends('layout.main')
@section('header-script')
@stop

@section('content')
  <!-- About us heading-->
  <section id="about_header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h4 class="h4-type3">{{ $title }}</h4>
          <div class="border-bar4 margin-t20 "></div>
        </div>
      </div>
    </div>
  </section>
  <!-- About us heading end-->

 
  <!-- enquiry form -->
  <section id="contact_form">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 get_in_touch_form">
          <h3>Get In Touch</h3>
          <p>We are operating from the 3 Diffrent Cities of North India and we are intrested in explore our postential. We are a remote team and we are capable of working on more than one technologies </p>
          <p>Please Write to us if you're intrested in working with us.</p>
          <form action="" method="" name="">
            <input type="text" name="fullname" placeholder="Your Name" class="input_text">
            <input type="email" name="email" placeholder="Your Email" class="input_text">
            <input type="phone" name="mobile" placeholder="Your Mobile No." class="input_text">
            <textarea name="message" placeholder="Your Message" class="input_textarea"></textarea>
            <input type="submit" name="" value="SEND" class="input_submit">
          </form>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 margin-t30">
          <div class="col-md-12 col-sm-12 col-xs-12 contact_detail">
            <div class=" col-md-3 col-xs-12 text-center ">
              <span class="icon ti-location-pin"></span>
            </div>

            <p class="col-md-9 col-xs-12">
                    {!! setting('site.address') !!}
            </p>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 contact_detail">
            <div class=" col-md-3 col-xs-12 text-center">
              <span class="icon ti-email"></span>
            </div>

            <p class="col-md-9 col-xs-12">{{ setting('site.email') }}</p>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 contact_detail">
            <div class=" col-md-3 col-xs-12 text-center">
              <span class="icon ti-headphone"></span>
            </div>

            <p class="col-md-9 col-xs-12">{{ setting('site.phone') }}</p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- enquiry form end -->

  <!-- google map -->
  <section id="googlemap">

  </section>
  <!-- google map end -->

@stop

@section('footer-script')
  <script>
      function initMap() {
  
    var broadway = {
      info: '<b>MADS Studio in Ludhiana</b><br>\
            Civil Lines, Ludhiana, Punjab, India<br>\
            <a href="https://goo.gl/maps/jKNEDz4SyyH2">Get Directions</a>',
      lat: 30.9003263,
      long: 75.7866326
    };

    var belmont = {
      info: '<strong>MADS Studio in Gurgaon</strong><br>\
            Sukhrali, Gurgaon, Haryana, India <br>\
            <a href="https://goo.gl/maps/PHfsWTvgKa92">Get Directions</a>',
      lat: 28.424765,
      long: 76.8496946
    };

    var sheridan = {
      info: '<strong>MADS Studio in Delhi</strong><br>\r\
            Vasant Kunj, New Delhi, India<br>\
            <a href="https://goo.gl/maps/QGUrqZPsYp92">Get Directions</a>',
      lat: 28.6466772,
      long: 76.813066
    };

    var locations = [
        [broadway.info, broadway.lat, broadway.long, 0],
        [belmont.info, belmont.lat, belmont.long, 1],
        [sheridan.info, sheridan.lat, sheridan.long, 2],
      ];

    var map = new google.maps.Map(document.getElementById('googlemap'), {
      zoom: 7,
      center: new google.maps.LatLng(29.2776029,74.7999193),
      mapTypeId: google.maps.MapTypeId.TERRAIN
    });

    var infowindow = new google.maps.InfoWindow({});

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function (marker, i) {
        return function () {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    };
  }
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqvNiHjjWBcxsnQS5aXQkFP6YTv2_O0Bs&callback=initMap">
</script>


@stop