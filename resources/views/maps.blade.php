<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>YB|Class Map</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" type="text/css" href="http://www.sac.iitkgp.ac.in/yearbook_files/css/animate.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="http://www.sac.iitkgp.ac.in/yearbook_files/css/business-casual.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://www.sac.iitkgp.ac.in/yearbook_files/css/autocomplete.css">
        <script src="http://www.sac.iitkgp.ac.in/yearbook_files/js/autocomplete.js"></script>
        <style type="text/css">
            .dropdown-menu{
            top: 60px;
            right: 0px;
            left: unset;
            width: 460px;
            box-shadow: 0px 5px 7px -1px #c1c1c1;
            padding-bottom: 0px;
            padding: 0px;
            }
            .dropdown-menu:before{
            content: "";
            position: absolute;
            top: -20px;
            right: 12px;
            border:10px solid #343A40;
            border-color: transparent transparent #343A40 transparent;
            }
            .head{
            padding:5px 15px;
            border-radius: 3px 3px 0px 0px;
            }
            .notification-box{
            padding: 10px 0px; 
            }
            .bg-gray{
            background-color: #eee;
            }
            @media (max-width: 640px) {
            .dropdown-menu{
            top: 50px;
            left: -16px;  
            width: 290px;
            } 
            .nav{
            display: block;
            }
            .nav .nav-item,.nav .nav-item a{
            padding-left: 0px;
            }
            .message{
            font-size: 13px;
            }
            }
            div.b {
            white-space: nowrap; 
            width: 270px;
            overflow: hidden;
            text-overflow: ellipsis; 
            }
        </style>
        <!--for tutorial introjs file -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/introjs.css">
    </head>
    <body>
        <!-- Navigation--> 
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: rgba(67,100,107,0.55);">
            <a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"></a>
            <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="http://www.sac.iitkgp.ac.in">Yearbook</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-6" data-step="4" data-intro="<center> Search and write about your friends </center> ">
                        <form action="/search/" method="POST" class="form-inline">
                            {{ csrf_field() }}
                            <div class="form-group" >
                                <input type="text" name="search" required="required" id="search" class="form-control" placeholder="Search your friend here">
                            </div>
                            <div class="form-group" style="margin-left: 8px;">
                                <button type="submit" class="btn btn-default" style="margin-top: 0px;">Search</button>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/home">Home
                        <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/trending"  data-step="5" data-intro="<center> See the most popular photos of Kgpians </center> ">Trending</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link text-uppercase text-expanded" href="/profile_index"  data-step="6" data-intro="<center> See your profile and know what your friends think about you </center> ">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item px-lg-3 dropdown"  data-step="9" data-intro="<center> Itch  List ">
                        <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-opencart"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" >
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/bucket">Fill the Itch List </a>
                            </li>
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/viewbucket">View Itch List </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item px-lg-3 dropdown">
                        <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog"><span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" >
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/details">Edit Details</a>
                            </li>
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/changepassword">Change Password </a>
                            </li>
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/classmap">Class Map<span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></a>
                            </li>
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/polls">Polls<span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></a>
                            </li>
                            <li class="head text-dark bg-light">
                                <a class="nav-link text-dark" href="/logout">Logout </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item px-lg-3 dropdown"  data-step="7" data-intro="<center> See notifications here</center> ">
                        <a class="nav-link text-light" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >
                        @if(count($notifications))
                        <i class="fa fa-bell" style="color: blue;">
                        <span lass="badge" style="position: relative; top: 6px; left: -6px;color: white; font-size: 19px;">{{count($notifications)}}</span>
                        </i>
                        @else
                        <i class="fa fa-bell"></i>
                        @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="head text-light bg-dark">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <span>Notifications ({{count($notifications)}})</span>
                                    </div>
                            </li>
                            @foreach($notifications as $notification)
                            <a href="/read/{{$notification['id']}}">
                            <li class="notification-box">
                            <div class="row">
                            @php
                            $pic = App\User::where('name',$notification['user'])->pluck('pro_pic');
                            @endphp  
                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                            <img src="{{$pic[0]}}" class="w-50 rounded-circle">
                            </div> 
                            <div class="col-lg-8 col-sm-8 col-8">
                            <strong class="text-info">{{$notification['user']}}</strong>
                            <div class="b">
                            {{$notification['views']}}
                            </div>
                            <small class="text-warning">{{$notification['created_at']->diffForHumans()}}</small>
                            </div>    
                            </div>
                            </li>
                            </a>
                            @endforeach           
                        </ul>
                    </li>
                    <!-- tutorial  just add data-step and data -intro in any html element to include it in tutorial-->
                </ul>
                </div>
            </div>
        </nav>
        <br>
        <div id="map"></div>
        <!--
            <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
              <div class="container">
                <div class="row">
                  <div class="col-xl-9 mx-auto">
                    <div class="cta-inner text-center rounded">
                      <h2 class="section-heading mb-4">
                        <span class="section-heading-upper"></span>
                        <span class="section-heading-lower">IIT KGP Class Map : <br> Batch of 2018</span>
                      </h2>
                      <p class="mb-0"> The yearbook is an opus of memories that you would carry along graduating from the institute. The wonderful years spent in the campus are engraved and expressed via photographs and writeups in this departing souvenir from IIT KGP. 
            
                      With an assortment of your thoughts and snaps from various experiences through the years, the book truly collaborates your time in KGP and is a walk down your memory lane every time you look through it.</p>
                      <br>
                      
                    </div>
                  </div>
                </div>
            
              </div>
            </section>
            
            -->
        <br>
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <p class="m-0 small">Copyright &copy; Yearbook 2018</p>
                <p class="m-0 small"><a target="_blank" href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a></p>
            </div>
        </footer>
        <!-- for intro js in tutorial-->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.7.0/intro.js"></script> 
    </body>
