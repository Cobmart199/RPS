<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;



class GameController extends Controller
{

    public function postGame(Request $request){

        $this->validate($request, [
            'playersName'=> 'required|min:3',
            'usersChoice'=> 'required|min:1'
        ]);

        $game = new Game([
            'playersName' => $request->input('playersName'),
            'usersChoice' => $request->input('usersChoice'),
            'computersChoice' => $this->computersChoice(),
            'didWin' => $this->didWin($request)

        ]);
        $game->save();


        return redirect()->back()->with('info','Game played successfully, the player is: '
            . $request->input('playersName')
            . ', Computers choice is  '
            . $this->computersChoice()
            . ', Users choice is '
            . $request->input('usersChoice')
             )
        ->with('winner','Did win'
        . $this->didWin($request) == 0 ? ' You lost ' : ' You Won'
             );
    }



    public function computersChoice(){

        $computersChoice = array("Paper",'Rock','Scissors','Lizard','Spock');
        $random_keys = array_rand($computersChoice,5);

        return $computersChoice[$random_keys[5]];

    }

    public function didWin(Request $request){


        switch ($request){
            case $request->input('usersChoice') == 'Scissors' And $this->computersChoice() == 'Paper' :
                  return 1;
                break;
            case $request->input('usersChoice') == 'Paper' And $this->computersChoice() == 'Rock' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Rock' And $this->computersChoice() == 'Lizard' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Lizard' And $this->computersChoice() == 'Spock' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Spock' And $this->computersChoice() == 'Scissors' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Scissors' And $this->computersChoice() == 'Lizard' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Lizard' And $this->computersChoice() == 'Paper' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Paper' And $this->computersChoice() == 'Spock' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Spock' And $this->computersChoice() == 'Rock' :
                return 1;
                break;
            case $request->input('usersChoice') == 'Rock' And $this->computersChoice() == 'Scissors' :
                return 1;
                break;
            default:
                return 0;

        }

    }


    public function getIndex()
    {
        $games = Game::all();

        return view('gameList', ['games' => $games]);
    }





}
