@extends('base')
@section('content')

<div class="flex flex-col p-5 bg-slate-300 w-max m-5 gap-2">
    @foreach ($services as $service)
        <span>name: {{ $service->name }}</span>
        <span>description: {{ $service->description }}</span>
        <span>category: {{ $service->category->name .' / ' .$service->category->description }}</span>
        <span>type: {{ $service->type->name}}</span>
        <span>basic price: {{ $service->pricing->base_formula }}</span>
        <span>extra price: {{ $service->pricing->extra_formula }}</span>
        <a href="{{ route('edit', ['id' => $service->id]) }}">update</a>
        <a href="{{ route('destroy', ['id' => $service->id]) }}">delete</a>

    @endforeach
</div>
@endsection