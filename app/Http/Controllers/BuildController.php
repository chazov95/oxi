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

    public function redirectToBuildPage(Request $request)
    {
        $url = '/project/'.$request->get("project");

        return redirect($url);
        /*$builds = Build::get();

        foreach ($builds as $build) {
            echo $build->name . '<br/>';
            foreach ($build->rooms as $room) {
                echo $room->build_id . ',';
            }
            echo '<br/>';
        }*/
    }

    public function getBuild($id)
    {
        $build = Build::find($id);
echo '<pre>';
var_dump($build->rooms);
echo '</pre>';
die();
        return view('rooms', ['rooms' => $build->rooms]);
    }
}
