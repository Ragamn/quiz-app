<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    //レベル一覧を表示

    public function selectAllLevels()
    {
        $levels = Level::select('level_id', 'level')->get()->toArray();
        return view('user.u_top', compact('levels'));
    }
}
