
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rock Paper Scissors Lizard and Spock </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/flatly/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-WuViQmTamrPyvMFZjf8te7HpKtdxuzV/HX1yG26a0d8yieIBr+beDf1ME99iX1cM" crossorigin="anonymous">


</head>
<body>



<div class="container col-md-12 mt-5">


    <div class="row justify-content-md-center">



            <div class="row container">

                <div class="col-sm-3 blockquote"> Player's Name </div>
                <div class="col-sm-3 blockquote"> User's Choice </div>
                <div class="col-sm-3 blockquote"> Computer's Choice </div>
                <div class="col-sm-3 blockquote"> Did Win</div>

                <hr />

                @foreach($games as $game)

                  <div class="col-sm-3">{{ $game->playersName }}</div>
                  <div class="col-sm-3">{{ $game->usersChoice }}</div>
                  <div class="col-sm-3">{{ $game->computersChoice }}</div>
                  <div class="col-sm-3">{{ $game->didWin }}</div>
                @endforeach

            </div>



        <div class="row container-fluid">

            <p><a href="{{ route('welcome') }}">Play Game</a></p>

        </div>




    </div>


</div>

<hr class="m-4"/>


<div class="footer text-center">
    <div> Cyril O. Balonwu </div>
</div>
</body>

