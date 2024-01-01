<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteStoreRequest;
use App\Website;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebsiteController extends Controller
{
    public function index(Request $request): View
    {
        $websites = Website::all();

        return view('website.index', compact('websites'));
    }

    public function store(WebsiteStoreRequest $request)
    {
        $website = Website::create($request->all());

        $request->session()->flash('website.title', $website->title);

        return redirect()->route('website.index');
    }
}
