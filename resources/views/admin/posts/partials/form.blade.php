{{ Form::hidden('user_id', auth()->user()->id) }}
<div class="form-group">
    {{ Form::label('category_id', 'Categorías') }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control first-disabled', 'placeholder' => 'Seleccione una opción']) }}
</div>
<div class="form-group">
    {{ Form::label('name', 'Nombre de la categoría') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'readonly' => true]) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file') }}
</div>
<div class="form-group">
    {{ Form::label('status', 'Estado') }}
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>
<div class="form-group">
    {{ Form::label('tags', 'Etiquetas') }}
    <div>
        @foreach($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
            </label>
        @endforeach
    </div>
</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Html::link('/posts', 'Cancelar', ['class' => 'btn btn-sm btn-default']) }}
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary', 'id' => 'name']) }}
</div>

@section('scripts')
    <script src="{{ asset('vendor/stringToSlug/speakingurl.js') }}"></script>
    <script src="{{ asset('vendor/stringToSlug/jquery.stringtoslug.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#name, #slug').stringToSlug({
                callback : function (text) {
                    $('#slug').val(text);
                }
            });

            $( "select.first-disabled option:first-child" ).attr("disabled", "disabled");
        });

        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.config.language = 'es';
        CKEDITOR.replace('body');
    </script>
@endsection
{{-- continuar el curso en el video 18 --}}