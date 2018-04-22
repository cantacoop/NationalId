@extends ('layouts.master')

@section ('content')
    @if (isset($person))
        <h2>{{ $person->firstname}} {{ $person->lastname }}</h2>
        <p class="lead text-muted">{{ $person->number }}</p>
    @endif
@endsection