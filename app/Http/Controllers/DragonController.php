<?php

namespace App\Http\Controllers;

use App\Models\Dragon;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function index()
    {
        $dragons = Dragon::all();
        return view('dragons.index', compact('dragons'));
    }

    public function create()
    {
        return view('dragons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'element' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
           ]);
           $imageName = time().'.'.$request->image->extension();
           $request->image->move(public_path('images'), $imageName);
        
           $dragon = new Dragon();
           $dragon->name = $request->name;
           $dragon->age = $request->age;
           $dragon->element = $request->element;
           $dragon->image = 'image/'.$imageName;
           $dragon->save();
     
        return redirect('dragons')->with('success', 'Dragon created successfully.');
    }

    public function edit($id)
    {
        $dragon = Dragon::findOrFail($id);
        return view('dragons.edit', compact('dragons'));
    }

    public function update(Request $request, $id)
    {
        $dragon = Dragon::findOrFail($id);
        $dragon->update($request->all());
        return redirect('dragons')->with('success', 'Dragon updated successfully.');
    }

    public function destroy($id)
    {
        $dragon = Dragon::findOrFail($id);
        $dragon->delete();
        return redirect('dragons')->with('success', 'Dragon deleted successfully.');
    }
}
