<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $login = Auth::user()->login;
        $balance = Auth::user()->balance;
        $avatar = Auth::user()->avatar;
        $games = DB::select("SELECT * FROM `baskets` LEFT JOIN games ON(games.id = baskets.game_id) WHERE baskets.user_id = $id");
        if ($balance == NULL) {
            $balance = 0;
        }
        $itog_price = DB::select("SELECT SUM(games.price) AS 'sum' FROM games");
        return view('profile',[
            "games" => $games,
            "login" => $login,
            "itog_price"=>$itog_price,
            "avatar" => $avatar,
            "balance" => $balance
    }
}
