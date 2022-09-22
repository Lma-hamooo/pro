<?php

namespace App\Http\Controllers;

use App\Models\trainer;
use Illuminate\Http\Request;

class trainercontroller extends Controller
{
    public function index()
    {
        $trainers = trainer::get();
        return view('trainers.index',compact('trainers'));
    }
    public function create()
    {
        return view ('trainers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'trainername' => 'required',
            'course' => 'required',
            'cost' =>'required',
        ]);
        trainer::create($request->all());
        return redirect()->route('trainers.index')
        ->with('success','trainer created successfully.');
    }
    public function edit(trainer $trainer)
    {
        return view('trainers.edit',compact('trainer'));
    }
    public function update(Request $request, trainer $trainer)
    {
        $request->validate([

        ]);
        $trainer->update($request->all());
        return redirect()->route('trainer.index')
        ->with('success','trainer updated successfully');
    }
    public function destroy(trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainers.index')
        ->with('success','trainer deleted successfully');
    }
}
