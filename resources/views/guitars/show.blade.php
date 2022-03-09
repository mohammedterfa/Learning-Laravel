@extends('layout')

@section('content')
    <div>
        <h3>
            {{ $guitar['name'] }}
        </h3>
        <ul>
            <li>
                made by : {{ $guitar['brand'] }}
            </li>
            <li>
                year made : {{ $guitar['year_made'] }}
            </li>
        </ul>
    </div>
@endsection
