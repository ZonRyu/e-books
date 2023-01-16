<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
</head>
<body class="body">
    <div class="container nav-navbar" style="background-color: #fff; margin: 5% auto">
        <div class="img-side">
            <img class="reg-img-side" src="{{ asset('assets/img/reg-img.png') }}">
        </div>
        <div class="reg-place">
            <h1 class="reg-title">Register</h1>
            <form>
                <div class="mb-3 d-flex" style="gap: 1%;">
                  <input type="text" class="form-control" name="nama" placeholder="Nama">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="kabupaten" placeholder="Kabupaten">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="handphone">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>
</html> 