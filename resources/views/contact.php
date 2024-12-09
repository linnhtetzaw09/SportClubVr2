@extends('layouts.app')

@section('content')

    <!-- Header Section -->
    <header class="py-5 bg-light text-center">
        <h1>Contact <span class="text-warning">GoSports</span></h1>
        <p class="lead text-dark">We’re here to help you with any inquiries or collaborations.</p>
    </header>

    <!-- Contact Information -->
    <section class="contact-info py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h3>Contact Details</h3>
                    <ul class="list-group">
                        <li class="list-group-item border-0">
                            <i class="fas fa-map-marker-alt text-warning"></i> 
                            <strong>Address:</strong> 123 Sports Avenue, Fitness City, Country
                        </li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-phone-alt text-warning"></i> 
                            <strong>Phone:</strong> +1 234 567 890
                        </li>
                        <li class="list-group-item border-0">
                            <i class="fas fa-envelope text-warning"></i> 
                            <strong>Email:</strong> contact@gosports.com
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h3>Our Location</h3>
                    <div class="ratio ratio-16x9 border rounded">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.5733964959683!2d96.08910301520104!3d21.975140985603926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30cb720fe3ae8e41%3A0xa0f1d7e2cd12f1f6!2sMandalay%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2sus!4v1634246847763!5m2!1sen!2sus"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Links -->
    <section class="social-links py-4 text-center bg-dark text-white">
        <h4>Follow Us</h4>
        <a href="#" class="text-warning me-3"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-warning me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-warning me-3"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-warning"><i class="fab fa-linkedin"></i></a>
    </section>

@endsection
