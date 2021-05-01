
@extends('layouts.project')
@section('p-title')
    the<br> poetry<br> club.
@endsection
@section('skills','Bootstrap 4 / JS')

@section('p-subtitle')
    Spicing things up with a front-end library.
@endsection
@section('description')
     Challenge: Upgrade an old project created with css to bootstrap.
    Final result? A responsive website with interactive poetry.
@endsection

@section('project-content')
    <div class="row no-gutters">
        <div class="col">
            <img class="img-fluid" src="/pictures/the-poetry-club11.jpg">

        </div>

    </div>


@endsection

@section('duration','Four Weeks')
@section('resources')
    <a href="https://github.com/itselfcg/sor-juana-fanpage"
       target="_blank">Github</a>,
    <a href="https://codepen.io/itselfcg/full/OJyEvRg"
       target="_blank">Codepen</a>,
    <a href="https://sor-juana.herokuapp.com/"
       target="_blank">Heroku</a>
@endsection
