@extends('layouts.app')

@section('content')
    <section class="contact-page__section">
        <h1 class="cc-contact-main-title">Lets Connect</h1>

        <div class="contact-page__container">

            <div class="contact-page__grid-item contact-page__image-box fade-in">
                <img src="assets/reception.jpg" alt="Design class in session">
            </div>
            <div class="contact-page__grid-item contact-page__text-box fade-in">
                <h2>Contact</h2>
                <p>You can contact us using the numbers below for any queries, admissions, or support assistance. Our team
                    is always ready to help you.</p>
                <p><b>Phone:</b> +91 9128446417, 9111402111, 9893594066</p>
            </div>

            <div class="contact-page__grid-item contact-page__text-box fade-in">
                <h2>About the Academy</h2>
                <p>You can visit our office for any inquiries, admissions, or assistance. Our staff will be happy to guide
                    you through our programs and facilities.</p>
                <p><b>Address:</b> C-12, Sector-1, near Nagar Nigam Office, Shankar Nagar, Raipur</p>
            </div>

            <div class="contact-page__grid-item contact-page__image-box fade-in">
                <img src="assets/room2.jpg" alt="Capital Academy of Design signboard">
            </div>

            <div class="contact-page__grid-item contact-page__map-box fade-in">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.531225098546!2d81.635741!3d21.250665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dda23be3666b%3A0x60a52f9c4f5188f!2sCapital%20Academy%20of%20Design!5e0!3m2!1sen!2sin!4v1731267425121"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
            <div class="contact-page__grid-item contact-page__form-box fade-in">
                <h2>Get in Touch</h2>
                <p>Have questions? Fill out the form below, and our admissions team will contact you shortly.</p>
                <div class="container mx-auto p-4">
                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Contact Form -->
                    <form id="contact-page__form" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="contact-page__form-group">
                            <label for="contact-name">Name</label>
                            <input type="text" id="contact-name" name="name" required class="border p-2">
                        </div>

                        <div class="contact-page__form-group">
                            <label for="contact-email">Email</label>
                            <input type="email" id="contact-email" name="email" required class="border p-2">
                        </div>

                        <div class="contact-page__form-group">
                            <label for="contact-phone">Phone</label>
                            <input type="tel" id="contact-phone" name="phone" required class="border p-2">
                        </div>

                        <div class="contact-page__form-group">
                            <label for="contact-message">Message</label>
                            <textarea id="contact-message" name="message" rows="5" required class="border p-2"></textarea>
                        </div>

                    <button type="submit" class="contact-page__submit-btn">Send Message</button>
                </form>

                </div>

            </div>

        </div>
    </section>
    <!-- ================= FOOTER ================= -->
@endsection
