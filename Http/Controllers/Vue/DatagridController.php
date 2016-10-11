<?php namespace Mrcore\Components\Http\Controllers\Vue;

use Mrcore\Components\Http\Controllers\Controller;

class DatagridController extends Controller
{
    /**
     * Display the welcome page
     *
     * @return Response
     */
    public function basicExample()
    {
        $page = (object) ['key' => 'datagrid', 'subkey' => 'datagrid-basic'];
        return view('components::vue.datagrid.examples.basic', compact('page'));
    }


}
