<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $shortCode = Str::random(10);

        ShortUrl::create([
            'original_url' => $request->url,
            'short_code' => $shortCode
        ]);

        return redirect()->back()->with('shortened_url', url($shortCode));
    }

    public function redirect($shortCode)
    {
        $shortUrl = ShortUrl::where('short_code', $shortCode)->firstOrFail();
        return redirect($shortUrl->original_url);
    }
}
