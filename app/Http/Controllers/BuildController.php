<?php

namespace App\Http\Controllers;

use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index()
    {
        $builds = Build::all();
        return view('build', ['builds' => $builds]);
    }

    public function getBuild()
    {
        $builds = Build::all();

        foreach ($builds as $build) {
            echo $build->name . '<br/>';
            foreach ($build->rooms as $room) {
                echo $room->build_id . ',';
            }
            echo '<br/>';
        }
    }
}
