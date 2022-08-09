<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Zone;
use App\Models\ZoneType;
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
        $url = '/project/' . $request->get("project");

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
        /*foreach ($build->rooms as $room) {
            echo $room->roomType->type;
        }*/
        return view('zones', ['zones' => $build->zones]);
    }
}
