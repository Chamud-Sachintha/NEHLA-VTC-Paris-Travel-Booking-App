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
            <h2 class="mb-4">Manage Users</h2>
            
            <div class="row">
                @if(Session()->get('status') != null)
                    <div class="col-md-12 alert alert-success" role="alert">
                        {{Session()->get('status')}}
                    </div>
                @endif
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <form action="/addUser" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="">Create Username :</label>
                                <input type="text" class="form-control" placeholder="Eg. Benz" name="username">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Create Password :</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="">Confirm Password :</label>
                                <input type="password" class="form-control" name="confPassword">
                            </div>
                            <div class="col-12 mt-3 mb-3">
                                <input type="submit" class="btn btn-primary btn-sm" value="Add User">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin_users as $each_admin)
                                <tr>
                                    <th scope="row">{{ $each_admin['id'] }}</th>
                                    <td>{{ $each_admin['username'] }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="#" class="btn btn-primary btn-sm" style="width: 100%">Update</a>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <a href="#" class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>

            <h2 class="mb-4">Manage Promotions</h2>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <form action="/addNewPromo" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="">Promotion Code :</label>
                                <input type="text" class="form-control" placeholder="Eg. New Year" name="promoCode">
                            </div>
                            <div class="col-12">
                                <label for="">Promotion Value Percentage :</label>
                                <input type="text" class="form-control" placeholder="Eg. 5%" name="promoValue">
                            </div>
                            <div class="col-12">
                                <label for="">Description :</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12 mt-3">
                                <input type="submit" class="btn btn-primary btn-sm" value="Add Promotion">
                                <input type="reset" class="btn btn-warning btn-sm" value="Reset Feilds">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Promotion Number</th>
                            <th scope="col">Promotion Value (%)</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($promos as $each_promo)
                                <tr>
                                    <th scope="row">{{ $each_promo['id'] }}</th>
                                    <td>{{ $each_promo['promotion_code'] }}</td>
                                    <td>{{ $each_promo['percentage'] }}</td>
                                    <td>{{ $each_promo['description'] }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="#" class="btn btn-primary btn-sm" style="width: 100%">Update</a>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <a href="#" class="btn btn-danger btn-sm" style="width: 100%">Delete</a>
                                            </div>
                                        </div>
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
    <script src="{{ asset('admin/js/popper.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
</body>