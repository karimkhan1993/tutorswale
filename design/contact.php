<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Contact Us</title>
    
    <!--header-->
    <?php include('header.php');?>
    <!--header end-->
    
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
</head>
<body>

    <!-- Banner Section -->
    <section class="banner">
        <h1>Contact Us Now</h1>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-info">
                <h2>Keep In Touch With Us</h2>
                <p><img src="assets/icon/location-point.png" alt="Address Icon">office no 1, first floor SHD complex shatavbdi inclave sector 49 noida-201301</p>
                <p><img src="assets/icon/call.png" alt="Phone Icon">+91 83684 06646, +91 99111 08084</p>
                <p><img src="assets/icon/email.png" alt="Email Icon">physicspointjrai@gmail.com</p>
                <p><img src="assets/icon/whatsapp (1).png" alt="WhatsApp Icon"> +91 99111 08084</p>
            </div>
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <form action="#">
                    <input type="text" placeholder="Name *" required>
                    <input type="email" placeholder="E-mail *" required>
                    <input type="text" placeholder="Phone *" required>
                    <input type="text" placeholder="Your Subject *" required>
                    <textarea placeholder="Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</body>

<!--foooter-->
<?php include('footer.php');?>
<!--footer end-->

</html>
