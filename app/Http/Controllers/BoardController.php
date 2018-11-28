<?php
namespace App\Http\Controllers;
use Illuminate\Http\Requests;
use App\Score as ScoreEloquent;
use Route;
use View;
class BoardController extends Controller
{
    public function getIndex(){
        return view::make('board',['scores'=>ScoreEloquent::with
        ('student')->orderByTotal()->orderByTotal()->orderBySubject()->get()]);
    }
    public function getName(){
        return Route::currentRouteAction();
    }
}