<?php namespace Mrcore\Components\Http\Controllers\Jquery;

use Mrcore\Components\Http\Controllers\Controller;

class DatatablesController extends Controller
{
    /**
     * Display the welcome page
     *
     * @return Response
     */
    public function basicExample()
    {
        $page = (object) ['key' => 'datatables', 'subkey' => 'datatables-basic'];
        return view('components::jquery.datatables.examples.basic', compact('page'));
    }


}
