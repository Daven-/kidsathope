@extends('layouts.index')
@section('content')

    <h1 class="display-3">View & Edit Access</h1>
    <?php
    $nums = array("K", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
    ?>

    <h4>{{ $name['fname'] }} {{ $name['lname'] }}</h4>
    <h3>School name goes here</h3>
    @foreach( $staffSchoolName as $ssn)
        <h4>{{ $ssn->name }}</h4>
    @endforeach
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-6">
            <h4>Who have you been an ace to?</h4>
            <form>
                <div class="form-group">
                    {{ csrf_token() }}
                    <label class="control-label">Input addons</label>
                    <div class="input-group">
                        <input type="text" placeholder="First Name" class="form-control">
                        <span class="input-group-btn"></span>
                        <input type="text" placeholder="Last Name" class="form-control">
                        <span class="input-group-btn"></span>
                        <select type="text" placeholder="Last Name" class="form-control" style="width:60px;">
                            @foreach ($nums as $num)
                                <option value="{{$num}}">{{$num}}</option>
                            @endforeach
                        </select>
                        <span class="input-group-btn"></span>
                        <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Add Student</button>
          </span>
                    </div>
                </div>
            </form>

            <ol>
                @foreach ($students as $student)
                    <li>{{$student->fname}} {{$student->fname}}</li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection