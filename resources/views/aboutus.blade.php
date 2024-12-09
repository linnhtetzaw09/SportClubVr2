@extends('layouts.app')

@section('content')

  <!-- Header Section -->
  <header class="news-header text-dark">
    <h1>About <span class="text-warning">GoSports</span></h1>
    <p class="text-dark">Inspiring Sportsmanship, Unity, and Excellence</p>
  </header>

    <!-- Mission Section -->
    <section class="mission-section py-5 bg-dark">
        <div class="container">
            <h3 class="text-center text-light mb-4"><span class="text-warning">Mission</span></h3>
            <p class="text-center">
                At GoSports, our mission is to promote a healthy lifestyle, foster sportsmanship, and create unforgettable
                experiences for athletes and fans alike. We believe sports have the power to bring people together and create
                lasting memories.
            </p>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section py-5 text-light bg-dark">
        <div class="container">
            <h3 class="text-center mb-4"><span class="text-warning">Vision</span></h3>
            <p class="text-center">
                We envision a world where sports unite communities, inspire individuals, and create opportunities for all to
                engage in physical activity. We aim to be the leading platform for sports events, training, and inspiration.
            </p>
        </div>
    </section>

     <!-- Core Values Section -->
    <section class="team-section py-5 bg-dark">
        <div class="container">
            <h3 class="text-center mb-5 text-warning">Core Values</h3>
            <div class="row  g-4">
                <!-- Integrity -->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center border-0 shadow bg-warning">
                        <i class="bi bi-heart fs-1"></i>
                    <h5 class="text-dark">Integrity</h5>
                    <p class="text-dark">We believe in honesty, transparency, and doing what's right.</p>
                    </div>
                </div>
                <!--Innovation-->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center border-0 shadow bg-warning">
                        <i class="bi bi-lightbulb fs-1"></i>
                    <h5>Innovation</h5>
                    <p class="text-dark">We embrace creativity and new ideas to solve problems.</p>
                    </div>
                </div>
                <!-- Collaboration -->
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center border-0 shadow bg-warning">
                        <i class="bi bi-people fs-1"></i>
                        <h5>Collaboration</h5>
                        <p class="text-dark">We work together to achieve our goals and support each other.</p>
                    </div>
                </div>
    </section>

    <!-- Our Team Section -->
    <section class="team-section py-5">
    <div class="container">
        <h3 class="text-center mb-5">Meet Our <span class="text-warning">Team</span></h3>
        <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 shadow" style="max-width: 300px; height: 400px; margin: auto;">
                    <img src="{{ asset('assets/img/boy.jpg') }}" class="card-img-top rounded-top" alt="Alex Johnson">
                    <div class="card-body">
                        <h5 class="card-title">Alex Johnson</h5>
                        <p class="card-text text-dark">Event Coordinator</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 shadow" style="max-width: 300px; height: 400px; margin: auto;">
                    <img src="{{ asset('assets/img/girl.jpg') }}" class="card-img-top rounded-top" alt="Maria Lopez">
                    <div class="card-body">
                        <h5 class="card-title">Maria Lopez</h5>
                        <p class="card-text text-dark">Marketing Manager</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 shadow" style="max-width: 300px; height: 400px; margin: auto;">
                    <img src="{{ asset('assets/img/boy_(2).jpg') }}" class="card-img-top rounded-top" alt="James Carter">
                    <div class="card-body">
                        <h5 class="card-title">James Carter</h5>
                        <p class="card-text text-dark">Sports Director</p>
                    </div>
                </div>
            </div>
            <!-- Team Member 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center border-0 shadow" style="max-width: 300px; height: 400px; margin: auto;">
                    <img src="{{ asset('assets/img/girl_(2).jpg') }}" class="card-img-top rounded-top" alt="Emma Davis">
                    <div class="card-body">
                        <h5 class="card-title">Emma Davis</h5>
                        <p class="card-text text-dark">Fitness Trainer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievements py-5">
        <div class="container text-center">
            <h3>Our Achievements</h3>
            <div class="row">
                <div class="col-md-4">
                    <h4>100+</h4>
                    <p class="text-dark">Successful Projects</p>
                </div>
                <div class="col-md-4">
                    <h4>50+</h4>
                    <p class="text-dark">Team Members</p>
                </div>
                <div class="col-md-4">
                    <h4>10</h4>
                    <p class="text-dark">Awards Won</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="contact-cta bg-dark text-warning text-center">
        <div class="container">
            <h3>Want to Collaborate?</h3>
            <p>
                We're always looking for new partners, sponsors, and enthusiastic participants. Reach out to us for more
                information!
            </p>
            <a class="text-warning" href="{{ route('contact') }}">Contact Us</a>
        </div>
    </section>

@endsection
