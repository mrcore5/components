@section('script')
    <script>
        var checkbox = {

            data: {
                'state': {

                }
            },

            created: function () {
                //this.$on('table:header:click', this.sortColumn);
                //this.setHeaderClass();
                this.prepend();
            },

            methods: {

                prepend: function () {
                    // this wont work
                   /* let that = this;
                    _.forEach(this.rows, function (row, key) {
                        that.rows[key] = _.merge({checkbox: "<input type='checkbox' v-on:click='testCheckbox' />"}, row);
                    });*/
                },

                testCheckbox: function () {
                    console.log('clicked');
                }

            }
        };
    </script>
    @parent
@endsection

@section('style')
    @parent
@endsection
