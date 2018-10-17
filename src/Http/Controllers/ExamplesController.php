<?php namespace Mrcore\Components\Http\Controllers;

use Mrcore\Components\Http\Controllers\Controller;

class ExamplesController extends Controller
{
    /**
     * Display the welcome page
     *
     * @return Response
     */
    public function showDashboard()
    {
        $page = (object) ['key' => 'dashboard'];
        return view('components::examples', compact('page'));
    }


}
