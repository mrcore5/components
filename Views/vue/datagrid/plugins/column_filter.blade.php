@section('column_filter')
    <tfoot>
        <tr>
            <td v-for="(key, value) in header">
                <input type="text" class="form-control">
            </td>
        </tr>
    </tfoot>
@endsection

@section('script')
    <script>
        var column_filter = {
            methods: {
            }
        };
    </script>
    @parent
@endsection

@section('style')
    @parent
    <style>
    </style>
@endsection
