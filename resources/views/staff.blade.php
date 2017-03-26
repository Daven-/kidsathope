@extends('layouts.index')
@section('content')
<h1 class="display-3">View & Edit Aces</h1>
<h3>School name goes here</h3>
<h4>Staff member name goes here</h4>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-6">
    <h4>Who have you been an ace to?</h4>
    <form>
      <fieldset>
        <div class="form-group">
          <div class="col-lg-4">
            <input type="text" class="form-control" id="inputEmail" placeholder="ex: John Doe" autocomplete="off">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
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