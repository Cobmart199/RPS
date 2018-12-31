
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
        <div class="col-md-2 text-center">
            <p class="text-center"><strong>ROCK</strong></p>
        </div>
        <div class="col-md-2 text-center">
            <p class="text-center"><strong>PAPER</strong></p>
        </div>
        <div class="col-md-2 text-center">
            <p class="text-center"><strong>SCISSORS</strong></p>
        </div>
        <div class="col-md-2 text-center">
            <p class="text-center"><strong>LIZARD</strong></p>
        </div>

        <div class="col-md-2 text-center">
            <p class="text-center"><strong>SPOCK</strong></p>
        </div>


    </div>


    @include('partials.errors')



    <div class="row justify-content-md-center">
        <div class="jumbotron col-md-10">
            <h2>Good Luck</h2>
            <p class="lead"></p>
            <hr class="my-4">
            <p>You will be playing against the computer in this game.</p>


            <hr class="my-4">
            <div class="container">

                    @if(Session::has('info'))
                        <div class="row">
                            <div class="col-md-12">
                                <p class="alert alert-info">{{ Session::get('info') }}</p>
                            </div>

                        </div>
                    @endif


                        @if(Session::has('winner'))
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="alert alert-info">{{ Session::get('winner') }}</p>
                                </div>

                            </div>
                        @endif



                <div class="pull-right">
                    <h4 id="points"></h4>
                </div>


                <div class="col-md-12">


                    <form action="{{ route('welcome') }}" method="post">
                        <label>Player's name:</label>&nbsp;
                        <input
                                type="text"
                                class="form-control"
                                id="playersName"
                                name="playersName"
                                    />
                        <hr class="my-4">

                        <label>Your Selection:</label>
                        <div class="item form-group">



                            <input name="usersChoice" type="radio" id="Rock" name="Rock" value="Rock"> Rock <br/>

                            <input name="usersChoice" type="radio" name="Paper" value="Paper"> Paper <br/>

                            <input name="usersChoice" type="radio" value="Scissors"> Scissors <br/>

                            <input name="usersChoice" type="radio" value="Lizard"> Lizard <br/>

                            <input name="usersChoice" type="radio" value="Spock"> Spock


                        </div>



                        <hr class="my-4">

                        {{ csrf_field()}}

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Play</button>
                    </form>


                    <br/>

                    <div class="row container-fluid">

                        <p><a href="{{ route('gameList') }}">View Games Played</a></p>

                    </div>



                </div>



            </div>
        </div>
    </div>
</div>





<div class="footer text-center">
    <div> Cyril O. Balonwu </div>
</div>
</body>

