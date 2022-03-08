@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form class="form bg-white p-6 border-l" method="POST" action="{{ route('guitars.store') }}">
    @csrf
    <div>
        <label class="text-sm" for="guitar-name">Guitar Name</label>
        <input class="text-lg border-l" type="text" id="guitar-name" name="guitar-name">
    </div>
    <div>
        <label class="text-sm" for="brand">Brand</label>
        <input class="text-lg border-l" type="text" id="brand" name="brand">
    </div>
    <div>
        <label class="text-sm" for="year">Year Made</label>
        <input class="text-lg border-l" type="text" id="year" name="year">
    </div>
    <div>
        <button class="border-l" type="submit">submit</button>
    </div>
    </form>
</div>

@endsection
