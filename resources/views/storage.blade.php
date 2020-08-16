@extends('layouts.app')

@section('content')
<main class="py-4 solidbg">
    <div class="flex-center position-ref full-height">
        @foreach(range(0, count($basename) - 1) as $y)
            <ul class="itemText">
                <a href="./storage/{{ $y }}">
                    <li>{{ $basename[$y] }}</li>
                </a>
                {{-- <li>{{$extension[$y] }}</li> --}}
            </ul>
        @endforeach
    </div>
</main>
@endsection
