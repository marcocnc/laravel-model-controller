
    @extends('layouts.main')

    @section('content')
        <div class="container text-center py-5">
            <h1 class="pb-5">{{ $title }}</h1>
            <h5>{{ $contact }}</h5>
            <p> {{ $email }} </p>
        </div>
    @endsection
