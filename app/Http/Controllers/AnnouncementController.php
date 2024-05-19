<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function createAnnouncement()
    {
        return view('createAnnouncement');
    }

    public function store(Request $request)
    {
        $announcement = Announcement::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json($announcement);
    }
}
