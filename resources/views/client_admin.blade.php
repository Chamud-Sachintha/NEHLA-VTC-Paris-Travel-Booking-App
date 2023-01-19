<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('client_bookings/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('client_bookings/css/owl.carousel.min.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('client_bookings/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client_bookings/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div>
            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(admin/images/logo.jpg);"></div>
                    <h3>Catriona Henderson</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/app"><span class="fa fa-home mr-3"></span> All Bookings</a>
                </li>
            </ul>
        
        </nav>

        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">See All Your Completed Bookings</h2>

            <div class="row">
              <div class="table-responsive">

                <table class="table custom-table">
                  <thead>
                    <tr>
                      <th scope="col">
                        <label class="control control--checkbox">
                          <input type="checkbox" class="js-check-all"/>
                          <div class="control__indicator"></div>
                        </label>
                      </th>
                      <th scope="col">Order</th>
                      <th scope="col">From</th>
                      <th scope="col">To</th>
                      <th scope="col">Vehicle</th>
                      <th scope="col">Price</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($orders as $order)
                      <tr>
                        <th scope="row">
                          <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                          </label>
                        </th>
                        <td>
                          {{$order['id']}}
                        </td>
                        <td>{{$order['from']}}</td>
                        <td>
                          {{$order['to']}}
                          {{-- <small class="d-block">Far far away, behind the word mountains</small> --}}
                        </td>
                        <td>+63 983 0962 971</td>
                        <td>{{$order['total_price']}}</td>
                        <td>
                          <a href="" class="btn btn-primary btn-sm">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>

    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="admin/js/popper.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
    <script src="{{asset('client_bookings/js/main.js')}}"></script>
</body>
</html>