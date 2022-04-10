<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view ('teams.index', ['teams'=>$teams]);
    }

    public function create(){
        return view ('teams.create');
    }

    public function show($id){
        $team = Team::findOrFail($id);

        return view ('teams.show', ['team'=> $team]);
    }

    public function edit($id){
        $team = Team::findOrFail($id);

        return view ('teams.edit', ['team'=> $team]);
    }

    public function update($id){
        $team = Team::findOrFail($id);
        $team->name = request('name');
        $team->description = request('description');
        $team->leader = request('leader');
        $team->save();
        return redirect('/');
    }

    public function store(){
        $team = new Team();
        $team->name = request('name');
        $team->description = request('description');
        $team->leader = request('leader');
        $team->save();
        // return redirect('/');
    }
}
