<?php namespace Mrcore\Components\Http\Controllers\Bootstrap;

use Mrcore\Components\Http\Controllers\Controller;

class BootstrapController extends Controller
{
    /**
     * Display the welcome page
     *
     * @return Response
     */
    public function components()
    {
        $page = (object) ['key' => 'bootstrap', 'subkey' => 'components'];
        return view('components::bootstrap.components', compact('page'));
    }

}
