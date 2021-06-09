@section('title')
    Cinematik —
@endsection


@extends('layouts.project')

@section('p-title')
    cinematik.
@endsection

@section('p-subtitle')
    Creating user-centered designs.
@endsection
@section('description')
    Cinematik was my first project for the Google UX Design Professional Certificate.
    Keep scrolling to learn about this project!
@endsection
@section('skills','Mobile UI/UX')


@section('header-content')
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="/pictures/cinematik/cinematik2.jpg" alt="Cinematik App Mockup">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/cinematik/cinematik2b.jpg" alt="Cinematik App Mockup 2">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>@endsection

@section('duration','Five Weeks')

@section('col-1','Project')
@section('col-1-description','Cinematik')
@section('col-2','Role')
@section('col-2-description','Ux Designer')
@section('col-3','Duration')
@section('col-3-description','5 weeks')
@section('resources')
    <a href="https://www.figma.com/proto/CBiJDYs7GGKhDUy4tzJFsM/Cinematik-v2?node-id=239%3A19403&scaling=scale-down&page-id=239%3A254"
       target="_blank">Prototype</a>

@endsection
@section('project-content')

    <div class="p-3">
        &nbsp
    </div>
    <div id="cinematik">
        <section>
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-sm-12">
                        <h2> Project Vision</h2>
                        <p>
                            Cinematik is an app where customers can book a movie theater seat, order from the food court ahead of time and look for information about movies. Cinematik wants customers to enjoy the movie theater experience and stop worrying about spending time in long lines.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2> Challenges</h2>

                        <p>
                            <span class="list">1.</span>
                            Create an app where users can book a movie theater seat<br>

                            <span class="list">2.</span>
                            Create a friendly user interface

                        </p>

                    </div>
                </div>


                <div class="row " style="padding-top: 8em">


                    <div class="col-md-6 order-md-last col-sm-12 order-sm-first">
                        <h2> Starting point</h2>
                        <p>

                            To start I conducted user research, some of the questions asked were:<br>
                            How often do you go to the movie theater?
                            Do you usually buy your tickets online or at the box office?
                            Have you ever had any problem buying your tickets?
                            Do you usually buy from the food court? What do you usually order?<br>
                            Feedback helped me know who my users are and their needs.

                        </p>
                    </div>
                    <div class="col-md-6 order-md-first col-sm-12 ">
                        <img class="w-100" src="/pictures/cinematik/cinematik3b.jpg" alt="Cinematik App Story Boards">
                    </div>

                </div>
            </div>

        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row pb-3">
                    <div class="col text-center">
                        <h2>Meet the users</h2>
                        <p>Cinematik’s primary users are people that enjoy going to the movie theater.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/cinematik/persona2.png')}}" alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Akira<br>
                                    <b>Age:</b> 23<br>
                                    <b>Occupation:</b> Tech Support
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Akira likes to go to the movie theater with his friends. He likes superhero movies and he never missed a Marvel’s movie premiere. Akira likes to buy his tickets online, but sometimes he gets frustrated because the page is slow.

                                </p>
                            </div>
                        </div>


                    </div>
                    <div class=" col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/cinematik/persona1.png')}}" alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Ana<br>
                                    <b>Age:</b> 36<br>
                                    <b>Occupation:</b> Stay-at-home mom
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Ana loves movies, she always goes to the movie theater on weekends, it’s her stress-relief activity after a long week of work. She doesn’t trust the movie ticketing system after multiple bad experiences of not receiving her tickets via email but the box office is always busy and for that reason she continues buying her tickets online.If she has luck, she’ll have her tickets. If not, she’ll have to go to the box office anyway.

                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Ideation</h2>
                        <p>Using Crazy 8’s approach I sketched some concepts for the app design based on what I learned about users. Crazy 8’s allowed me to rapidly brainstorm multiple solutions for the problem.</p>
                    </div>
                    <div class="col">
                        <img class="img-fluid " src="/pictures/cinematik/cinematik3c.jpg" alt="Crazy 8's picture">

                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>User journey</h2>
                        <p>Creating a user journey helped me clarify which steps users take to complete their goal and made considerations for the design.Creating a user journey helped me clarify which steps users take to complete their goal and made considerations for the design.</p>
                    </div>

                </div>
                <img class="img-fluid" src="/pictures/cinematik/cinematik4.jpg" alt="Cinematik App user journey diagram">

            </div>
        </section>
        <section class="text-center">
            <img class="img-fluid" src="/pictures/cinematik/cinematik3.jpg" alt="Cinematik App wireframes picture">

        </section>
        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Wireframes</h2>
                        <p>Taking the time to draft multiple times on the same screen ensured that I could have multiple scenarios where I could take the best elements of each draft. </p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/cinematik/cinematik5.jpg" alt="Cinematik App digital wireframes">

            </div>
        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Usability study insights</h2>
                        <p>After finishing the low fidelity prototype I conducted a moderated usability study. I asked different participants to run through different scenarios in the prototype, their feedback helped me define insights to improve the user experience.
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-top: 4em;">
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-usd fa-5x"></i>
                            </div>
                            <div class="col-8">
                                <h2>Prices are not clear.</h2>
                                <p> Users want to know exactly how much they’re spending. They want clear prices from every product displayed.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-8">
                                <h2>Details are missing.</h2>
                                <p> Users want more details of their reservation in the confirmation page, they want to know exactly what they paid for.                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-question-circle fa-5x"></i>
                            </div>
                            <div class="col-8">
                                <h2>Not friendly enough.</h2>
                                <p> Users want an easier way to add products to their cart.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-4 text-center">
                                <i class="fa fa-times fa-5x"></i>
                            </div>
                            <div class="col-8">
                                <h2>Not intuitive enough.</h2>
                                <p>Users need better cues of how to navigate between sections.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-6"  style="padding-top: 4em;">
                    <div class="col">
                        <h2>Challenge #1</h2>
                        <p >

                            Improve the confirmation page.
                        </p>
                    </div>
                </div>

                <div class="row center-middle">

                    <div class="col-5 text-right">
                        <img class="img-mobile" src="/pictures/cinematik/cinematik_challenges_1.png" alt="Wireframe #1 first version">
                    </div>
                    <div class="col text-center">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </div>
                    <div class="col-5 text-left">
                        <img class="img-mobile" src="/pictures/cinematik/cinematik_challenges_1b.png" alt="Wireframe #1 second version">
                    </div>
                </div>

                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Challenge #2</h2>
                        <p>
