@extends('layouts.app')

@section('content')
    <div class="row">
        <h1>Administrador</h1>
    </div>
        
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Entidad</th>
                    <th scope="col">Cantidad de elementos</th>
                    <th scope="col">Acciones</th>
                </tr>
            
            </thead>
            <tbody>
                @foreach($report as $item)
                <tr>
                    <td>{{ $item["name"] }}</td>
                    <td>{{ $item["counter"] }}</td>
                    <td>
                    <a href="{{ route($item['route']) }}" class="btn {{ $item['class'] }} mb-2 mt-2">Ir a {{ $item['name'] }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        
        </table>
    </div>
@endsection