@extends('layouts.app')


@section('content')

    <!-- Showcase -->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Welcome to <span class="text-warning">Our Sports Club</span></h1>
                <p class="lead my-4">
                    Join us to experience exciting events, competitions,
                    and training sessions across various sports.
                    Connect with like-minded athletes and enhance your skills.
                </p>
                <a href="{{ route('register') }}" class="btn btn-warning btn-lg btn-jointheclub mb-3">Join the Club</a>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block img-fluid rounded" src="{{ asset('assets/img/sportclub.jpg') }}" alt="Sports Club Image">
        </div>
    </div>
</section>


    <!-- Filter Section -->
    <section class="py-4">
        <div class="container bg-warning rounded shadow">
        <h3 class="text-center text-dark mb-4">Filter Events</h3>
        <div class="row justify-content-center">
            <!-- Filter Options -->
            <div class="col-md-10">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <!-- Filter Dropdowns -->
                    <div class="me-2 flex-grow-1">
                    <div class="mb-3 me-2 flex-grow-1">
                    <input type="date" class="form-control" id="dateFilter" placeholder="Select Date">
                    </div>
                    </div>
                    <div class="mb-3 me-2 flex-grow-1">
                        <select class="form-select" id="sportFilter">
                            <option value="">Select Sport</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Football">Football</option>
                            <option value="Volleyball">Volleyball</option>
                            <!-- Add more sport options -->
                        </select>
                    </div>
                    <div class="mb-3 me-2 flex-grow-1">
                        <select class="form-select" id="locationFilter">
                            <option value="">Select Location</option>
                            <option value="Mandalay Stadium">Mandalay Stadium</option>
                            <option value="Central Sports Arena">Central Sports Arena</option>
                            <option value="Sunshine Beach Court">Sunshine Beach Court</option>
                            <!-- Add more location options -->
                        </select>
                    </div>
                    <div class="mb-3 flex-grow-1">
                        <select class="form-select" id="ageGroupFilter">
                            <option value="">Select Age Group</option>
                            <option value="Under 18">Under 18</option>
                            <option value="18-35">18-35</option>
                            <option value="36 and above">36 and above</option>
                            <!-- Add more age group options -->
                        </select>
                    </div>
                    <div class="mb-3 ms-2">
                        <button class="btn btn-dark px-4" type="button" id="filterBtn">Filter</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- upcoming and previous events -->
    <section id="UpcomingEvents" class="py-5">
        <div class="container">
        <div class="row g-4">
            <!-- Event 1 -->
            <div class="col-md-4">
                <div class="card shadow border-0 bg-secondary">
                    <img src="{{ asset('assets/img/table_tennis.jpg') }}" class="card-img-top" alt="Event 1">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Mandalay Ping Pong Championship</h5>
                        <p class="card-text">Join us on December 15 at Mandalay Stadium for an exciting day of Ping Pong action!</p>
                        <a href="{{ route('eventsdetails') }}" class="btn btn-dark btn-sm btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Event 2 -->
            <div class="col-md-4">
                <div class="card shadow border-0 bg-secondary">
                    <img src="{{ asset('assets/img/basketball.jpg') }}" class="card-img-top" alt="Event 2">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Basketball Challenge</h5>
                        <p class="card-text">Don't miss the annual Basketball Challenge on January 10 at Sunshine Beach Court.</p>
                        <a href="{{ route('eventsdetails') }}" class="btn btn-dark btn-sm btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Event 3 -->
            <div class="col-md-4">
                <div class="card shadow border-0 bg-secondary">
                    <img src="{{ asset('assets/img/hiking.jpg') }}" class="card-img-top" alt="Event 3">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Hiking</h5>
                        <p class="card-text">Experience the thrill of the Basketball Showdown on February 20 at Central Sports Arena.</p>
                        <a href="{{ route('eventsdetails') }}" class="btn btn-dark btn-sm btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- News & Announcements -->
    <section id="News & Announcements" class="p-5 bg-light text-dark">
        <div class="container">
        <h2 class="text-center mb-5">News & Announcements</h2>
        <div class="row g-4">
            <!-- News Item 1 -->
            <div class="col-md-6">
                <div class="card bg-white shadow border-0" style="max-width: 500px; height: auto; margin: auto;">
                    <img src="{{ asset('assets/img/sport_events.jpg') }}" class="card-img-top" alt="Annual Sports Meet Announcement">
                    <div class="card-body">
                        <h5 class="card-title">Sports Events!</h5>
                        <p class="card-text text-dark">We are thrilled to announce that registrations are now open for all upcoming sports events
                            in Mandalay from January to J...</p>
                        <a href="{{ route('news') }}" class="btn btn-dark btn-sm  btn-read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="col-md-6">
                <div class="card bg-white shadow border-0" style="max-width: 500px; height: auto; margin: auto;">
                    <img src="{{ asset('assets/img/pingpong_special_guest.jpg') }}" class="card-img-top" alt="New Sports Announcement" style="height: 315px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Champion</h5>
                        <p class="card-text text-dark"> We are thrilled to share that the Mandalay Ping Pong Championship will feature
                            a special appearance by Myanmar’s National Table Tennis...</p>
                        <a href="{{ route('news') }}" class="btn btn-dark btn-sm  btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 mt-4">
            <!-- News Item 3 -->
            <div class="col-md-6">
                <div class="card bg-white shadow border-0" style="max-width: 500px; height: auto; margin: auto;">
                    <img src="{{ asset('assets/img/basketball_special_guest.jpg') }}" class="card-img-top" alt="Championship Winners">
                    <div class="card-body">
                        <h5 class="card-title">Special Guest!</h5>
                        <p class="card-text text-dark">We are excited to announce that National Basketball
                             Coach Kyaw Zin Hlaing will be attending
                            the Mandalay City Basketball League on Feb..</p>
                        <a href="{{ route('news') }}" class="btn btn-dark btn-sm  btn-read-more">Read More</a>
                    </div>
                </div>
            </div>

            <!-- News Item 4 -->
            <div class="col-md-6">
                <div class="card bg-white shadow border-0" style="max-width: 500px; height: auto; margin: auto;">
                    <img src="{{ asset('assets/img/volunteer.jpg') }}" class="card-img-top" alt="Volunteer Opportunities">
                    <div class="card-body">
                        <h5 class="card-title">Volunteer Needs!</h5>
                        <p class="card-text text-dark">Want to be part of the action? We're looking for volunteers to help at our sports events 
                            throughout the first half of 2025. Get involved in event mana..</p>
                        <a href="{{ route('news') }}" class="btn btn-dark btn-sm btn-read-more ">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- About Us-->
    <section id="About Us" class="p-5 bg-dark text-light" >
        <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <h2>About Us</h2>
                <p class="lead">
                    Our sports club is dedicated to promoting health, teamwork, 
                    and athletic skills across various sports. 
                    We organize regular training sessions, community events, and 
                    competitive tournaments.
                </p>
                <p>Become a part of our community, meet passionate athletes,
                     and push your limits in a supportive environment.
                </p>
                <a href="{{ route('aboutus') }}" class="btn btn-light mt-3">
                    <i class="bi bi-chevron-right"></i> Read More
                </a>  
            </div>
            <div class="col-md"> 
                <img src="" class="img-fluid">
            </div>
        </div>
        </div>
    </section>

    <!-- Contact-->
   <section class="text-warning bg-light text-center">
        <div class="container">
            <p class="text-dark">
                We're always looking for new partners, sponsors, and enthusiastic participants. Reach out to us for more
                information!
            </p>
            <a class="text-warning fw-bold" href="{{ route('contact') }}">Contact Us</a>
        </div>
    </section>

@endsection

@section('scripts')
    <!-- Additional JavaScript specific to this page -->
    <script>
        $(document).ready(function() {
            // Page-specific JS code
        });
    </script>
@endsection