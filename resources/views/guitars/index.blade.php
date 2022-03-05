@extends('layout')

@section('content')

@if (count($guitars) > 0)
<div class="max-w-6wl mx-auto sm:px-6 lg:px-8">
    @foreach ($guitars as $guitar)
        <div>
            <h3>
                {{ $guitar['name'] }}
                <ul>
                    <li>
                        made by : {{ $guitar['brand'] }}
                    </li>
                </ul>
            </h3>
        </div>
@else
        <h2>There are no guitars to display</h2>
@endif
    <div>
        UserInput :{{ $userInput }}
    </div>
</div>

@endsection
