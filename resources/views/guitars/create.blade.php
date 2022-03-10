@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-l" method="POST" action="{{ route('guitars.store') }}">
    @csrf
    <div>
        <label class="text-sm" for="name">Guitar Name</label>
        <input class="text-lg border-l" type="text" id="name" value="{{ old('name') }}" name="name">
        @error('guitar-name')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="brand">Brand</label>
        <input class="text-lg border-l" type="text" id="brand" value="{{ old('brand') }}" name="brand">
        @error('brand')
            <div class="form-error">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label class="text-sm" for="year_made">Year Made</label>
        <input class="text-lg border-l" type="text" id="year_made" value="{{ old('year_made') }}" name="year_made">
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
