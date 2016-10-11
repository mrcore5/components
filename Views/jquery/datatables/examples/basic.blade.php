@extends('components::layout')

@section('css')
    @parent
@stop

@section('page-title')
     Datatable - Basic Example
@stop

@section('wb-content')

    <h1>A vue datatables.js component example</h1>

    <div>
        <hr>
        <h3>Table Instance #1</h3>
        @include('components::jquery.datatables.basic', ['component' => (object) [
            'id' => 'basic1',
            /*'source' => '"/app/vfi/"',*/
            'data' => [
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
