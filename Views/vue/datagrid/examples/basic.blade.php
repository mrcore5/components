@extends('components::layout')
@include('components::vue.datagrid.plugins.sortable')
@include('components::vue.datagrid.plugins.column_filter')

@section('css')
    @parent
@stop

@section('page-title')
     Datagrid - Basic Example
@stop

@section('wb-content')

    <h1>A vue datagrid component example</h1>

    <div>
        <hr>
        <h3>Grid Instance #1</h3>
        @include('components::vue.datagrid.basic', ['component' => (object) [
            'id' => 'basic1',
            /*'source' => '"/app/vfi/"',*/
            'source' => [
                ["id" => 1, "key" => "abcd", "name" => "ABCD", "enabled" => true],
                ["id" => 2, "key" => "efgh", "name" => "EFGH", "enabled" => true],
                ["id" => 3, "key" => "ijkl", "name" => "IJKL", "enabled" => true],
                ["id" => 4, "key" => "mnop", "name" => "MNOP", "enabled" => true]
            ],
            'options' => [
                'plugins' => [
                    'sortable' => [
                        'column' => 'name',
                        'order' => 'desc'
                    ]
                ]
            ],
            'plugins' => [
                'sortable',
                'column_filter'
            ],
        ]])

    </div>






    <div>
        <hr>
        Other content here...
    </div>

@stop

@section('script')
    @parent
@stop
