@extends('layouts.template')

@section('content')
    <div class="content">
        <h1>Resultados da Pesquisa</h1>

        <ul>
            @foreach ($resultados as $resultado)
                <li>
                    <a href="{{ route('resultado.show', ['id' => $resultado->id]) }}">
                        {{ $resultado->nome }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
