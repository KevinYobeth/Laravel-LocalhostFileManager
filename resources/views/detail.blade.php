@extends('layouts.app')

@section('content')
<main class="py-4 solidbg">
    <div class="flex-center position-ref full-height">
        <h1>{{ $data }}</h1>
        <a href="../storage">
            <button style="margin-left: 5px" type="button" class="btn btn-light">Back to Storage</button>
        </a>

        <a href="./{{ $id }}/dl">
            <button style="margin-left: 10px" type="button" class="btn btn-secondary">Download</button>
        </a>

    </div>
</main>
@endsection
