@extends('layouts.app')

@section('content')
    <h1>Editar - {{ $item->name }}</h1>

    <form action="{{ route('item.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">        
        @method('PUT')
        
        @include('admin.items.form')

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection