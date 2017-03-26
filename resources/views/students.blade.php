
@extends('layouts.index')
@section('content')
<h1 class="display-3">View &amp; Edit Aces</h1>
<h3>School name goes here</h3>
<h4>Student name goes here</h4>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-6">
    {{--{{ Auth::check() }}--}}

    @if (Auth::check())

        <h1>{{ access()->hasRole('Administrator') }}</h1>
        <h1>{{ $logged_in_user }}</h1>
        <h1>{{ $logged_in_user->roles }}</h1>
        <h1>{{ $logged_in_user->roles[0]->name }}</h1>
        <h1>{{ Auth::user()->name  }}</h1>
        <h1>{{ auth()->id() }}</h1>
        <h1>{{ auth()->user()->getAuthPassword() }}</h1>

        {{--<h1>{{ Auth::user()->roles()->name  }}</h1>--}}

    @endif

    <h4>Who is an Ace in your book?</h4>

    @php
      $staff=array("Joe","Jim","Tim")
    @endphp

    <ul class="list-unstyled">
      <!--@foreach($students as $student)
        <li>{{ $student }}</li>
      @endforeach -->
      @foreach($staff as $person)
        <li>
          <div class="col-md-8 " >
             <p>{{ $person }} last name (Grade x : Type of Teacher)</p>
          </div>
          <div class="col-md-4">
            <a href="#" class="btn btn-success">Yes</a> <a href="#" class="btn btn-danger">No</a>
          </div>
        </li>
      @endforeach

      <!--li>This is <a href="#" class="btn btn-success">Yes</a> <a href="#" class="btn btn-danger">No</a></li>
      <li>a list <a href="#" class="btn btn-success">Yes</a> <a href="#" class="btn btn-danger">No</a></li>
      <li>of students <a href="#" class="btn btn-success">Yes</a> <a href="#" class="btn btn-danger">No</a></li-->
    </ul>
    <div class="row student-page-input-spacing">
      <div class="col-md-12">
        <h4>Is there anyone else? If so, add them below!</h4>
        <form>
          <fieldset>
            <div class="row">
            <div class="form-group col-md-8">
              <!--div class="col-lg-4"-->
                <input type="text" class="form-control" id="inputEmail" placeholder="ex: John Doe" autocomplete="off">
              <!--/div-->
            </div>
            <div class="form-group col-md-4">
              <!-- div class="col-lg-8 col-lg-offset-2"-->
                <button type="submit" class="btn btn-primary">Submit</button>
              <!--/div-->
            </div>
          </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
