@extends('layouts.index')
@section('content')

<h1 class="display-3">View & Edit Access</h1>

<h3>School name goes here</h3>
@foreach( $staffSchoolName as $ssn)
  <h4>{{ $ssn->name }}</h4>
  @endforeach
<h4>{{ $name['fname'] }}</h4>
<h4>{{ $name['lname'] }}</h4>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-6">
    <h4>Who have you been an ace to?</h4>
    <form>
          <label for="">Students First Name
            <input type="text" class="form-control" id="fname" placeholder="ex: John Doe" autocomplete="off">
          </label>
      <label for="">Students Last Name
        <input type="text" class="form-control" id="fname" placeholder="ex: John Doe" autocomplete="off">
      </label>
            <button type="submit" class="btn btn-primary btn-default">Submit</button>
    </form>

    <ul>
      @foreach( $students as $student)
        <li>{{ $student->fname }} {{ $student->lname }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endsection