@extends('layouts.app')

@section('content')

  <!-- Header -->
  <header class="event-header text-center bg-light text-dark py-5">
    <h1>Sport Events</h1>
    <p class="text-dark">Join us for a day of sports, fun, and excitement!</p>
  </header>

  <!-- Event 1 Section -->
<section class="event-detail py-5" data-title="Annual Sports Fest 2024" data-date="2024-12-15" data-sport="Football" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4"> Mandalay Youth Football Cup</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/football.jpg') }}" class="img-fluid rounded" alt="Mandalay Youth Football Cup">
          </div>
          <div class="col-lg-6">
              <h4>Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: January 15, 2025</li>
                  <li class="list-group-item">⏰ Time: 9:00 AM – 5:00 PM</li>
                  <li class="list-group-item">📍 Location: Mandalar Thiri Stadium, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: Group-stage matches, Skills challenge,
                                                  Award ceremony for top scorers.</li>
                  <li class="list-group-item">👥 Age Group: 12–18 years</li>
              </ul>
              <h4 class="mt-4">About the Event</h4>
              <p>
                This annual football tournament is designed to showcase the talent of young players across Mandalay. 
                Teams will compete in group stages and knockout rounds, culminating in an exciting final match.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn  bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Mandalay Youth Football Cup">
                  Register
              </button>
          </div>
      </div>
  </div>
</section>

<!-- Event 2 Section -->
<section class="event-detail py-5 bg-light" data-title="Basketball Championship" data-date="2025-01-10" data-sport="Basketball" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4"> Basketball League</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/basketball.jpg') }}" class="img-fluid rounded" alt="Basketball League">
          </div>
          <div class="col-lg-6">
              <h4 class="text-dark">Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: February 20, 2025</li>
                  <li class="list-group-item">⏰ Time: 10:00 AM – 6:00 PM</li>
                  <li class="list-group-item">📍 Location:  Aung Myay Thar Zan Indoor Stadium, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: 5v5 basketball matches, Three-point shooting contest.
                  </li>
                  <li class="list-group-item">👥 Age Group: 15–25 years</li>
              </ul>
              <h4 class="mt-4 text-dark">About the Event</h4>
              <p class="text-dark">
                This is a city-level basketball league featuring talented players and teams.
                 The event is open to fans who want to cheer for their favorite teams.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Basketball League">
                  Register
              </button>
          </div>
      </div>
    </div>
</section>

<!-- Event 3 Section -->
<section class="event-detail py-5" data-title="Annual Sports Fest 2024" data-date="2024-12-15" data-sport="Swimming" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4"> Swimming Open</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/swimming.jpg') }}" class="img-fluid rounded" alt="Swimming Open">
          </div>
          <div class="col-lg-6">
              <h4>Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: March 5, 2025</li>
                  <li class="list-group-item">⏰ Time: 8:00 AM – 4:00 PM</li>
                  <li class="list-group-item">📍 Location: Olympic Swimming Pool, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: 50m, 100m, and 200m races, Team relay events.</li>
                  <li class="list-group-item">👥 Age Group: 10–30 years</li>
              </ul>
              <h4 class="mt-4">About the Event</h4>
              <p>
                A thrilling swimming competition featuring freestyle, breaststroke, backstroke, and relay races. 
                Open to swimmers of all levels.

              </p>
              <!-- Register Button -->
              <button type="button" class="btn  bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Swimming Open">
                  Register
              </button>
          </div>
      </div>
  </div>
</section>

<!-- Event 4 Section -->
<section class="event-detail py-5 bg-light" data-title="Basketball Championship" data-date="2025-01-10" data-sport="Badminton" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4"> Shuttle Masters</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/badminton.jpg') }}" class="img-fluid rounded" alt="Shuttle Masters">
          </div>
          <div class="col-lg-6">
              <h4 class="text-dark">Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: March 22, 2025</li>
                  <li class="list-group-item">⏰ Time:  9:00 AM - 7:00 PM</li>
                  <li class="list-group-item">📍 Location: Chan Mya Thar Si Sports Complex, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: Singles and doubles matches, Winners' award ceremony.
                  </li>
                  <li class="list-group-item">👥 Age Group: 18-40 years</li>
              </ul>
              <h4 class="mt-4 text-dark">About the Event</h4>
              <p class="text-dark">
                A one-day badminton event where singles and doubles players compete for
                 trophies and bragging rights.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Shuttle Masters">
                  Register
              </button>
          </div>
      </div>
    </div>
</section>

<!-- Event 5 Section -->
<section class="event-detail py-5" data-title="Annual Sports Fest 2024" data-date="2024-12-15" data-sport="Marathon" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4"> Half Marathon</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/marathon.jpg') }}" class="img-fluid rounded" alt="Half Marathon">
          </div>
          <div class="col-lg-6">
              <h4>Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date:  April 10, 2025</li>
                  <li class="list-group-item">⏰ Time: 5:30 AM - 11:30 AM</li>
                  <li class="list-group-item">📍 Location: Mandalay Royal Palace Circuit, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: Warm-up yoga session, 21km marathon race,
                                                  Post-race refreshments.</li>
                  <li class="list-group-item">👥 Age Group: 18–45 years</li>
              </ul>
              <h4 class="mt-4">About the Event</h4>
              <p>
                A scenic half-marathon event that takes runners through the historic landmarks of Mandalay.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn  bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Half Marathon">
                  Register
              </button>
          </div>
      </div>
  </div>
