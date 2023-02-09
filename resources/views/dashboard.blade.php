<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        {{ View::make('admin_panel') }}
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Dashboard</h2>
            <hr>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col text-center">
                                <h3>New Orders</h3>
                            </div>
                            <div class="col text-center">
                                <img src="https://img.icons8.com/color-glass/96/null/new.png"/>
                            </div>
                            <div class="col text-center mt-3">
                                <h5>3</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col text-center">
                                <h3>Complete Orders</h3>
                            </div>
                            <div class="col text-center">
                                <img src="https://img.icons8.com/stickers/96/null/checked-radio-button.png"/>
                            </div>
                            <div class="col text-center mt-3">
                                <h5>3</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="col text-center">
                                <h3>Destinations</h3>
                            </div>
                            <div class="col text-center">
                                <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/96/null/external-Locations-maps-and-navigation-smashingstocks-circular-smashing-stocks.png"/>
                            </div>
                            <div class="col text-center mt-3">
                                <h5>3</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
</body>