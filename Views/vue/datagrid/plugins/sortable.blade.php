@section('script')
    <script>
        var sortable = {

            data: {
                'state': {
                    'sortColumn': null,
                    'sortOrder': 'desc'
                }
            },

            created: function () {
                this.$on('table:header:click', this.sortColumn);
                this.setHeaderClass();
            },

            methods: {
                /*clickHeader: function () {
                    this.state.sortOrder = (this.state.sortOrder == 'asc') ? 'desc' : 'asc';
                    console.log('Sortable plugin ' + this.state.sortOrder);
                },*/

                sortColumn: function (key) {
                    this.state.sortColumn = key;
                    this.state.sortOrder = (this.state.sortOrder == 'desc') ? 'asc' : 'desc';
                    console.log('sort column ' + key);
                },

                setHeaderClass: function () {
                    _.forEach(this.columns, function (column) {
                        column.class = (_.has(column, 'class')) ? column.class + ' sortable' : 'sortable';
                    });
                },

                /*columnHeaderClass: function(key) {
                    this.columns[key].class = (_.has(this.columns[key], 'class')) ? this.columns[key].class + ' sortable' : 'sortable';
                    return this.columns[key].class;
                }*/
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
