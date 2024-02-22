@extends('base')
@section('content')
    <h1 class="text-xl p-5">
        add service
    </h1>
    <div class="p-5 bg-slate-300">
        
        <form action="{{ route('store') }}" method="POST" class="flex flex-col ">
            @csrf
            <label for="slug">slug</label>
            <input type="text" name="slug" id="slug">
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus dolorem totam porro. Mollitia, vero. Odio tempore dolore temporibus quia velit ex consequatur voluptates, officia repellendus eos? Esse, explicabo? Fuga, qui?</textarea>
            <label for="category">category</label>
            <select name="category_id" id="category">
                <option value=""></option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="type">type</label>
            <select name="type_id" id="type">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
            <label for="price">basic formula</label>
            <input type="number" step="0.01" name="base_formula" id="prices">
            <label for="price">extra formula</label>
            <input type="number" step="0.01" name="extra_formula" id="prices">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">add</button>
            
        </form>

    </div>
@endsection