@extends('layouts.master')

@section('content')
    <div class="container fade-in">

        <div class="row text-center" style="padding-bottom: 10em;">
            <div class="col">
                <h4 class="text-md-black">hello~, <span class="text-green"> I’m itzel.</span></h4>
                <h5 class="text-gray"> I'm pasionate about improvement. </h5>
            </div>
        </div>

        <div class="row w-100">
            <div class="col-md-6 pt-4">
                <div class="preview">
                    <img class="w-100" src="pictures/draws.jpg">
                    <div class="content" style="background-color: rgba(var(--gray-rgb),.9);">
                        <div class="absolute-center">
                            <h8>drawing with html</h8><br>
                            <h9>HTML + CSS</h9>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 pt-4">
                <div class="preview">
                    <img class="w-100" src="pictures/the-poetry-club.jpg">
                    <div class="content" style="background-color: rgba(0,0,0,.95); color: white;">
                            <div class="absolute-center">

                                <h8>the poetry club</h8><br>
                                <h9>Bootstrap 4</h9>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row w-100 ">
            <div class="col-md-6 pt-4">
                <div class="preview">
                    <img class="w-100" src="pictures/baja-discover.jpg">
                    <div class="content" style="background-color: rgba(var(--yellow-rgb),.9);">
                        <div class="absolute-center">
                            <h8>baja discover</h8><br>
                            <h9>Bootstrap 4</h9>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-4">

                <div class="preview">
                    <img class="w-100" src="pictures/flawlessbox.jpg">
                    <div class="content" style="background-color: rgba(var(--pink-rgb),.9);">
                        <div class="absolute-center">
                            <h8>flawlessbox</h8><br>
                            <h9>Laravel 8 + PostgreSQL + Bootstrap 5</h9>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
