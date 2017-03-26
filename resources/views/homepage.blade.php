@extends('layouts.index')
@section('content')

<div class="container-flex main">
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-3">Welcome to Aces Tracking!</h1>
                    <p>All Children are Capable of Success, No Exceptions!</p>
                </div>
            </div>
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <img src="img/site/club.png" alt="Ace of Clubs" class="subhead-image">
                    <h3>Caring</h3>
                    <p>Children need adults who are invested in their lives.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/site/diamond.png" alt="Ace of Diamonds" class="subhead-image">
                    <h3>Opportunity</h3>
                    <p>Opportunities for success must be available to all children.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/site/spade.png" alt="Ace of Spades" class="subhead-image">
                    <h3>Expectations</h3>
                    <p>Kids benefit from having achievable yet challenging expectations.</p>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-secondary pull-right" href="criteria.html" role="button">Learn more about Aces &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection