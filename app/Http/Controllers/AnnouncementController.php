<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new announcement in the database
        // Validation rules
        $rules = [
            'title' => 'required|max:255',
            'content' => 'required',
            'date' => 'required|date',
        ];

        // Validate the request data
        $request->validate($rules);

        // Create a new announcement and store it in the database
        $announcement = new Announcement();
        $announcement->title = $request->input('title');
        $announcement->content = $request->input('content');
        $announcement->date = $request->input('date');
        $announcement->save();

        // Redirect to the index page with a success message
        return redirect()->route('announcements.index')->with('success', 'Announcement created successfully');

    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.show', compact('announcement'));
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the announcement in the database
        // Validation rules
        $rules = [
            'title' => 'required|max:255',
            'content' => 'required',
            'date' => 'required|date',
        ];

        // Validate the request data
        $request->validate($rules);

        // Retrieve the existing announcement from the database
        $announcement = Announcement::findOrFail($id);

        // Update the announcement's attributes with the request data
        $announcement->title = $request->input('title');
        $announcement->content = $request->input('content');
        $announcement->date = $request->input('date');
        $announcement->save();

        // Redirect to the index page with a success message
        return redirect()->route('announcements.index')->with('success', 'Announcement updated successfully');
    }

    public function destroy($id)
    {
        // Delete the announcement from the database
        // Retrieve the announcement from the database
        $announcement = Announcement::findOrFail($id);

        // Delete the announcement
        $announcement->delete();

        // Redirect to the index page with a success message
        return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully');
    }
}

