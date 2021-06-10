@section('title')
    Uhm —
@endsection


@extends('layouts.project')
@section('p-title')
    uhm.
@endsection

@section('p-subtitle')
    Creating more user-centered designs.
@endsection
@section('description')
    Uhm was my second project for the the Google UX Design Professional Certificate.
    Keep scrolling to learn more!
@endsection
@section('skills','Web UI/UX')

@section('header-content')
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="/pictures/uhm/uhm1.jpg" alt="Uhm's mockup 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/uhm/uhm1b.jpg" alt="Uhm's mockup 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/uhm/uhm1c.jpg" alt="Uhm's mockup 3">
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
    </div>

@endsection
@section('col-1','Project')
@section('col-1-description','Uhm')
@section('col-2','Role')
@section('col-2-description','Ux Designer')
@section('col-3','Duration')
@section('col-3-description','2 weeks')
@section('resources')
    <a href="https://www.figma.com/proto/CBiJDYs7GGKhDUy4tzJFsM/Cinematik-v2?node-id=239%3A19403&scaling=scale-down&page-id=239%3A254"
       target="_blank">Prototype</a>

@endsection
@section('project-content')

    <div class="p-3">
        &nbsp
    </div>
    <div id="uhm">
        <section>
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-sm-12">
                        <h2> Project Vision</h2>
                        <p>Uhm is a website where people can look up for business or service providers in their city.
                            Uhm wants users to find that business, service or restaurant they are looking for, in the
                            simplest way possible.</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2> Challenges</h2>

                        <p>
                            <span class="list">•</span>
                            Create an app where users can look for local business/service providers<br>

                            <span class="list">•</span>
                            Create a friendly user interface


                        </p>

                    </div>
                </div>


                <div class="row " style="padding-top: 8em">


                    <div class="col">
                        <h2> Starting point</h2>
                        <p>To start I conducted user research, some of the questions asked were:
                        </p>

                        <div class="tab">
                            <p>
                                <span class="list">1.</span>
                                How do you usually look for service providers?<br>
                                <span class="list">2.</span>
                                How do you usually find new business in your city?<br>
                                <span class="list">3.</span>
                                Where do you look for business details of a new place you’d like to visit?Are they
                                always up
                                to date?<br>
                                <span class="list">4.</span>
                                Have you ever been in a situation where you can’t find what you were looking for? What
                                did
                                you do to find that place? Did you find it?<br>
                            </p>
                        </div>
                        <p>

                            Feedback helped me know who my users are and their needs.

                        </p>
                    </div>
                    <div class="col-md-6 ">
                        <img class="w-100" src="/pictures/uhm/uhm3.jpg" alt="Uhm's wireframes picture">
                    </div>

                </div>
            </div>

        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row pb-3">
                    <div class="col text-center">
                        <h2>Meet the users</h2>
                        <p>Uhm’s primary users are people looking for service providers or business in their city.

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/uhm/persona1.png')}}"
                                     alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Nadia<br>
                                    <b>Age:</b> 18<br>
                                    <b>Occupation:</b> High Scool Student
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Nadia has had bad experiences with hair dressers, that is her main reason for
                                    constantly visiting new hair salons. Her options are limited, she doesn’t have a lot
                                    of money to go to the posh salons she sees in ads, but there is not a lot of
                                    information about small hair salons in google. She recurs to social media looking
                                    for a new hair salon but she always sees the same places, she has to invest a lot of
                                    time looking for new hair salons to visit.

                                </p>
                            </div>
                        </div>


                    </div>
                    <div class=" col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/uhm/persona2.png')}}"
                                     alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Mario<br>
                                    <b>Age:</b> 24<br>
                                    <b>Occupation:</b> Uber driver
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Mario works all day, but as a driver he really enjoys driving around the city.
                                    Whenever he needs a service provider he usually goes to places he had seen in an
                                    advertisement, his main problem doing that is that sometimes they are out of his
                                    budget and he is too embarrassed to tell them no, more than one he had paid too much
                                    because he didn’t know better.
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
                        <p>
                            Using Crazy 8’s approach I sketched some concepts for the app design based on what I learned
                            about users. Crazy 8’s allowed me to rapidly brainstorm multiple solutions for the problem.
                        </p>
                    </div>
                    <div class="col">
                        <h2>Site map</h2>
                        <p>
                            Creating a sitemap helped me clarify the site’s goals and made considerations for the user
                            flow.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/uhm/uhm2.jpg" alt="Uhm's site map and crazy 8's picture">
            </div>
        </section>
        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Wireframes</h2>
                        <p>Taking the time to draft multiple times on the same screen ensured that I could have multiple
                            scenarios where I could take the best elements of each draft. </p>
                    </div>
                </div>
                <img class="img-fluid" src="/pictures/uhm/uhm4.jpg" alt="Uhm's digital wireframes">

            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Usability study insights</h2>
                        <p>After finishing the low fidelity prototype I conducted a moderated usability study. I asked
                            different participants to run through different scenarios in the prototype, their feedback
                            helped me define insights to improve the user experience.
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
                                <h2>Products categories are not clear.</h2>
                                <p> Users want a more intuitive way to find business in the category section.
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
                                <h2>Location in missing.</h2>
                                <p>Users want to know the location of search’s results.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Challenge</h2>
                        <p>Improve navigation. Improve navbar categories. Add search's location.</p>

                    </div>
                </div>

                <div class="row center-middle">

                    <div class="col-md-5 col-sm-12 text-right">
                        <img class="img-fluid" src="/pictures/uhm/uhm6v1.png" alt="Wireframe #1 first version">
                    </div>
                    <div class="col text-center d-none d-md-block">
                        <i class="fa fa-chevron-right fa-2x"></i>
                    </div>
                    <div class="col text-center d-block d-md-none">
                        <i class="fa fa-chevron-down fa-2x"></i>
                    </div>
                    <div class="col-md-5 col-sm-12
                     text-left">
                        <img class="img-fluid" src="/pictures/uhm/uhm6v2.png" alt="Wireframe #1 second version">
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6 pb-5">
                    <div class="col">
                        <h2>Mockups</h2>
                        <p>After updating wireframes with insights defined in the usability study, mockups can be
                            created. They’ll give a better idea of how the final product will look like.
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">


                        <img class="img-web" src="/pictures/uhm/uhm8.jpg" alt="Uhm's mockup 1">
                        <div class="row ">
                            <div class="col">
                                <img class="img-web" src="/pictures/uhm/uhm8b.jpg" alt="Uhm's mockup 1">

                            </div>

                        </div>
                    </div>
                    <div class="col">


                        <div class="row pt-2">

                            <div class="col">
                                <img class="img-web" src="/pictures/uhm/uhm8c.jpg" alt="Uhm's mockup 1">

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="bg-gray">
            <div class="container ">

                <div class="row p-6 pb-5">
                    <div class="col">
                        <h2>High-fidelity prototype
                        </h2>
                        <p>When mockups are finished, interactions are added to create a complete picture of the
                            completed design.
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/uhm/uhm9.gif" alt="Uhm's high fidelity prototype">
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
                <img class="img-fluid" src="/pictures/uhm/uhm10.jpg" alt="Uhm's Style guide">


            </div>
        </section>

    </div>
@endsection
