<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Item;
use App\Enemy;

class AdminController extends Controller
{
    public function index(){
        $heroCounter = Hero::count();
        $itemCounter = Item::count();
        $enemyCounter = Enemy::count();

        $report = [
            ['name' => "Heroes", 'counter' => $heroCounter, 'route' => 'heroes.index' , 'class' => 'btn-primary'],
            ['name' => "Items", 'counter' => $itemCounter, 'route' => 'item.index', 'class' => 'btn-success'],
            ['name' => "Enemies", 'counter' => $enemyCounter, 'route' => 'enemy.index', 'class' => 'btn-danger']
        ];

        return view('admin.index', ['report' => $report]);
    }
}
