@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-l" method="POST" action="{{ route('guitars.update', ['guitar' => $guitar->id]) }}">
    @csrf
    @method('PUT')
    <div>
        <label class="text-sm" for="guitar-name">Guitar Name</label>
        <input class="text-lg border-l" type="text" id="guitar-name" value="{{ $guitar->name }}" name="guitar-name">
        @error('guitar-name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand">Brand</label>
        <input class="text-lg border-l" type="text" id="brand" value="{{ $guitar->brand }}" name="brand">
        @error('brand')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="year">Year Made</label>
        <input class="text-lg border-l" type="text" id="year" value="{{ $guitar->year_made }}" name="year">
        @error('year')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <button class="border-l" type="submit">submit</button>
    </div>
    </form>
</div>

@endsection