</section>

<!-- Event 6 Section -->
<section class="event-detail py-5 bg-light" data-title="Basketball Championship" data-date="2025-01-10" data-sport="Cyclist" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4">Cyclists Challenge</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/cyclist.jpg') }}" class="img-fluid rounded" alt="Cyclists Challenge">
          </div>
          <div class="col-lg-6">
              <h4 class="text-dark">Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: April 30, 2025</li>
                  <li class="list-group-item">⏰ Time: 6:00 AM - 12:00 PM</li>
                  <li class="list-group-item">📍 Location: Pyin Oo Lwin Road, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: 40km and 60km race options, Award ceremony for top finishers.
                  </li>
                  <li class="list-group-item">👥 Age Group: 16-35 years</li>
              </ul>
              <h4 class="mt-4 text-dark">About the Event</h4>
              <p class="text-dark">
                A challenging yet scenic bicycle race featuring a mix of urban and rural routes. 
                Cyclists will ride through picturesque surroundings.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Cyclists Challenge">
                  Register
              </button>
          </div>
      </div>
    </div>
</section>

<!-- Event 7 Section -->
<section class="event-detail py-5" data-title="Annual Sports Fest 2024" data-date="2024-12-15" data-sport="Hiking" data-location="Mandalay Stadium" data-age-group="All Ages">
  <div class="container">
      <h3 class="text-center mb-4"> Mandalay Hills Hiking Festival</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/hiking.jpg') }}" class="img-fluid rounded" alt="Mandalay Hills Hiking Festival">
          </div>
          <div class="col-lg-6">
              <h4>Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: May 18, 2025</li>
                  <li class="list-group-item">⏰ Time: 7:00 AM - 3:00 PM</li>
                  <li class="list-group-item">📍 Location:  Mandalay Hill Trails, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: Nature photography contest, 
                                                  Refreshments and networking at the summit.</li>
                  <li class="list-group-item">👥 Age Group: 15–50 years</li>
              </ul>
              <h4 class="mt-4">About the Event</h4>
              <p>
                An adventurous hiking experience across the beautiful Mandalay Hill Trails. 
                Suitable for both amateur and seasoned hikers.

              </p>
              <!-- Register Button -->
              <button type="button" class="btn  bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Mandalay Hills Hiking Festival">
                  Register
              </button>
          </div>
      </div>
  </div>
</section>

<!-- Event 8 Section -->
<section class="event-detail py-5 bg-light" data-title="Basketball Championship" data-date="2025-01-10" data-sport="Tennis" data-location="Central Sports Arena" data-age-group="18-30">
  <div class="container">
      <h3 class="text-center text-dark mb-4"> Ping Pong Championship</h3>
      <div class="row">
          <div class="col-lg-6 mb-4">
              <img src="{{ asset('assets/img/table_tennis.jpg') }}" class="img-fluid rounded" alt="Ping Pong Championship">
          </div>
          <div class="col-lg-6">
              <h4 class="text-dark">Event Details</h4>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">📅 Date: June 7, 2025</li>
                  <li class="list-group-item">⏰ Time: 9:00 AM - 5:00 PM</li>
                  <li class="list-group-item">📍 Location: Chanayethazan Table Tennis Hall, Mandalay, Myanmar</li>
                  <li class="list-group-item">🏆 Activities: Singles and doubles matches, 
                    Closing ceremony with trophies and certificates.</li>
                  <li class="list-group-item">👥 Age Group: 12-28 years</li>
              </ul>
              <h4 class="mt-4 text-dark">About the Event</h4>
              <p class="text-dark">
                A highly competitive table tennis tournament aimed at bringing 
                together the best players in the region.
              </p>
              <!-- Register Button -->
              <button type="button" class="btn bg-warning text-dark mt-3 register-btn" data-bs-toggle="modal" data-bs-target="#registerModal" 
                      data-title="Ping Pong Championship">
                  Register
              </button>
          </div>
      </div>
    </div>
</section>

<!-- Final Reminder Section -->
<section class="text-center py-5">
    <div class="container">
      <h3 class="text-warning">Don't Miss Out!</h3>
      <p>Remember, you can register for each event directly above. Sign up now and join the fun!</p>
    </div>
</section>

<!-- Shared Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title text-dark" id="registerModalLabel">Register</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="mb-3">
                      <label for="name" class="form-label text-dark">Full Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label text-dark">Email Address</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email address" required>
                  </div>
                  <div class="mb-3">
                      <label for="phone" class="form-label text-dark">Phone</label>
                      <input type="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
                  </div>
                  <button type="submit" class="btn bg-warning text-dark w-100">Submit Registration</button>
              </form>
          </div>
      </div>
  </div>
</div>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
              // Select all buttons that open the modal
              const registerButtons = document.querySelectorAll('[data-bs-target="#registerModal"]');
              
              // Loop through the buttons and add event listeners
              registerButtons.forEach(button => {
                  button.addEventListener('click', () => {
                      // Get the event title from the data-title attribute
                      const eventTitle = button.getAttribute('data-title');
                      
                      // Update the modal title with the event title
                      const modalTitle = document.getElementById('registerModalLabel');
                      modalTitle.textContent = `Register for ${eventTitle}`;
                  });
              });
          });
    </script>
@endsection