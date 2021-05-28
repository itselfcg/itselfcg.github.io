@section('title')
    Uhm —
@endsection


@extends('layouts.project')
@section('p-title')
    uhm.
@endsection

@section('p-subtitle')
    User-centered design.
@endsection
@section('description')
    Uhm is one of my projects from the Google UX Design Professional Certificate.
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
                <img class="d-block w-100 rounded" src="/pictures/uhm1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/uhm1b.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 rounded" src="/pictures/uhm1c.jpg" alt="Third slide">
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
@section('col-3-description','1 weeks')
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
                        <p>Uhm is a website where people can look up for local businesses in their city, using a
                            category system users can discover new businesses or look for the business details of their
                            favorite place. Uhm wants users to find that business, service or restaurant they are
                            looking for, in the simplest way possible. </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2> Challenges</h2>

                        <p>
                            <span class="list">1.</span>
                            Create a friendly user interface<br>

                            <span class="list">2.</span>
                            Present info in an organized manner without overwhelming users

                        </p>

                    </div>
                </div>


                <div class="row " style="padding-top: 8em">


                    <div class="col-md-6 order-md-last col-sm-12 order-sm-first">
                        <h2> Starting point</h2>
                        <p>I conducted user research asking some of the following questions: How do you find service
                            providers? How do you find new businesses in your city? How do you find business details?
                            Are
                            details always up to date?.
                            The feedback from these questions gave valuable insights to start working on.

                        </p>
                    </div>
                    <div class="col-md-6 order-md-first col-sm-12 ">
                        <img class="w-100" src="/pictures/uhm2.jpg">
                    </div>

                </div>
            </div>

        </section>

        <section>
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Insights learned
                        </h2>
                        <p>From user research, I learned that there were some pain points for users. The biggest issue
                            was that when they were looking for a business, search results were always a specific group
                            that was always repeated in different searching tools, making it hard to discover new
                            businesses. I also learned that even though users could find what they were looking for,
                            business details were not available, making users look up for that information in multiple
                            places.
                        </p>
                    </div>

                </div>
                <img class="img-fluid" src="/pictures/uhm3.jpg">

            </div>
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
                <img class="img-fluid" src="/pictures/uhm4.jpg">

            </div>
        </section>

        <section class="bg-gray">
            <div class="container">
                <div class="row p-6">
                    <div class="col">
                        <h2>Low-fidelity prototype usability testing</h2>
                        <p>Users helped me get feedback about their experience testing the prototype and find new
                            insights to
                            improve the product.
                        </p>
                    </div>
                </div>
                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Screen #1</h2>
                        <p class="tab p-4">
                            <span class="list">1.</span> Direct link for business to access management options.<br>
                            <span class="list">2.</span> Search bar that specifies a location.<br>
                            <span class="list">3.</span> More specific categories. <br>
                            <span class="list">4.</span> All popular results are display. </p>

                    </div>
                </div>
                <div class="row p-6 text-center">

                    <div class="col ">
                        <img class="img-fluid" src="/pictures/uhm5.jpg">
                    </div>

                </div>

                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Screen #2</h2>
                        <p class="tab p-4">

                            <span class="list">1.</span> Navigation system.<br>
                            <span class="list">2.</span> Filters to sort results.<br>
                    </div>
                </div>
                <div class="row p-6 text-center">

                    <div class="col ">
                        <img class="img-fluid" src="/pictures/uhm6.jpg">
                    </div>

                </div>
                <div class="row p-6" style="padding-top: 4em;">
                    <div class="col">
                        <h2>Screen #2</h2>
                        <p class="tab p-4">

                            <span class="list">1.</span> Navigation system.<br>
                            <span class="list">2.</span> Business details stand out.<br>
                            <span class="list">3.</span> Visual elements to help user identify contact info.<br>

                        </p>
                    </div>
                </div>
                <div class="row p-6 text-center">

                    <div class="col ">
                        <img class="img-fluid" src="/pictures/uhm7.jpg">
                    </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">

                <div class="row p-6 pb-5">
                    <div class="col">
                        <h2>Mockups</h2>
                        <p>After testing the low-fidelity prototype, wireframes were improved to create a visual design
                            that gave a better idea of the final product.
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">

                        <img class="img-max-750" src="/pictures/uhm8.jpg">
                        <img class="img-max-750" src="/pictures/uhm8b.jpg">
                        <img class="img-max-750" src="/pictures/uhm8c.jpg">
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
                        <p>When mockups were finished, interactions were added to create a complete picture of the
                            completed design.
                        </p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <img class="img-max-750" src="/pictures/uhm9.gif">
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
                <img class="img-fluid" src="/pictures/uhm10.jpg">


            </div>
        </section>

    </div>
@endsection
