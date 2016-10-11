<?php namespace Mrcore\Components\Http\Composers;

use Mrcore;
use Illuminate\Contracts\View\View;

class ViewComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        // If you want the wiki post dropown menu to show, this $post is required.
        /*$post = Mrcore::post()->prepare();
        $view->with('post', $post);*/

        $view->with('navTitle', 'Navigation');
        $view->with('navItems', [
            ['key' => 'dashboard', 'display' => 'Dashboard', 'url' => '/app/gui-components'],
            ['key' => 'datagrid', 'display' => 'Datagrid', 'subnav' => [
                ['key' => 'datagrid-basic', 'display' => 'Basic', 'url' => '/app/gui-components/examples/datagrid/basic'],
                ['key' => 'datagrid-advanced', 'display' => 'Advanced', 'url' => '/app/gui-components/examples/datagrid/advanced']
            ]],
            ['key' => 'datatables', 'display' => 'Datatables', 'subnav' => [
                ['key' => 'datatables-basic', 'display' => 'Basic', 'url' => '/app/gui-components/examples/datatable/basic'],
                ['key' => 'datatables-advanced', 'display' => 'Advanced', 'url' => '/app/gui-components/examples/datatable/advanced']
            ]],
        ]);
    }
}
