<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{


    protected $fillable = ['playersName', 'usersChoice', 'computersChoice', 'didWin'];



    public  function game(){
        return $this->belongsTo('App\Game', 'id');

    }


}
