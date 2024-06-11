<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\Profile;
use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'site_name' => 'required|string|max:255',
            'specialized' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'about_me' => 'required|string',
            'first_address' => 'required|string|max:255',
            'second_address' => 'nullable|string|max:255',
            'third_address' => 'nullable|string|max:255',
            'first_phone' => 'required|string|max:15',
            'second_phone' => 'nullable|string|max:15',
            'domain' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,tmp|max:2048',
        ]);

        // Create the tenant
        $tenant = Tenant::create(['id' => $request->domain]);
        $tenant->domains()->create(['domain' => $request->domain . '.localhost']);

        // Store the uploaded photo in storage/app/public/images directory
        $photoPath = $request->file('photo')->store('images', 'public');

        // Run the tenant-specific code
        return $tenant->run(function () use ($request, $validated, $photoPath) {
            return Profile::create([
                'site_name' => $validated['site_name'],
                'specialized' => $validated['specialized'],
                'experience' => $validated['experience'],
                'about_me' => $validated['about_me'],
                'first_address' => $validated['first_address'],
                'second_address' => $validated['second_address'],
                'third_address' => $validated['third_address'],
                'first_phone' => $validated['first_phone'],
                'second_phone' => $validated['second_phone'],
                'photo_path' => $photoPath, // Save relative path to the image
                'domain' => $validated['domain'],
            ]);
        });
    }
}
