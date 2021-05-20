@extends('layouts.master')


@section('content')


    <div class="container">

        <p>
            <a href="/">
                ‹ Back to Projects</a>
        </p>

        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-6">
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


        @yield('header-content')


        <div class="row">
            @hasSection ('col-1')
                <div class="col-md-4 col-6 pt-5">
                    <div class="row">
                        <div class="col">
                            <h6>@yield('col-1')</h6>
                            <h7>—</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                @yield('col-1-description')
                            </p>

                        </div>
                    </div>
                </div>
            @endif
            @hasSection ('col-2')
                <div class="col-md-4 col-6 pt-5">
                    <div class="row">
                        <div class="col">
                            <h6>@yield('col-2')</h6>
                            <h7>—</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                @yield('col-2-description')
                            </p>

                        </div>
                    </div>
                </div>
            @endif
            @hasSection ('col-3')
                <div class="col-md-4 col-6 pt-5">
                    <div class="row">
                        <div class="col">
                            <h6>@yield('col-3')</h6>
                            <h7>—</h7>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                @yield('col-3-description')
                            </p>

                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    @yield('project-content')

@endsection
