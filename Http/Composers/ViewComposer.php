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
            ['key' => 'datagrid', 'display' => 'Vue Datagrid', 'subnav' => [
                ['key' => 'datagrid-basic', 'display' => 'Basic', 'url' => '/app/gui-components/examples/vue/datagrid/basic'],
                ['key' => 'datagrid-advanced', 'display' => 'Advanced', 'url' => '/app/gui-components/examples/vue/datagrid/advanced']
            ]],
            ['key' => 'datatables', 'display' => 'Jquery Datatables', 'subnav' => [
                ['key' => 'datatables-basic', 'display' => 'Basic', 'url' => '/app/gui-components/examples/jquery/datatable/basic'],
                ['key' => 'datatables-advanced', 'display' => 'Advanced', 'url' => '/app/gui-components/examples/jquery/datatable/advanced']
            ]],
            ['key' => 'bootstrap', 'display' => 'Bootstrap', 'subnav' => [
                ['key' => 'components', 'display' => 'Components', 'url' => '/app/gui-components/examples/bootstrap/components'],
            ]],
        ]);
    }
}
