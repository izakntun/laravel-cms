<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoría') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly' => true]) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Html::link('/categories', 'Cancelar', ['class' => 'btn btn-sm btn-default']) }}
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary', 'id' => 'name']) }}
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/speakingurl.js') }}"></script>
    <script src="{{ asset('vendor/stringToSlug/jquery.stringtoslug.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#name, #slug').stringToSlug({
                callback : function (text) {
                    $('#slug').val(text);
                }
            })
        });
    </script>
@endsection