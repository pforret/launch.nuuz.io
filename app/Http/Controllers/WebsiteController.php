<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteStoreRequest;
use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $websites = Website::all();

        return view('website.index', compact('websites'));
    }

    /**
     * @param \App\Http\Requests\WebsiteStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebsiteStoreRequest $request)
    {
        $website = Website::create($request->all());

        $request->session()->flash('website.title', $website->title);

        return redirect()->route('website.index');
    }
}
