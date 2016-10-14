<div id="{{ $component->id }}" class='dtest' v-cloak>
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th v-for="(value, key) in columns" v-bind:class="columns[key].class" v-on:click="clickHeader(key)">@{{ _.capitalize(key) }}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in state.rows">
                <td v-for="(value, key) in row" v-html="value"></td>
            </tr>
        </tbody>
        @if ($component->hasPlugin('column_filter'))
            @yield('column_filter')
        @endif
    </table>
</div>

@section('script')
@parent
    <script>

    (function() {
        var component = {!! json_encode($component) !!};

        new Vue({
            el: '#'+component.id,

            mixins: _.map(component.plugins, function (plugin) {
                return this[plugin];
            }),

            data: {
                source: component.source,
                options: component.options,
                plugins: component.plugins,
                state: {
                    isLoaded: false,
                    rows: [],
                    queryString: '',
                }
            },

            created: function () {
                if (typeof this.source === 'string') {
                    this.loadData();
                } else {
                    this.state.rows = this.source;
                }

            },

            computed: {

                columns: function() {
                    var columns = {};
                    if ('columns' in this.options) columns = this.options.columns;
                    if (this.state.rows.length > 0) columns = _.clone(this.state.rows[0]);
                    _.forEach(columns, function (value, key) {
                        columns[key] = { "value": value };
                    });

                    return columns;
                },

            },

            methods: {

                clickHeader: function(key) {
                    console.log('click header ' + key);
                    eventBus.$emit('table:header:click', key);
                },

                loadData: function() {
                    $.ajax({
                        url: this.source + '/data',
                        dataType: 'json',
                        async: true,
                       success: function(data) {
                           this.state.rows = data.records
                        }.bind(this),
                    });
                },

                /*columnHeaderClass: function(key) {
                    this.columns[key].class = (_.has(this.columns[key], 'class')) ? this.columns[key].class + ' common' : 'common';
                    return this.columns[key].class;
                }*/
            }
        });
    })();
    </script>
@endsection
