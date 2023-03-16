@extends('templates.index-template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/projeto-form.css') }}">
@endpush

@section('conteudo')
    <div id="card">
        <h2>Create new project</h2>

        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <fieldset>
                <label>Title</label>
                <input type="text" name="title">

                <label>Description</label>
                <textarea rows="5" name="description"></textarea>
            </fieldset>

            <input type="submit" value="create" id="cadastrar" class="btn green">
        </form>
    </div>

@stop
