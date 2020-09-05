@extends('layouts.app')

@section('content')
<main class="py-4 solidbg">
    <div class="flex-center position-ref full-height">
        <br>
        <br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="{{ asset('/img/storageIllustration.svg') }}" alt="" width="100%"
                        class="image-fluid">
                </div>
                <div class="col-md-5 offset-md-1">
                    <h1>{{ $fileName }}</h1>
                    <h5> {{ round($fileSize / 1024 / 1024, 2) }} MB</h5>
                    <a href="../storage">
                        <button type="button" class="btn btn-light">Back to Storage</button>
                    </a>
                    <a href="./{{ $id }}/dl">
                        <button style="margin-left: 10px" type="button" class="btn btn-secondary">Download</button>
                    </a>
                </div>
            </div>
        </div>


    </div>
</main>
@endsection
