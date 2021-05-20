@section('title')
    Cinematik —
@endsection


@extends('layouts.project')

@section('p-title')
    cinematik.
@endsection

@section('p-subtitle')
    Creating user-centered experience designs.
@endsection
@section('description')
    Cinematik is the final product of the Google UX Design Professional Certificate.
    Keep scrolling to learn about this project!
@endsection
@section('skills','Mobile UI/UX')


@section('header-content')
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="/pictures/cinematik2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/cinematik2b.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/cinematik2c.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/cinematik2d.jpg" alt="First slide">
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
                        <p>Cinematik is an app where customers can book a movie theater seat, order from the food court
                            ahead of time and look for information about movies. Cinematik wants customers to enjoy the
                            movie theater experience and stop worrying about spending time in long lines. </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2> Challenges</h2>

                        <p>
                            <span class="list">1.</span>
                            Create a friendly user interface<br>

                            <span class="list">2.</span>
                            Provide a linear booking experience

                        </p>

                    </div>
                </div>


                <div class="row " style="padding-top: 8em">


                    <div class="col-md-6 order-md-last col-sm-12 order-sm-first">
                        <h2> Starting point</h2>
                        <p>I conducted interviews and created empathy maps to understand the user's I’m designing for
                            and
                            their needs. The primary group for this research was people who frequently go to the movie
                            theater.
                            These users confirmed initial assumptions about who are Cinematik customers and which are their needs.
                        </p>
                    </div>  <div class="col-md-6 order-md-first col-sm-12 ">
                        <img class="w-100" src="/pictures/cinematik3b.jpg">
                    </div>

                </div>
            </div>

        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row" style="padding-bottom: 8em">
                    <div class="col text-center">
                        <h2>Meet the users</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/persona2.png')}}">
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
                                    Akira likes to go to the movie theater with his friends. He likes superhero movies,
                                    he never missed a Marvel’s movie premiere. Akira likes to buy his tickets online,
                                    but sometimes he gets frustrated because the page is slow, a couple of times he got
                                    distracted while waiting and when he tried to continue the process he discovered
                                    that he had to start again
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class=" col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/persona1.png')}}">
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
                                    Ana loves movies, she always goes to the movie theater on weekends, it’s her
                                    stress-relief activity after a long week of work. She doesn’t trust the movie
                                    ticketing system after multiple bad experiences of not receiving her tickets via
                                    email but the box office is always busy and for that reason she continues buying her
                                    tickets online.If she has luck, she’ll have her tickets. If not, she’ll have to go
                                    to the box office anyway.

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
                        <h2>User journey</h2>
                        <p>Even though their common goal was booking a seat, each user had their own user journey. I
                            created
                            a generic user journey with all the steps users took in common to accomplish their
                            goal. </p>
                    </div>

                </div>
                <img class="img-fluid" src="/pictures/cinematik4.jpg">

            </div>
        </section>
        <section>
            <img class="img-fluid" src="/pictures/cinematik3.jpg">

        </section>
        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Wireframes</h2>
                        <p>Taking the time to draft multiple times the same screen ensured that I could have multiple
                            scenarios where I could take the best elements of each draft. </p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/cinematik5.jpg">

            </div>
        </section>
        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Wireflow</h2>
                        <p>After sketching some wireframes, I created a basic wireflow following the user journey
                            created
                            previously and adding some navigation elements, always having the user center and front when
                            designing the flow for each screen.</p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/cinematik6.jpg">
            </div>
        </section>
        <section class="bg-gray">
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Iterations</h2>
                        <p>After finishing the low fidelity prototype, I conducted a moderated usability study. I asked

                            different participants to run through different scenarios in the prototype, that helped me
                            to
                            get feedback about their experience using the app and find insights that would help me
                            improve
                            the user experience.
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
                                <p> Users want to know exactly how much they’re spending. They want clear prices from
                                    every
                                    product displayed.
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
                                <p> Users want more details of their confirmation page. They want to know exacly what they are paying for.
                                </p>
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
                                <p> Users want a easier way to customize their products.
                                </p>
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
                                <p> Users want a cleaner flow to navigate betweeen sections.There are to many options that look like a navbar.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-6"  style="padding-top: 4em;">
                    <div class="col">
                        <h2>Challenge #1</h2>
                        <p class="tab p-4"> <span class="list">1.</span>
                            Improve the presentation of reservation info<br>
                            <span class="list">2.</span>
                            Add reservation details in confirmation page.<br>
                            <span class="list">3.</span>
                            Add a payment confirmation message.</p></p>
                    </div>
                </div>
                <div class="row p-6">

                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_1.png">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_1b.png">

                    </div>
                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_1c.gif">
                    </div>
                </div>

                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Challenge #2</h2>
                        <p class="tab p-4">

                            <span class="list">1.</span>
                            Make prices clearer<br>
                            <span class="list">2.</span>
                            Improve the flow for adding products to the cart.<br>
                            <span class="list">3.</span>
                            Show the total for products inside the cart.</p>
                    </div>
                </div>
                <div class="row p-6">

                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_2b.png">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_2.png">

                    </div>
                    <div class="col">
                        <img class="img-fluid" src="/pictures/cinematik_challenges_2c.gif">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Style guide</h2>
                        <p>For the style I went for a dark theme for the app. The color palette consists of three
                            colors:
                            dark blue, gold and white. Where backgrounds are blue, white or a mix of both and important
                            elements were fast recononizable for their gold color. </p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/cinematik7.jpg">


            </div>
        </section>

    </div>



@endsection
