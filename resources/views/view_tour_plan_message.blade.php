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
                    <h2 class="mb-4">View Tour Request #</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <h4>Requested Tour Details</h4>
                    <hr>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2">
                            <p>Name :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ $data['name'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p>Email Address :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ $data['email'] }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <p>Mobile :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ $data['mobile'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p>Subject :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ $data['subject'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p>Message :</p>
                        </div>
                        <div class="col-10">
                            <p>{{ $data['message'] }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-2">
                            <p>Selected Tour Plan :</p>
                        </div>
                        <div class="col-10">
                            <p style="float: left">{{ ($data['tour_id'] == "1" ? "The Normandy Tour" : $data['tour_id'] == "2") ? "The Europe Tour" : "The Paris Tour" }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
</body>