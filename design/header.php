    <style>
        .header {
            position: sticky;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .logo span {
            font-weight: bold;
            color: #000;
        }

        .nav {
            display: flex;
            gap: 20px;
        }

        .nav a {
            text-decoration: none;
            color: #000;
            font-weight: normal;
        }

        .nav a:hover {
            color: #48A7FF;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .contact {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #000;
            font-weight: bold;
        }


        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .button.primary {
            background: #48A7FF;
            color: #fff;
            box-shadow: 0 14px 26px -12px #48A7FF;
        }

        .button.primary:hover {
            background: #A3D6F5;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            cursor: pointer;
            padding: 10px 20px;
            background: #48A7FF;
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .dropdown-toggle:hover {
            background: #A3D6F5;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
            z-index: 1000;
            width:103%;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: black;
        }

        .dropdown-menu a:hover {
            background: #48A7FF;
            color: white;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background-color: #000;
        }

        .mobile-nav {
            display: none;
            flex-direction: column;
            gap: 10px;
            position: absolute;
            top: 60px;
            right: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            border-radius: 5px;
            z-index: 999;
        }

        .mobile-nav a {
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .mobile-nav a:hover {
            color: #48A7FF;
        }

        @media (max-width: 1118px) {

            .nav,
            .actions {
                display: none;
            }

            .hamburger {
                display: flex;
            }
        }
    </style>

    <header class="header">
        <div class="logo">
            <img src="assets/logo.png" alt="Logo">
        </div>
        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="about-us.php">About Us</a>
            <!--<a href="#">One-To-One Class</a>-->
                        <div class="dropdown">
                <a href="#" class="toggle">One-To-One Class</a>
                <div class="dropdown-menu">
                    <a href="tutor-section.php">Tutor Section</a>
                    <hr>
                    <a href="registration-form.php">Apply as Tutor</a>
                </div>
            </div>
            <!--<a href="#">How it's work</a>-->
            <a href="contact.php">Contact Us</a>
        </nav>
        <div class="actions">
            <div class="dropdown">
                <button class="button primary dropdown-toggle">Sign Up / Log In</button>
                <div class="dropdown-menu">
                    <a href="#">As a Student</a>
                    <hr>
                    <a href="#">As a Tutor</a>
                </div>
            </div>
            <div class="contact">
                <img src="assets/icon/phone-black.svg" alt="" style="height: 30px; width: 30px;">
                +91 1234567890
            </div>
        </div>
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="mobile-nav" id="mobileNav">
            <a href="index.php">Home</a>
            <a href="about-us.php">About Us</a>
            <a href="#">One-To-One Class</a>
            <div class="dropdown">
                <a href="#" class="toggle">One-To-One Class</a>
                <div class="dropdown-menu">
                    <a href="tutor-section.php">Tutor Section</a>
                    <hr>
                    <a href="registration-form.php">Apply as Tutor</a>
                </div>
            </div>
            <!--<a href="#">How it's work</a>-->
            <a href="contact.php">Contact Us</a>
            <a href="tel:+911234567890" class="contact">+91 1234567890</a>
            <div class="dropdown">
                <button class="button primary dropdown-toggle">Sign Up / Log In</button>
                <div class="dropdown-menu">
                    <a href="#">As a Student</a>
                    <a href="#">As a Tutor</a>
                </div>
            </div>
        </div>
    </header>
    <script>
        function toggleMenu() {
            const mobileNav = document.getElementById('mobileNav');
            if (mobileNav.style.display === 'flex') {
                mobileNav.style.display = 'none';
            } else {
                mobileNav.style.display = 'flex';
            }
        }
    </script>
