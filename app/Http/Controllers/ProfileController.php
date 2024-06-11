<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $profiles = Profile::all();

        // Generate the correct URL for the photo
        foreach ($profiles as $profile) {
            $profile->photo_url = Storage::url($profile->photo_path); // Generate public URL for the image
        }

        return view('sites.site1', compact('profiles'));
    }
}
