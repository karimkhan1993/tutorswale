@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<style>
    body {
        font-family: 'Poppins';
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .banner {
        background: url('assets/Contacus.png') no-repeat center center;
        background-size: cover;
        color: white;
        text-align: center;
        padding: 100px 0;
        position: relative;
    }

    /* .banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); 
    } */

    .banner h1 {
        position: relative;
        margin-right: 120px;
        text-align: end;
        font-size: 32px;
        z-index: 1;
    }

    .contact-section {
        padding: 50px 0;
        background: #f8f8f8;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .contact-info, .contact-form {
        flex: 1;
        min-width: 300px;
        padding: 20px;
        background: white;
        margin: 10px;
        border-radius: 15px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-info h2, .contact-form h2 {
        margin-bottom: 20px;
        color: #02224E;
    }

    .contact-info p, .contact-form form input, .contact-form form textarea {
        margin-bottom: 10px;
        width: 95%;
    }

    .contact-info p {
        display: flex;
        align-items: center;
    }

    .contact-info p img {
        margin-right: 10px;
        width: 30px;
        height: 30px;
    }

    .contact-form form input, .contact-form form textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .contact-form form button {
        padding: 10px 20px;
        border: none;
        background: #48A7FF;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .contact-form form button:hover {
        background: #E5EFF8;
    }

    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
        }
    }
</style>
@section('content')
 <!-- Banner Section -->
    <section class="banner">
        <h1>Contact Us Now</h1>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-info">
                <h2>Keep In Touch With Us</h2>
                <p><img src="assets/icon/location-point.png" alt="Address Icon">{!! setting('officeaddress') !!}</p>
                <p><img src="assets/icon/call.png" alt="Phone Icon">+91 {!! setting('Contact1') !!}, +91 {!! setting('Contact2') !!}</p>
                <p><img src="assets/icon/email.png" alt="Email Icon">{!! setting('contactemail') !!}</p>
                <p><img src="assets/icon/whatsapp (1).png" alt="WhatsApp Icon"> +91 {!! setting('whatsappNo') !!}</p>
            </div>
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <form action="{{ route('frontend.contactus.save') }}" method="POST">
                    @csrf
                    <input type="text"  name="name" placeholder="Name *" required>
                    <input type="email" name="email" placeholder="E-mail *" required>
                    <input type="text" name="phone" placeholder="Phone *" required>
                    <input type="text" name="subject" placeholder="Your Subject *" required>
                    <textarea placeholder="Message" name="message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
                @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            </div>
        </div>
    </section>

@endsection