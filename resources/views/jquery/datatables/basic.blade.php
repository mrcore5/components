<div>
    <table id="{{ $component->id }}" class="table table-striped table-hover table-condensed">
        @if(isset($component->data))
            <!-- Data is static, not server side ajax -->
            <thead>
                <tr>
                    @foreach(array_keys($component->data[0]) as $key)
                        <th>{{ $key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($component->data as $data)
                    <tr>
                        @foreach(array_keys($component->data[0]) as $key)
                            <td>{{ $data[$key] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>
</div>

@section('script')
@parent
    <script>
    $(function() {
        var component = {!! json_encode($component) !!};
        
        //var search_timeout = undefined;

        var $oTable = $('#' + component.id).dataTable({
            'bProcessing': true,
            'bServerSide': false,
            //'sAjaxSource': '$ajaxUrl?viewmode=raw&table=$name&key=8feb8b9265a3878fcb204a591dcb91a5',

            //Default Page Size
            'iDisplayLength': 20,

            //Turn off initial sorting, I let my model do the default sort
            'aaSorting': [],

            //Set Language and Options for:
            'oLanguage': {
                //Text and options of page length dropdown
                'sLengthMenu': 'Show <select class=\"form-control input-sm\">'+
                    '<option value=10>10</option>'+
                    '<option value=15>15</option>'+
                    '<option value=20>20</option>'+
                    '<option value=25>25</option>'+
                    '<option value=30>30</option>'+
                    '<option value=40>40</option>'+
                    '<option value=50>50</option>'+
                    '<option value=75>75</option>'+
                    '<option value=100>100</option>'+
                    '<option value=-1>All</option>'+
                    '</select> entries'
            }

        });
        //}).fnSetFilteringDelay(); when you fix filter delay

        $('tfoot input').keyup( function (event) {
            if(event.keyCode!='9') {
                if(search_timeout != undefined) {
                    clearTimeout(search_timeout);
                }
                $this = this;
                search_timeout = setTimeout(function() {
                    search_timeout = undefined;
                    $oTable.fnFilter( $this.value, $('tfoot input').index($this) );
                }, 400);
            }
        });


        
    });
    </script>
@endsection