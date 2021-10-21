<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>AnH Enterprise Limited</title>
</head>
<body>

<div class="container bg-light" style="width: 50%">
    <!-- Content here -->
    <div class="">
        <h1 class="text-center text-uppercase">Dealers Portal</h1>
        <div class="row">
            <div class=" text-end">
                <a href="{{ url('/') }}"><button type="button" class="btn btn-outline-success btn-lg">View All Dealer</button></a>
            </div>
        </div>
    </div>
    <!--Error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!--Form-->
    <form action="{{ url('dealerForm') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="company" class="form-label">Distribution Company</label>
            <input type="text" name="company" class="form-control" id="company" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Distributor’s Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="area" class="form-label">Area</label>
            <input type="text" name="area" class="form-control" id="area" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Add Dealer</button>
    </form>
</div>






<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
