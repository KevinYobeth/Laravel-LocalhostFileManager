@extends('layouts.app')

@section('content')
<main class="py-4 bg">
    <div class="flex-center position-ref full-height">
        {{-- Plz --}}
        <img class="landIllustration" src="img/storageIllustration.svg" alt="">
        <div class="landText">
            <h1 style="font-weight: bold; font-size: 80px">NEW FACE</h1>
            <h2 style="margin-left: 3px">FOR A LOCALHOST STORAGE</h2>
            <a href="./storage">
                <button style="margin-left: 5px" type="button" class="btn btn-light">View Storage</button>
            </a>
            <button style="margin-left: 10px" type="button" class="btn btn-secondary">Contact Us</button>
        </div>

    </div>
</main>

@endsection
