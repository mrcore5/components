<div id="{{ $component->id }}" class='dtest' v-cloak>
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th v-for="(key, value) in columns" v-bind:class="columns[key].class" v-on:click="clickHeader(key)">@{{ key | capitalize }}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="row in rows">
                <td v-for="(key, value) in row">@{{{ value }}}</td>
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
                    queryString: '',
                }
            },

            computed: {

                columns: function() {
                    let columns = {};
                    if ('columns' in this.options) columns = this.options.columns;
                    if (this.rows.length > 0) columns = _.clone(this.rows[0]);

                    _.forEach(columns, function (value, key) {
                        columns[key] = { "value": value };
                    });

                    return columns;
                },

                rows: function() {
                    if (typeof this.source === 'string') return this.loadData();
                    return this.source;
                },

            },

            methods: {

                clickHeader: function(key) {
                    console.log('click header ' + key);
                    this.$emit('table:header:click', key);

                },

                loadData: function() {
                    // ajax load data
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
