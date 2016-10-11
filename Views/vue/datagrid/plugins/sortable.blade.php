@section('script')
    <script>
        var sortable = {
            methods: {
                clickHeader: function () {
                    this.state.sortOrder = (this.state.sortOrder == 'asc') ? 'desc' : 'asc';
                    console.log('Sortable plugin ' + this.state.sortOrder);
                }
            }
        };
    </script>
    @parent
@endsection

@section('style')
    @parent
    <style>
        .dtest table thead tr {
            cursor: pointer;
        }
    </style>
@endsection