Improve the adding products to cart flow.
                        </p>
                    </div>
                </div>
                <div class="row center-middle">

                    <div class="col-5 text-right">
                        <img class="img-mobile" src="/pictures/cinematik/cinematik_challenges_2b.png" alt="Wireframe #2 first version">
                    </div>
                    <div class="col text-center">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </div>
                    <div class="col-5 text-left">
                        <img class="img-mobile" src="/pictures/cinematik/cinematik_challenges_2.png" alt="Wireframe #2 Second version">

                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Mockups</h2>
                        <p>After updating wireframes with insights defined in the usability study, mockups can be created. They’ll give a better idea of how the final product will look like.</p>
                    </div>
                </div>

                    <img class="img-fluid" src="/pictures/cinematik/cinematik2c.jpg" alt="Cinematik App Mockups">
                    <img class="img-fluid" src="/pictures/cinematik/cinematik2d.jpg" alt="More Cinematik App Mockups">


            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>High-fidelity prototype</h2>
                        <p>When mockups are finished, interactions are added to create a complete picture of the completed design. </p>
                    </div>
                </div>
                <div class="row p-6">
                    <div class="col text-center">
                <img class="img-mobile" src="/pictures/cinematik/cinematik9.gif" alt="Cinematik App prototype gif">
                    </div>
                </div>


            </div>
        </section>




        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Style guide</h2>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/cinematik/cinematik7.jpg"  alt="Cinematik App Style Guide">


            </div>
        </section>

    </div>



@endsection
