@section('title')
    Auxilium —
@endsection


@extends('layouts.project')
@section('p-title')
    auxilium.
@endsection

@section('p-subtitle')
    Creating user-centered designs for social good.
@endsection
@section('description')
    Auxilium is my last project for the Google UX Design Professional Certificate. Keep scrolling to learn more!
@endsection
@section('skills','Web and Mobile UI/UX')

@section('header-content')
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 rounded" src="/pictures/auxilium/auxilium1.jpg" alt="Auxilium's mockup 1">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/auxilium/auxilium1b.jpg" alt="Auxilium's mockup 2">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/auxilium/auxilium1c.jpg" alt="Auxilium's mockup 3">
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
@section('col-1-description','Auxilium')
@section('col-2','Role')
@section('col-2-description','Ux Designer')
@section('col-3','Duration')
@section('col-3-description','3 weeks')
@section('resources')
    <a href="https://www.figma.com/proto/CBiJDYs7GGKhDUy4tzJFsM/Cinematik-v2?node-id=239%3A19403&scaling=scale-down&page-id=239%3A254"
       target="_blank">Prototype</a>

@endsection
@section('project-content')

    <div class="p-3">
        &nbsp
    </div>
    <div id="auxilium">
        <section>
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 col-sm-12">
                        <h2> Project Vision</h2>
                        <p>Auxilium is a nonprofit that offers first aid training and helps marginalized communities receive medical attention. Auxilium believes that first aid knowledge should be within everyone's reach.</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2> Challenges</h2>

                        <p>
                            <span class="list">•</span>
                            Create an app where users can learn about first aid procedures.
                            <br>
                            <span class="list">•</span>
                            Create a website where users can learn about the non-profit and learn first aid procedures.<br>

                            <span class="list">•</span>
                            Create a friendly user interface.


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
                                Do you have any first aid knowledge?
                                <br>
                                <span class="list">2.</span>
                                Have you ever been in a situation that requires first aid?
                                <br>
                                <span class="list">3.</span>
                                What did you do?<br>
                                <span class="list">4.</span>
                                Where would you look for info about first aid?
                                <br>
                                <span class="list">5.</span>
                                What makes this site trustworthy?

                                <br>
                            </p>
                        </div>
                        <p>

                            The feedback from users helped me know who they are and their needs.

                        </p>
                    </div>


                </div>
            </div>

        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row pb-3">
                    <div class="col text-center">
                        <h2>Meet the users</h2>
                        <p>
                            Auxilium’s primary users include people with limited knowledge about first aid that need a trusty reference when they have an emergency.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-md-1 col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/auxilium/persona1.png')}}"
                                     alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Maria<br>
                                    <b>Age:</b> 32<br>
                                    <b>Occupation:</b> Stay-at-home wife
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Maria has been a volunteer in the Big Sister program since she was a teenager. Maria’s little sisters are young teens (12-14 years old), she likes to take them to do activities in the open air. She has noticed that her little sisters use their smartphones to look for everything they don’t know— and that is great for her— her real problem is that they don’t know how to select trustworthy references and they always end up doing silly things they saw on a youtube video, she would like to give them a list of her favorite sites to look for information but none of them are oriented for teens.
                                </p>
                            </div>
                        </div>


                    </div>
                    <div class=" col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-5 ">
                                <img class="img-fluid" src="{{asset('pictures/auxilium/persona2.png')}}"
                                     alt="Persona picture">
                            </div>
                            <div class="col-5">
                                <p><b>Name:</b> Sergio<br>
                                    <b>Age:</b> 40<br>
                                    <b>Occupation:</b> Graphic Designer
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    Sergio's job keeps him busy and he always worries about his children spending too much time alone. More than once Sergio had arrived at his house to find that his children had an accident and followed random advice from the internet that only made the problem worse, he‘d like his children to take first aid training but they are stubborn, for that reason he wants the second-best option, a trusty first aid website where his children can consult when they have an accident.
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
                            Using Crazy 8’s approach I sketched some concepts for the app design based on what I learned about users. Crazy 8’s allowed me to rapidly brainstorm multiple solutions for the problem.
                        </p>
                    </div>
                    <div class="col">
                        <h2>Site map</h2>
                        <p>
                            Creating a sitemap helped me clarify the site’s goals and made considerations for the user flow.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">

                <div class="row p-6">
                    <div class="col">
                        <h2>Wireframes</h2>
                        <p>Taking the time to draft multiple times on the same screen ensured that I could have multiple scenarios where I could take the best elements of each draft.</p>
                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Web</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="/pictures/auxilium/auxilium2.jpg"
                             alt="Auxilium Web digital wireframes">
                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Mobile</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="/pictures/auxilium/auxilium2b.jpg"
                             alt="Auxilium Mobile App digital wireframes">
                    </div>
                </div>


            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Usability study insights</h2>
                        <p>
                            After finishing the low fidelity prototype I conducted a moderated usability study. I asked different participants to run through different scenarios in the prototype, their feedback helped me define insights to improve the user experience.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="row text-center p-5">
                        <div class="col">
                            <h6>Web</h6>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 4em;">

                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-frown-o fa-5x"></i>
                                </div>
                                <div class="col-8">
                                    <h2>Overwhelming layout</h2>
                                    <p>Users need better cues of why certain elements are grouped.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-compass fa-5x"></i>
                                </div>
                                <div class="col-8">
                                    <h2>A navigation bar is missing</h2>
                                    <p> Users need direct access to certain sections of an article.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-6" style="padding-top: 4em;">
                        <div class="col">
                            <h2>Challenge 1</h2>
                            <p>Improve navbar. Give a title to each group of elements.</p>

                        </div>
                    </div>

                    <div class="row center-middle">

                        <div class="col-md-5 col-sm-12 text-right">
                            <img class="img-fluid" src="/pictures/auxilium/challenge1v1.png" alt="Wireframe #1 first version">
                        </div>
                        <div class="col text-center d-none d-md-block">
                            <i class="fa fa-chevron-right fa-2x"></i>
                        </div>
                        <div class="col text-center d-block d-md-none">
                            <i class="fa fa-chevron-down fa-2x"></i>
                        </div>
                        <div class="col-md-5 col-sm-12
                     text-left">
                            <img class="img-fluid" src="/pictures/auxilium/challenge1v2.png" alt="Wireframe #1 second version">
                        </div>
                    </div>
                    <div class="row p-6" style="padding-top: 4em;">
                        <div class="col">
                            <h2>Challenge 2</h2>
                            <p>Add an intern navbar for sections on the page.</p>
                        </div>
                    </div>

                    <div class="row center-middle">

                        <div class="col-md-5 col-sm-12 text-right">
                            <img class="img-fluid" src="/pictures/auxilium/challenge2v1.png" alt="Wireframe #1 first version">
                        </div>
                        <div class="col text-center d-none d-md-block">
                            <i class="fa fa-chevron-right fa-2x"></i>
                        </div>
                        <div class="col text-center d-block d-md-none">
                            <i class="fa fa-chevron-down fa-2x"></i>
                        </div>
                        <div class="col-md-5 col-sm-12
                     text-left">
                            <img class="img-fluid" src="/pictures/auxilium/challenge2v2.png" alt="Wireframe #1 second version">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row text-center" style="padding-top: 10em">
                        <div class="col">
                            <h6>Mobile</h6>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 4em;">
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-compass fa-5x"></i>
                                </div>
                                <div class="col-8">
                                    <h2>Navigation is not clear</h2>
                                    <p>Users need a more intuitive navigation experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <i class="fa fa-question-circle fa-5x"></i>
                                </div>
                                <div class="col-8">
                                    <h2>Not intuitive enough</h2>
                                    <p>Users need better cues on how to use the app's features.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-6" style="padding-top: 4em;">
                        <div class="col">
                            <h2>Challenge 1</h2>
                            <p>Improve navigation. Add a description to app features.</p>

                        </div>
                    </div>

                    <div class="row center-middle">

                        <div class="col-md-5 col-sm-12 text-right">
                            <img class="img-mobile" src="/pictures/auxilium/challenge3v1.png" alt="Wireframe #1 first version">
                        </div>
                        <div class="col text-center d-none d-md-block">
                            <i class="fa fa-chevron-right fa-2x"></i>
                        </div>
                        <div class="col text-center d-block d-md-none">
                            <i class="fa fa-chevron-down fa-2x"></i>
                        </div>
                        <div class="col-md-5 col-sm-12
                     text-left">
                            <img class="img-mobile" src="/pictures/auxilium/challenge3v2.png" alt="Wireframe #1 second version">
                        </div>
                    </div>


                    <div class="row p-6" style="padding-top: 4em;">
                        <div class="col">
                            <h2>Challenge 2</h2>
                            <p>Improve info structure.</p>

                        </div>
                    </div>

                    <div class="row center-middle">

                        <div class="col-md-5 col-sm-12 text-right">
                            <img class="img-mobile" src="/pictures/auxilium/challenge4v1.png" alt="Wireframe #1 first version">
                        </div>
                        <div class="col text-center d-none d-md-block">
                            <i class="fa fa-chevron-right fa-2x"></i>
                        </div>
                        <div class="col text-center d-block d-md-none">
                            <i class="fa fa-chevron-down fa-2x"></i>
                        </div>
                        <div class="col-md-5 col-sm-12
                     text-left">
                            <img class="img-mobile" src="/pictures/auxilium/challenge4v2.png" alt="Wireframe #1 second version">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6 ">
                    <div class="col">
                        <h2>Mockups</h2>
                        <p>
                            After updating wireframes with insights defined in the usability study, mockups can be created. They’ll give a better idea of how the final product will look like.
                        </p>
                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Web</h6>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-web" src="/pictures/auxilium/auxilium3.png" alt="Axilium's mockup 1">

                    </div>
                    <div class="col">
                        <div class="row ">
                            <div class="col">
                                <img class="img-web" src="/pictures/auxilium/auxilium3b.png" alt="Auxilium's mockup 2">

                            </div>

                        </div>

                        <div class="row pt-2">

                            <div class="col">
                                <img class="img-web" src="/pictures/auxilium/auxilium3c.png" alt="Auxilium's mockup 3">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Mobile</h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/auxilium/auxilium3d.jpg" alt="Axilium's mockup 4">

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
                        <p>
                            High-fidelity prototype
                            When mockups are finished, interactions are added to create a complete picture of the completed design.
                        </p>
                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Web</h6>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/auxilium/auxilium5b.gif"
                             alt="Axilium's Mobile app Style Guide">

                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Mobile</h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-mobile" src="/pictures/auxilium/auxilium5.gif"
                             alt="Axilium's Website Style Guide">

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
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Web</h6>

                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/auxilium/auxilium4.jpg"
                             alt="Axilium's Mobile app Style Guide">

                    </div>
                </div>
                <div class="row text-center p-5">
                    <div class="col">
                        <h6>Mobile</h6>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/auxilium/auxilium4b.jpg"
                             alt="Axilium's Website Style Guide">

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
