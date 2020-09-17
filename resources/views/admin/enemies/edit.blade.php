@extends('layouts.app')

@section('content')
    <h1>Editar - {{ $enemy->name }}</h1>

    <form action="{{ route('enemy.update', ['id' => $enemy->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        
        @include('admin.enemies.form')

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection