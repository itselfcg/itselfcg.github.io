@extends('layouts.master')


@section('content')


    <div class="container">

        <p>
            <a href="/">
                ‹ Back to Projects</a>
        </p>

        <div class="row">
            <div class="col-8 col-md-8 col-lg-5">
                <p>
                <h4>@yield('p-title')</h4>
                <h6>@yield('skills')</h6>
                <h7>—</h7>
                </p>
                <h5>@yield('p-subtitle')</h5>
                <p>
                    @yield('description')
                </p>
            </div>
            <div class="col-md-12 col-lg-7">
                @yield('intro-content')
            </div>
        </div>


        @yield('project-content')


        <div class="row">
            <div class="col-md-4 col-6 pt-5">
                <div class="row">
                    <div class="col">
                        <h6>Duration</h6>
                        <h7>—</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <p>
                                    @yield('duration')
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 pt-5">
                <div class="row">
                    <div class="col">
                        <h6>RESOURCES</h6>
                        <h7>—</h7>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            @yield('resources')
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
