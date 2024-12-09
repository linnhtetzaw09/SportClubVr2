@extends('layouts.app')

@section('content')

    <!-- Header Section -->
  <header class="news-header text-dark">
    <h1>News & Announcements</h1>
    <p class="text-dark">Stay updated with the latest happenings at GoSports</p>
  </header>

  <!-- Event 1 Section -->
<section class="event-detail py-5 bg-dark text-light" data-date="2024-12-15" data-sport="Basketball" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4">News!</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/sport_events.jpg') }}" class="img-fluid rounded" alt="Sports Events!">
          </div>
          <div class="col-lg-6">
            <h4 class="mt-4 text-warning"> Registration Open for All Upcoming Sports Events!</h4>
            <br>
            <li class="list-group-item bg-dark">📅 Date: December 1, 2024</li>
            <br>
              <p>
                We are thrilled to announce that registrations are now open for all upcoming sports events
                 in Mandalay from January to June 2025! Whether you're interested in football, basketball, 
                 swimming, or hiking, there's an event for everyone. Early bird registration offers discounts, 
                 so don't wait! Visit our Events page to secure your spot today!
              </p>
          </div>
      </div>
  </div>
</section>

<!-- Event 2 Section -->
<section class="event-detail py-5 bg-light text-dark" data-date="2025-01-10" data-sport="Basketball" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4">Table Tennis Champion!</h3>
      <div class="row">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('assets/img/pingpong_special_guest.jpg') }}" class="img-fluid rounded" alt="Table Tennis Champion">
        </div>
        <div class="col-lg-6">
          <h4 class="mt-4 text-warning"> Meet Our Special Guest: National Table Tennis Champion!</h4>
          <br>
          <li class="list-group-item">📅 Date: January 5, 2025</li>
          <br>
            <p class="text-dark">
              We are thrilled to share that the Mandalay Ping Pong Championship will feature
               a special appearance by Myanmar’s National Table Tennis Champion, who will also conduct 
               an exclusive trick shot demo and an interactive Q&A session. Mark your calendars for an unforgettable day!
            </p>
        </div>
    </div>
  </div>
</section>

<!-- Event 3 Section -->
<section class="event-detail py-5 bg-dark text-light" data-date="2024-12-15" data-sport="Basketball" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4">Special Guest!</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/basketball_special_guest.jpg') }}" class="img-fluid rounded" alt="Special Guest">
          </div>
          <div class="col-lg-6">
            <h4 class="mt-4 text-warning"> Special Guest Appearance at Mandalay Basketball League!</h4>
            <br>
            <li class="list-group-item bg-dark">📅 Date: January 15, 2025</li>
            <br>
              <p>
                We are excited to announce that National Basketball Coach Kyaw Zin Hlaing will be attending
                 the Mandalay City Basketball League on February 20, 2025. Coach Kyaw will conduct a special
                  training session on game strategies and shooting techniques. Don't miss the chance to learn
                   from one of the best in the game!
              </p>
          </div>
      </div>
  </div>
</section>

<!-- Event 4 Section -->
<section class="event-detail py-5 bg-light text-dark" data-date="2025-01-10" data-sport="Basketball" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4">Volunteer Needs!</h3>
      <div class="row">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset('assets/img/volunteer.jpg') }}" class="img-fluid rounded" alt="Volunteer Needs">
        </div>
        <div class="col-lg-6">
          <h4 class="mt-4 text-warning"> Volunteer with Us at Mandalay’s Biggest Sports Events!</h4>
          <br>
          <li class="list-group-item">📅 Date: December 10, 2024</li>
          <br>
            <p class="text-dark">
              Want to be part of the action? We're looking for volunteers to help at our sports events 
              throughout the first half of 2025. Get involved in event management, registration assistance, 
              and more. Volunteers will receive a certificate, free event access, and the opportunity to network with
               athletes and professionals in the sports industry. Apply today and make a difference!
            </p>
        </div>
    </div>
  </div>
</section>

@endsection
