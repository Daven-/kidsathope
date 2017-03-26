@extends('layouts.index')
@section('content')

<h1 class="display-3">View & Edit Access</h1>


<h3>School name goes here</h3>
<h4>Staff member name goes here</h4>
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
      <li>This is</li>
      <li>the list</li>
      <li>of their students</li>
      <li>that they added</li>
    </ul>
  </div>
</div>
@endsection