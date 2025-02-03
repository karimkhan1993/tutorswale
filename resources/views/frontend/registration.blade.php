@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins';
    }

    .container {
        display: flex;
        flex-direction: row;
        max-width: 1200px;
        width: 100%;
        background-color: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    .image-section {
        flex: 1;
        background-color: #F8F8FF;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .image-section img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-section {
        flex: 1;
        padding: 30px;
        background-color: #f7f7f4;
    }

    .form-section h1 {
        color: #02224E;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input,
    .form-group button {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .form-group input:focus {
        outline: none;
        border-color: #48A7FF;
    }

    .form-group .gender {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .form-group button {
        background-color: #48A7FF;
        color: #fff;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s;
    }

    .form-group button:hover {
        background-color: #A3D6F5;
    }

    .location-button {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .location-button span {
        margin-left: 10px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            flex-direction: row;
        }

        .form-section {
            padding: 20px;
        }
    }

    @media (max-width: 480px) {
        .container {
            flex-direction: column;
        }

        .image-section,
        .form-section {
            flex: 1;
            width: 100%;
        }

        .form-group input,
        .form-group button {
            font-size: 14px;
        }

        .form-group label {
            font-size: 14px;
        }
    }
</style>
@section('content')

    <div class="container">
        <!-- Left Image Section -->
        <div class="image-section">
            <img src="assets/registration-image.png" alt="Tutor Registration Image">
        </div>

        <!-- Right Form Section -->
        <div class="form-section">
            <h1>Tutor Registration Form</h1>

            <form>
                <!-- Full Name -->
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" placeholder="Enter your full name" required />
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" placeholder="Enter your phone number" required />
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" required />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" required />
                </div>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" required />
                </div>

                <!-- Age -->
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" placeholder="Enter your age" required />
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label>Gender</label>
                    <div class="gender">
                        <input type="radio" id="female" name="gender" value="Female" required />
                        <label for="female">Female</label>

                        <input type="radio" id="male" name="gender" value="Male" required />
                        <label for="male">Male</label>

                        <input type="radio" id="other" name="gender" value="Other" required />
                        <label for="other">Other</label>
                    </div>
                </div>

                <!-- Location Button -->
                <div class="form-group location-button">
                    <button type="button">Get Your Current Location</button>
                </div>

                <!-- Permanent Address -->
                <div class="form-group">
                    <label for="address">Street Address</label>
                    <input type="text" id="address" placeholder="Enter Street Address" required />
                </div>

                <div class="form-group">
                    <label for="area">Area</label>
                    <input type="text" id="area" placeholder="Enter Area" required />
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="Enter City" required />
                </div>

                <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" id="pincode" placeholder="Enter Pincode" required />
                </div>

                <!-- Submit Button -->
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection