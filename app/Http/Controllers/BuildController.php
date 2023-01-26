<?php

namespace App\Http\Controllers;

use App\Http\Resources\BuildResource;
use App\Models\Build;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BuildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $builds = Build::all();

        return view('builds', ['builds' => $builds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return BuildResource
     */
    public function store(Request $request)
    {
        $newBuild = Build::create($request->all());
        return new BuildResource($newBuild);
    }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function show($build)
    {
        $build = Build::findOrFail($build->id);

        return view('build', ['build' => $build]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
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
}
