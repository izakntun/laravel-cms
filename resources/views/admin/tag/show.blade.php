@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ver etiqueta
                    </div>
                    <div class="panel-body">
                        <p><strong>Nombre: </strong>{{ $tag->name }}</p>
                        <p><strong>Slug: </strong>{{ $tag->slug }}</p>
                        <div class="form-group">
                            {{ Html::link('/tags', 'Volver a etiquetas', ['class' => 'btn btn-sm btn-default']) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection