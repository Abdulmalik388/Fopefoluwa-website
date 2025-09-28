<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // Show all team members (for frontend page)
  

    // Show admin list
    public function adminIndex()
    {
        $team = Team::all();
        return view('admin.team.index', compact('team'));
    }

    // Show create form
    public function create()
    {
        return view('admin.team.create');
    }

    // Store new team member
    public function store(Request $request)
    {
        $request->validate([
            'post' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/team'), $imageName);

        Team::create([
            'post' => $request->post,
            'name' => $request->name,
            'image' => 'uploads/team/'.$imageName,
        ]);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $member = Team::findOrFail($id);
        return view('admin.team.edit', compact('member'));
    }

    // Update team member
    public function update(Request $request, $id)
    {
        $member = Team::findOrFail($id);

        $request->validate([
            'post' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'post' => $request->post,
            'name' => $request->name,
        ];

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/team'), $imageName);
            $data['image'] = 'uploads/team/'.$imageName;
        }

        $member->update($data);

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully!');
    }

    // Delete team member
    public function destroy($id)
    {
        $member = Team::findOrFail($id);
        $member->delete();
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully!');
    }
}