</html>
<script type="text/javascript">
    var user = <?php echo $user;?>;
    //console.log(user[0].name);
    var names = [];
    for (var i = 0; i < user.length; i++) {
      names[i] = user[i].name;
    }
    //console.log('names',names);
    
    $(function() {
      $("#search").autocomplete({
        source:[names]
      }); 
    });
</script>
<script>
    /* function initMap() {
    
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 3,
         center: {lat: 20.5937, lng: 78.9629}
       });
    
         // Create an array of alphabetical characters used to label the markers.
         var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
         // Add some markers to the map.
         // Note: The code uses the JavaScript Array.prototype.map() method to
         // create an array of markers based on a given "locations" array.
         // The map() method here has nothing to do with the Google Maps API.
         var markers = locations.map(function(location, i) {
           return new google.maps.Marker({
             position: location,
             label: labels[i % labels.length]
           });
         });
    
         // Add a marker clusterer to manage the markers.
         var markerCluster = new MarkerClusterer(map, markers,
           {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
       }
       */
    
       function initMap() {
    
         var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 2,
          center: {lat: 20.5937, lng: 78.9629}
        });
         var infoWin = new google.maps.InfoWindow();
    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    var markers = locations.map(function(location, i) {
     var marker = new google.maps.Marker({
       position: location
     });
     google.maps.event.addListener(marker, 'click', function(evt) {
       infoWin.setContent(location.info);
       infoWin.open(map, marker);
     })
     return marker;
    });
    
    // markerCluster.setMarkers(markers);
    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers, {
     imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    });
    
    }
    
    
    
    
    
    var locations_a = <?php echo $locations;?>;
      // console.log(locations_a);
      var locations = [];
      var t = 0;
      for (var i = 0; i < locations_a.length; i++) {
         //console.log("_a",locations_a[i].latitude);
    
         var flag = 0;
         if(locations_a[i].latitude!='' && locations_a[i].longitude!='' && locations_a[i].longitude!=null && locations_a[i].longitude!=null){
           console.log(locations.length);
           for (var j = 0; j < locations.length; j++) {
             if(locations[j].lat==locations_a[i].latitude && locations[j].lng==locations_a[i].longitude){
               flag = 1; 
               break;
             }
           }
           if(flag==0)
           {
            locations[t] = {};
            locations[t].lat = Number(locations_a[i].latitude);
            locations[t].lng = Number(locations_a[i].longitude);
            locations[t].info = locations_a[i].name+" | "+locations_a[i].rollno;
            t++;
          }
          else
          {
    
           locations[j].info +="<br>"+locations_a[i].name+" | "+locations_a[i].rollno;
         }
        
       }
    
     }
     for (var i = 0; i < locations.length; i++) {
       if(locations[i]==null)
         locations.splice(i,1);
    
     }
       //console.log(".",locations);
      // google.maps.event.addDomListener(window, "load", initMap);
</script>
<style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
    height: 90%;
    width: 80%;
    margin-left: 10%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }
</style>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuJ1IZgos9KAaf07oLTHoyryM6iyGhmoo&callback=initMap"></script>