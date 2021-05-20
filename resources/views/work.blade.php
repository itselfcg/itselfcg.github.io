@extends('layouts.master')

@section('content')

        <div class="row text-center" style="padding-bottom: 10em;">
            <div class="col">
                <h4 class="text-md-black">hello~, <span class="text-green" style="display: inline-block;"> I’m itzel.</span></h4>
                <h5 class="text-gray" style="font-weight: normal"> I'm pasionate about improvement. </h5>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 pt-4">
                    <a href="/work/cinematik">

                    <div class="preview">
                        <img class="w-100 rounded" src="pictures/cinematik.jpg">
                        <div class="content" style="background-color: rgba(var(--cinematik-rgb),.9);color: white;">
                            <div class="absolute-center">
                                <h8>cinematik</h8><br>
                                <h9>Mobile UI/UX</h9>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-6 pt-4">

                    <div class="preview">
                        <img class="w-100 rounded" src="pictures/flawlessbox.jpg">
                        <div class="content" style="background-color: rgba(var(--pink-rgb),.9);">
                            <div class="absolute-center">
                                <h8>coming soon</h8><br>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 pt-4">
                    <a href="/work/the-poetry-club">

                    <div class="preview">
                        <img class="w-100 rounded" src="pictures/the-poetry-club.jpg">
                        <div class="content" style="background-color: rgba(0,0,0,.95); color: white;">
                                <div class="absolute-center">

                                    <h8>the poetry club</h8><br>
                                    <h9>Bootstrap 4 / JS</h9>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-md-6 pt-4">
                    <div class="preview">
                        <img class="w-100 rounded" src="pictures/baja-discover.jpg">
                        <div class="content" style="background-color: rgba(var(--yellow-rgb),.9);">
                            <div class="absolute-center">
                                <h8>coming soon</h8><br>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 pt-4">
                    <a href="/work/penguin">
                        <div class="preview">
                            <img class="w-100 rounded" src="pictures/draws.jpg">
                            <div class="content" style=" color:black;
                            background-color: rgba(var(--gray-rgb),.9);">
                                <div class="absolute-center">
                                    <h8>drawing with html</h8><br>
                                    <h9>HTML / CSS</h9>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
@endsection
