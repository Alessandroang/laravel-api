<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::select('id', 'title', 'slug', 'type_id', 'content')
            ->with('type:id,color,label', 'technologies:id,color,label')
            // ->where('published', 1)
            ->paginate(12);

        return response()->json($projects);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
