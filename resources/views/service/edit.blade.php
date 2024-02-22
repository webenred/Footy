@extends('base')
@section('content')
    @foreach ($services as $service)
    <h1 class="text-xl p-5">
        edit {{ $service->name }}
    </h1>
    <div class="p-5 bg-slate-300">
        <form action="{{ route('update', $service->id) }}" method="POST" class="flex flex-col ">
            @csrf
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug" value="{{ $service->slug }}">
            <label for="name">name</label>
            <input type="text" name="name" id="name" value="{{ $service->name }}">
            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="2">{{ $service->description }}</textarea>
            <label for="category">category</label>
            <select name="category_id" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="type">type</label>
            <select name="type_id" id="type">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                @endforeach
            </select>
            <label for="base_formula">basic formula</label>
            <input type="number" step="0.01" name="base_formula" id="base_formula" value="{{ $service->pricing->base_formula }}">
            <label for="extra_formula">extra formula</label>
            <input type="number" step="0.01" name="extra_formula" id="extra_formula" value="{{ $service->pricing->extra_formula }}">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">edit</button>
            
        </form>

    </div>
    @endforeach
    
@endsection