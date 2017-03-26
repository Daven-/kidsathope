@extends('layouts.index')
@section('content')

<div class="container main">
    <h1 class="display-3">View & Edit Aces</h1>
        <h3>Alexander Hamilton Elementary</h3>
        <h4>Eliza Schuyler</h4>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12">
          <div class="tabbable">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#aces" data-toggle="tab"><h4>My Aces Students</h4></a></li>
              <li><a href="#all" data-toggle="tab"><h4>View All Students</h4></a></li>
            </ul>
            <div class="tab-content">

              <div class="tab-pane active" id="aces">
                <ul class="list-unstyled student-list">
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234">Aaron Burr</a></li>
                  <li><span class="idnum">768</span><a href="student.html?herculesmulligan768">Hercules Mulligan</a></li>
                  <li><span class="idnum">119</span><a href="student.html?lafayette119">Lafayette</a></li>
                </ul>
              </div>
              
              <div class="tab-pane" id="all">
                <div class="student-search">
                  <form class="form-inline">
                    <div class="form-group inline-space">
                      <label class="sr-only" for="studentName">Email address</label>
                      <input type="text" class="form-control" id="studentName" placeholder="Search">
                    </div>
                    <select class="form-control inline-space">
                      <option disabled>Filter by grade</option>
                      <option>HeadStart</option>
                      <option>Pre-K</option>
                      <option>Kindergarten</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                    <button type="submit" class="btn btn-primary inline-space">Search</button>
                  </form>
                </div>
                <ul class="list-unstyled student-list">
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234">Aaron Burr</a></li>
                  <li><span class="idnum">768</span><a href="student.html?herculesmulligan768">Hercules Mulligan</a></li>
                  <li><span class="idnum">119</span><a href="student.html?lafayette119">Lafayette</a></li>
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234">Thedosia Burr</a></li>
                  <li><span class="idnum">119</span><a href="student.html?lafayette119">Peggy Schuyler</a></li>
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234"></a>Thomas Jefferson</li>
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234"></a>George Washington</li>
                  <li><span class="idnum">234</span><a href="student.html?aaronburr234"></a>James Madison</li>
                </ul>
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li>
                      <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                      <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
      
        </div>
      </div>
</div>

@endsection