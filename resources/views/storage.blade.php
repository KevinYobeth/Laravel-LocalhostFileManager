@extends('layouts.app')

@section('content')
<main class="py-4 solidbg">
    <div class="flex-center position-ref full-height">
        <ul class="itemText">
            @foreach($items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</main>
@endsection
