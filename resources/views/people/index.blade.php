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
                        <th>Latest Date</th>
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
                            <td>{{ $person->updated_at->toFormattedDateString() }}</td>
                            <td>
                                {{-- Edit button --}}
                                <a class="btn btn-primary btn-sm" href="/people/{{ $person->id }}/edit" role="button">Edit</a>
                                {{-- Delete button --}}
                                <form action="/people/{{ $person->id }}" method="POST">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection