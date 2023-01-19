<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Chamud Sachintha Prof.</title>
</head>
<body>
    <div class="row">
        <div class="card" style="border: 5px solid #aa8453; padding: 50px 50px 50px 50px; box-shadow: 0 10px 30px 0 rgba(247, 245, 178, 0.4);">
            <div class="card-body">
                <img src="{{asset('images/logo-dark.png')}}" alt="">
                <h3>{{ $data['subject_title'] }}</h3>
                <div class="row">
                    <div class="col">
                        <p>Name :- </p>
                    </div>
                    <div class="col">
                        <p>{{ $data['name'] }}</p>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <p>Email :- </p>
                    </div>
                    <div class="col">
                        <p>{{ $data['email'] }}</p>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <p>Mobile :- </p>
                    </div>
                    <div class="col">
                        <p>{{ $data['mobile'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>