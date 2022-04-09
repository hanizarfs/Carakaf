<x-app-layout>

    {{--==============================  HEADER  ==============================--}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
            <div class="container-fluid">
                <!-- Logo -->
                <a class="navbar-brand me-4" href="/">
                    <x-jet-application-mark width="36" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <x-jet-nav-link href="{{ url('dashboard') }}" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('tampilformuliradmin') }}"
                            :active="request()->routeIs('tampilformuliradmin')">
                            {{ __('Data Mahasiswa') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('taskadmin') }}" :active="request()->routeIs('uploadtugas')">
                            {{ __('Tugas') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ url('kelas') }}" :active="request()->routeIs('kelas')">
                            {{ __('Kelas') }}
                        </x-jet-nav-link>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav align-items-baseline">
                        <!-- Teams Dropdown -->
                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <x-jet-dropdown id="teamManagementDropdown">
                            <x-slot name="trigger">
                                {{ Auth::user()->currentTeam->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Team Management -->
                                <h6 class="dropdown-header">
                                    {{ __('Manage Team') }}
                                </h6>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                                @endcan

                                <hr class="dropdown-divider">

                                <!-- Team Switcher -->
                                <h6 class="dropdown-header">
                                    {{ __('Switch Teams') }}
                                </h6>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </x-slot>
                        </x-jet-dropdown>
                        @endif

                        <!-- Settings Dropdown -->
                        @auth
                        <x-jet-dropdown id="settingsDropdown">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="rounded-circle" width="32" height="32"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                @else
                                {{ Auth::user()->name }}

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <h6 class="dropdown-header small text-muted">
                                    {{ __('Manage Account') }}
                                </h6>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                                @endif

                                <hr class="dropdown-divider">

                                <!-- Authentication -->
                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Log out') }}
                                </x-jet-dropdown-link>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{--==============================  END OF HEADER  ==============================--}}

    {{--==============================  MAIN OF CONTENT  ==============================--}}
    <main>
        <div class="row gx-5 mt-5">
            <div class="col-12 mt-5">
                <h1>Selamat datang {{ Auth::user()->name }}</h1>
                <h4 class="text-muted">Dosen Algoritma Pemrograman - Pendidikan Teknik Informatika 2021</h4>
            </div>
            <div class="col-9 pt-3">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5 text-light" style="background-color: #6f42c1">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/all-in-one-place.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5>100 Mahasiswa</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5 text-light" style="background-color: #6f42c1">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/all-in-one-place.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5>100 Mahasiswa</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <center>
                            <div class="card py-5 my-5 text-light" style="background-color: #6f42c1">
                                <img src="https://edu.google.com/assets/icons/pages/main/classroom/all-in-one-place.svg"
                                    width="40%" class="d-block mx-auto" alt="...">
                                <div class="card-body">
                                    <h5>100 Mahasiswa</h5>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div id="container"></div>
                    </div>
                    <div class="col-6">
                        <div id="piechart"></div>
                    </div>
                </div>
            </div>
            <div class="col-3 pt-3 mt-5 bg-white">
                <style>
                    ul {
                        list-style-type: none;
                    }

                    body {
                        font-family: Verdana, sans-serif;
                    }

                    /* Month header */
                    .month {
                        padding: 70px 25px;
                        width: 100%;
                        background: #1abc9c;
                        text-align: center;
                    }

                    /* Month list */
                    .month ul {
                        margin: 0;
                        padding: 0;
                    }

                    .month ul li {
                        color: white;
                        font-size: 20px;
                        text-transform: uppercase;
                        letter-spacing: 3px;
                    }

                    /* Previous button inside month header */
                    .month .prev {
                        float: left;
                        padding-top: 10px;
                    }

                    /* Next button */
                    .month .next {
                        float: right;
                        padding-top: 10px;
                    }

                    /* Weekdays (Mon-Sun) */
                    .weekdays {
                        margin: 0;
                        padding: 10px 0;
                        background-color: #ddd;
                    }

                    .weekdays li {
                        display: inline-block;
                        width: 13.6%;
                        color: #666;
                        text-align: center;
                    }

                    /* Days (1-31) */
                    .days {
                        padding: 10px 0;
                        background: #eee;
                        margin: 0;
                    }

                    .days li {
                        list-style-type: none;
                        display: inline-block;
                        width: 13.6%;
                        text-align: center;
                        margin-bottom: 5px;
                        font-size: 12px;
                        color: #777;
                    }

                    /* Highlight the "current" day */
                    .days li .active {
                        padding: 5px;
                        background: #1abc9c;
                        color: white !important
                    }

                </style>
                <div class="month">
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>January<br><span style="font-size:18px">2022</span></li>
                    </ul>
                </div>

                <ul class="weekdays">
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                    <li>Su</li>
                </ul>

                <ul class="days">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li><span class="active">10</span></li>
                    <li>11</li>
                    ...etc
                </ul>
                <br>
                <hr><br>
                <h2>Catatan</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi aliquam tempora harum dignissimos
                    officia, recusandae, cum a quibusdam incidunt aperiam deleniti ab similique magnam impedit explicabo
                    labore reiciendis nobis soluta!</p>
                <br>
                <hr><br>
                <h2>Jadwal Kelas</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum, quaerat, id iusto vero, fugit
                    molestias inventore iste repellat ut quidem nostrum veritatis commodi. Sunt repudiandae nam dolores
                    minus laboriosam quaerat?</p>
            </div>
        </div>
    </main>
    {{--==============================  END OF MAIN CONTENT  ==============================--}}


    {{--============================== FOOTER  ==============================--}}
    {{--============================== END OF FOOTER  ==============================--}}



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Laki laki', 6],
                //   ['Friends', 2],
                //   ['Eat', 2],
                ['Perempuan', 4],
                //   ['Gym', 2],
                //   ['Sleep', 8]
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'My Student',
                'height': 400
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

    </script>


    <style>
        html,
        body,
        #container {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

    </style>


    <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
    <script>
        anychart.onDocumentReady(function () {

            // set the data
            var data = {
                header: ["Name", "Death toll"],
                rows: [
                    ["San-Francisco (1906)", 1500],
                    ["Messina (1908)", 87000],
                    ["Ashgabat (1948)", 175000],
                    ["Chile (1960)", 10000],
                    ["Tian Shan (1976)", 242000],
                    ["Armenia (1988)", 25000],
                    ["Iran (1990)", 50000]
                ]
            };

            // create the chart
            var chart = anychart.column();

            // add data
            chart.data(data);

            // set the chart title
            chart.title("The deadliest earthquakes in the XXth century");

            // draw
            chart.container("container");
            chart.draw();
        });

    </script>


</x-app-layout>
