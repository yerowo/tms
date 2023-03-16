@extends('templates/index-template')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('conteudo')
    <section>
        <h1>
            @foreach ($users as $user)
                Hi, {{ $user->name }}
            @endforeach
        </h1>
        <div class="highlight">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae ad veniam, natus impedit suscipit quidem
                temporibus. Temporibus nostrum dolores ipsum ullam alias vel, qui incidunt, iusto omnis sed corporis earum
                quos sunt est laborum cum, nemo nesciunt. Minus natus eos corrupti soluta magnam ea vero fugit placeat fuga
                exercitationem nam eius, quisquam nostrum magni necessitatibus adipisci assumenda itaque nihil, ad rerum
                nesciunt aliquid debitis nisi maxime. Excepturi.</p>
        </div>
    </section>

    <section>
        <h1>View Board</h1>

        <div class="projetos">
            @foreach ($projects as $project)
                <figure>
                    <a href="{{ route('projects.board', $project->id) }}">
                        <h3>{{ $project->title }}</h3>
                        <p>{{ $project->description }}</p>
                    </a>
                </figure>
            @endforeach
            <figure>
                <a href="{{ route('projects.create') }}">
                    <svg fill="currentColor" viewbox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    New Project
                </a>
            </figure>
        </div>
    </section>
@stop
