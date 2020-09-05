@extends('layouts.app')

@section('content')
<main class="py-4 solidbg">
    <div class="container">
        <div class="row separator d-flex justify-content-center">
            @foreach(range(0, count($basename) - 1) as $y)

            <div class="card col-md-5" style="width: 18rem; margin: 5px">
                <div class="card-body">
                    <h5 class="card-title">{{ $basename[$y] }}</h5>
                    <p class="card-text">
                        Extension: .{{ $extension[$y] }} <br>
                        Size: {{ round($size[$y] / 1024 / 1024, 2) }} MB</p>
                    <a href="./storage/{{ $y }}" class="btn btn-primary">View File</a>
                </div>
            </div>

            @endforeach
        </div>
    </div>

</main>
@endsection