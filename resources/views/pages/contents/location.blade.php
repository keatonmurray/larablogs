@extends('layouts.app')
@section('content')
    <header class="masthead" style="background-image:url('{{asset('assets/img/map.jpg')}}')">
        <x-header-container>
            <h1>Visit Us</h1>
            <span class="subheading">We operate across 2 different cities. Check our locations below.</span>
        </x-header-container>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-body">
                        <div class="jumbotron text-center">
                            <h3>Our Locations</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th>City</th>
                                    <th>Street Address</th>
                                    <th>Contact #</th>
                                </tr>
                                <div>
                                    <tr>
                                        <td>
                                            <a href="" class="fw-bold text-decoration-none text-black">Ontario, CA</a>
                                            <br>
                                            <a href="" class="fw-bold text-decoration-none text-black">Halifax, CA</a>
                                        </td>
                                        <td>
                                            <a href="" class="fw-bold text-decoration-none text-black">123 Connecticut Ave</a>
                                            <br>
                                            <a href="" class="fw-bold text-decoration-none text-black">41 Fox Blvd</a>
                                        </td>
                                        <td>
                                            <a href="" class="fw-bold text-decoration-none text-black">241-111-0012</a>
                                           <br>
                                            <a href="" class="fw-bold text-decoration-none text-black">998-009-5423</a>
                                        </td>
                                    </tr>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection