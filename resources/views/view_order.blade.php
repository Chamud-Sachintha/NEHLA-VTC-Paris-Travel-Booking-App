<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <div class="row">
                <div class="col-6">
                    <h2 class="mb-4">View Order Request # </h2>
                </div>
                <div class="col-6">
                    <a href="/app/orders" class="btn btn-primary btn-sm" style="float: right">Back to Orders Page</a>
                </div>
            </div>
            
            <div class="row">
                {{-- {{ dd($order_details); }} --}}
                @if(Session()->get('status') != null)
                <div class="col-md-12 alert alert-success" role="alert">
                    {{Session()->get('status')}}
                </div>
                @endif
                <input type="hidden" value="{{ $order_details[0]->from }}" id="from">
                <input type="hidden" value="{{ $order_details[0]->to }}" id="to">
                <div id="map" style="width: 100%; height: 360px;">
            </div>

            <div class="row mt-3">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <h5>Journey Details</h5>
                    <hr>
                    <div class="row">
                        <div class="row">
                            <div class="col-3">
                                <p>From :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->from }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>To :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->to }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Date :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->date_and_time }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p>Kilometers :</p>
                            </div>
                            <div class="col-7">
                                <p id="in_kilo"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p>Time :</p>
                            </div>
                            <div class="col-7">
                                <p id="duration_text"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <h5>Options</h5>
                    <hr>
                    <div class="row">
                        <div class="row">
                            <div class="col-5">
                                <p>Passengers :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->passengers }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p>Luggage :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->luggage }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <p>Date :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->date_and_time }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <p>Trip Type :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->trip_type == "oneWay" ? "One Way" : "Return"}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Flight Number :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->flight_number }}</p>
                            </div>
                        </div>
                        @if($order_details[0]->trip_type != "oneWay")
                            <div class="row">
                                {{-- <div class="col-6">
                                    <p>Meet & Greet :</p>
                                </div>
                                <div class="col-6">
                                    <p>{{ $order_details[0]->meet }}</p>
                                </div> --}}
                                <div class="col-6">
                                    <p>Return From :</p>
                                </div>
                                <div class="col-6">
                                    <p>{{ $order_details[0]->return_from }}</p>
                                </div>
                            </div>
                            <div class="row">
                                {{-- <div class="col-6">
                                    <p>Booster Seats :</p>
                                </div>
                                <div class="col-6">
                                    <p>{{ $order_details[0]->booster_seats }}</p>
                                </div> --}}
                                <div class="col-6">
                                    <p>Return To :</p>
                                </div>
                                <div class="col-6">
                                    <p>{{ $order_details[0]->return_to }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-6">
                                <p>Baby Seats :</p>
                            </div>
                            <div class="col-6">
                                <p>{{ $order_details[0]->baby_seats }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
                    <h5>Vehicle Details</h5>
                    <hr>
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-12">
                                <img src="{{asset('/featuredImage'. '/' . $order_details[0]->image)}}" alt="" style="width: 300px; height: 180px">
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Vehicle Brand :</p>
                        </div>
                        <div class="col-6">
                            <p>{{ $order_details[0]->brand }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>Vehicle Model :</p>
                        </div>
                        <div class="col-6">
                            <p>{{ $order_details[0]->model }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <h5>Client Details</h5>
                    <hr>
                    <div class="row">
                        <div class="col-5">
                            <p>Client Name :</p>
                        </div>
                        <div class="col-7">
                            <p>{{ $order_details[0]->first_name . " " . $order_details[0]->last_name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p>Client Email :</p>
                        </div>
                        <div class="col-7">
                            <p>{{ $order_details[0]->email }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p>Client Mobile :</p>
                        </div>
                        <div class="col-7">
                            <p>{{ $order_details[0]->mobile_number }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <h5>Update Order Status :</h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <form action="/updateOrder" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input type="hidden" name="order_id" value="{{ $order_details[0]->order_id }}">
                                        <select class="form-select" aria-label="Default select example" name="order_status">
                                            <option value="0" selected>Open this select menu</option>
                                            <option value="1">Complete</option>
                                        </select>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{config('app.g_map_key')}}&libraries=places" >
    </script>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>

    <script>
        var map;

        function initMap() {
            var myLating = {
                lat: 6.9778,
                lng: 79.9272
            };

            map = new google.maps.Map(document.getElementById("map"), { zoom: 16, center: myLating });
            displayRoute();
        }

        function displayRoute() {
            var origin = document.getElementById("from").value;
            var destination = document.getElementById("to").value;
            var directionsService = new google.maps.DirectionsService();
            var directionsDisplay = new google.maps.DirectionsRenderer({ draggable: false });
            var travelMode = google.maps.DirectionsTravelMode.DRIVING;
            directionsService.route({
                origin: origin,
                destination: destination,
                travelMode: travelMode,
                avoidTolls: true
            }, function (response, status) {
                if (status === "OK") {
                    directionsDisplay.setMap(map);
                    directionsDisplay.setDirections(response);
                } else {
                    directionsDisplay.setMap(null);
                    directionsDisplay.setDirections(null);
                }
            });
        }

        function calculateDistance(travel_mode, origin, destination) {

            var DistanceMatrixService = new google.maps.DistanceMatrixService();
            DistanceMatrixService.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode[travel_mode],
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, save_results);
        }

        function save_results(response, status) {

            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    var distance_in_kilo = distance.value / 1000; // the kilo meter
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    appendResults(distance_in_kilo, distance_in_mile, duration_text);
                }
            }
        }

        function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
            document.getElementById("in_kilo").innerHTML = distance_in_kilo.toFixed(2) + " KM";
            document.getElementById("duration_text").innerHTML = duration_text;
        }

        initMap();
        calculateDistance(google.maps.DirectionsTravelMode.DRIVING,
                            document.getElementById("from").value,
                            document.getElementById("to").value);
    </script>
</body>