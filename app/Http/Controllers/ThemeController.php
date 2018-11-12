<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::paginate(15);
        return view('administration.themes.index', compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        return view('administration.themes.show', compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {
        Theme::where('is_default', '=', 1)->update(['is_default' => 0]);
        $theme->update(['is_default' => 1, 'last_modified_by' => Auth::id()]);
        return redirect()->route('themes.show', compact('theme'))->withSuccess("Theme $theme->name was set as default");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        if(!$theme->is_default){
            $theme->update(['deleted_by'=> Auth::id()]);
            $theme->delete();
            return redirect()->route('themes.index')->withSuccess('Theme deleted successfully!');
        }
        else{ 
            return back()->withErrors(['message'=>"Theme $theme->name is set as default and cannot be deleted!"]);
        }
    }
}
