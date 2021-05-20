
@extends('layouts.project')
@section('title')
    Drawing with css —
@endsection
@section('p-title')
    drawings<br>with css.
@endsection
@section('skills','HTML / CSS')

@section('p-subtitle')
    Manipulating css figures to create something amazing.
@endsection
@section('description')
    With basic figures you can create almost everything!
    Challenge: Recreate a children's drawing with css. Final result? a cute drawing.
@endsection
@section('header-content')
    <div class="cocoen w-100">
        <img  src="/pictures/penguin-draw.jpg">
        <img src="/pictures/penguin-draw2.jpg">
    </div>
@endsection
@section('col-1','Duration')
@section('col-1-description','Two weeks')
@section('col-2','Resources')
@section('col-2-description')
    <a href="https://github.com/itselfcg/nyan-penguin"
       target="_blank">Github</a>,
    <a href="https://codepen.io/itselfcg/full/gOProLd"
       target="_blank">Codepen</a>
@endsection
