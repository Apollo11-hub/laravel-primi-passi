<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
    <title>Contacts</title>
</head>
<body>
    <header class="d-flex">

        @foreach ($menu as $item)

        <ul class="nav">

            <li class="nav-item">

                <a class="nav-link active" aria-current="page" href="{{$item}}">{{$item}}</a>

            </li>

        </ul>

        @endforeach

    </header>

    <h1>333 333 333</h1>
</body>
</html>
