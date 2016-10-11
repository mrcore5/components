<div id="{{ $component->id }}" class='dtest' v-cloak>
    <table class="table table-striped table-hover table-condensed">
        <thead>
            <tr>
                <th v-for="(key, value) in header" v-on:click="clickHeader">@{{ key }}</th>
            </tr>            
        </thead>
        <tbody>
            <tr v-for="row in rows">
                <td v-for="(key, value) in row">@{{ value }}</td>
            </tr>
        </tbody>
        @if(in_array('column_filter', $component->plugins))
            <tfoot>
                <tr>
                    <td v-for="(key, value) in header">
                        <input type="text" class="form-control">
                    </td>
                </tr>            
            </tfoot>
        @endif
    </table>
</div>

@section('script')
@parent
    <script>
    (function() {
        var component = {!! json_encode($component) !!};
        //console.log(component);
        
        //Vue.mixin(sortable);
        var plugins = [];
        //Object.keys(component.plugins).forEach(function(plugin) {
        //    plugins[plugin] = this[plugin];
            //plugins.push(this[plugin]);
        //});
        component.plugins.forEach(function(plugin) {
            plugins.push(this[plugin]);
        });
       
        new Vue({
            el: '#'+component.id,

            /*mixins: function() {
                return [sortable];
            },*/
            //mixins: [this['sortable']],
            //mixins: this[component.plugins],
            //mixins: component.plugins,
            //mixins: [sortable],
            //mixins: eval(gg),
            mixins: plugins,
            //mixins: component.plugins.forEach(function(gg) {
            //    return this[gg];
            //}),

            data: {
                source: component.source,
                options: component.options,
                plugins: component.plugins,
                state: {
                    isLoaded: false,
                    sortOrder: 'desc',
                    sortColumn: '',
                    currentPage: 0,
                }
            },

            computed: {

                header: function() {
                    if ('columns' in this.options) return this.options.columns;
                    if (this.rows.length > 0) return this.rows[0];
                },

                rows: function() {
                    if (typeof this.source === 'string') return this.loadData();
                    return this.source;
                },

            },

            methods: {

                clickHeader: function() {
                    console.log('click header');

                },

                loadData: function() {
                    // ajax load data
                }
            }
        });
    })();
    </script>
@endsection