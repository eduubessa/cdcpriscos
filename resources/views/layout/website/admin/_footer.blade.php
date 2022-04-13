@section('footer')
        @show
        </div>
        {!! Html::script('/js/vue.min.js') !!}
        {!! Html::script('/js/jquery.min.js') !!}
        {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js') !!}
        {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/i18n/defaults-*.min.js') !!}
        {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') !!}
        {!! Html::script('/js/admin.script.js') !!}
    </body>
</html>
@stop