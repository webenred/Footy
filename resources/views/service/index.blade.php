@extends('base')
@section('content')
    <h1 class="text-xl p-5">services</h1>
    <a href="{{ route('create') }}" class="p-5">ajouter un service</a>
    
    
        @foreach ($services as $service)
            <div class="flex flex-col p-5 bg-slate-300 w-max m-5 space-y-5-">
                <span>name: {{ $service->name }}</span>
                <span>description: {{ $service->description }}</span>
                <span>category: {{ $service->category->name .' / ' .$service->category->description }}</span>
                <span>type: {{ $service->type->name}}</span>
                <span>basic price: {{ $service->pricing->base_formula }}</span>
                <span>extra price: {{ $service->pricing->extra_formula }}</span>
                <a href="{{ route('show', ['id' => $service->id]) }}">details</a>
            </div>

        @endforeach
    
@endsection