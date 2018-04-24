@extends ('layouts.master')

@section ('content')
    <h1>People List</h1>

    @if (count($people))
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Identification Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Issue</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($people as $person)
                        <tr>
                            <td>
                                <a href="/people/{{ $person->number }}">{{ $person->number }}</a>
                            </td>
                            <td>{{ $person->firstname }}</td>
                            <td>{{ $person->lastname }}</td>
                            <td>{{ $person->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a href="/people/{{ $person->id }}/edit">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection