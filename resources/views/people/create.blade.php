@extends ('layouts.master')

@section ('content')
    <div class="col-md-8 blog-main">
        <h1>Create a Person</h1>

        <hr>

        <form method="POST" action="/people">

            {{ csrf_field() }}
            
            <div class="form-group">
                <label for="number">Identification Number</label>
                <input type="text" class="form-control" id="number" name="number">
            </div>

            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include ('layouts.errors')
        </form>
    </div>
@endsection
