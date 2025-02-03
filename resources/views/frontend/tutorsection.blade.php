@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection
<style>
    /* General styles */
    body {
      font-family: 'Poppins';
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    
    .content-container{
        display: flex;
        flex: 1;
    }

    /* Sidebar styles */
    .filter-panel {
      width: 17%;
      background: #f9f9f9;
      padding: 20px;
      border-right: 1px solid #ddd;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      height: 100%;
      /* Ensure the filter panel occupies full height */
      overflow-y: auto;
      /* Enable vertical scrollbar */
    }


    .filter-panel h3,
    .filter-panel h4 {
      margin-bottom: 15px;
      font-size: 16px;
      color: #333;
    }

    .filter-panel label {
      display: flex;
      align-items: center;
      margin: 5px 0;
    }

    .filter-panel input[type="checkbox"] {
      margin-right: 10px;
    }

    #reset {
      width: 100% !important;
    }

    .filter-panel button {
      background: #48A7FF;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .filter-panel button:hover {
      background: #A3D6F5;
    }

    .filter-panel .navigation-btns {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .slider-container {
      margin-top: 20px;
    }

    .slider-label {
      font-size: 14px;
      display: flex;
      justify-content: space-between;
    }

    .slider-value {
      font-size: 14px;
      color: #333;
      text-align: right;
      margin-top: 5px;
    }

    .slider-container input[type="range"] {
      width: 100%;
      margin: 10px 0;
    }

    /* Profile section styles */
    .profile-section {
        flex:1;
      /*width: 75%;*/
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      overflow-y: auto;
    }

    .profile-card {
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      padding: 15px;
      width: calc(33.333% - 20px);
      text-align: center;
      /* Ensure text is left-aligned */
      position: relative;
    }

    .profile-card img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
    }

    .profile-card h4 {
      margin: 15px 0 10px;
    }

    .profile-card .details {
      font-size: 14px;
      color: #555;
      margin-bottom: 10px;
      text-align: left;
      /* Left-align text */
    }

    .profile-card .details span {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-bottom: 5px;
    }

    .profile-card .details span i {
      margin-right: 8px;
      font-size: 18px;
      color: #48A7FF;
    }

    .profile-card button {
      background: #48A7FF;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 15px;
      cursor: pointer;
      margin-top: 10px;
    }

    .profile-card button:hover {
      background: #A3D6F5;
    }

    .profile-card .btn-group {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .profile-card .btn-group button {
      width: 48%;
    }

    .close-btn {
      display: none;
    }

    .filter-options-btn {
      display: none;
    }


    @media screen and (max-width: 1024px) {
      .profile-card{
        width: calc(33.333% - 20px);
      }
      
      .filter-panel{
          width: 26%;
      }
    }

    @media screen and (max-width: 430px) {
      .profile-card{
        width: calc(100% - 20px) !important;
      }
    }

    /* Responsive styles for mobile */
    @media screen and (max-width: 768px) {
      body {
        flex-direction: column;
      }

      .filter-panel {
        position: fixed;
        top: 0;
        left: -100%;
        width: 80%;
        height: 100%;
        background: #fff;
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transition: left 0.3s ease;
        
      }


      #reset {
        width: 80% !important;
      }

      .close-btn {
      display: block;
      
    }

      .filter-panel.active {
        left: 0;
      }

      .filter-panel .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        background: none;
        border: none;
        cursor: pointer;
        color: #333;
      }

      .profile-section {
        margin-top: 45px;
        width: auto;
      }
      

      .filter-options-btn {
        display: inline-block;
        position: absolute;
        top:50px;
        /*left:20px;*/
        z-index:5;
        background: #48A7FF;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
        transition: background-color 0.3s ease; 
        font-size: 16px;
        cursor: pointer;
        text-align: center;
        margin-top:15px;
        width: 100%;
      }
    }
  </style>
@section('content')

    <div class="content-container">
      <!-- Filter Panel -->
      <div class="filter-panel">
         <!--<button class="close-btn">✖</button> -->
         <div class="parent-container">
        <button id="reset">RESET FILTER</button>
        </div>
    
        <h3>Filter By Gender</h3>
        <label><input type="checkbox" id="filter-gender-male"> Male</label>
        <label><input type="checkbox" id="filter-gender-female"> Female</label>
    
        <h3>Verified Teacher</h3>
        <label><input type="checkbox" id="verified-teacher"> Verified Teacher</label>
        <label><input type="checkbox" id="unverified-teacher"> Un-Verified Teacher</label>
        <label><input type="checkbox" id="both-teachers"> Both</label>
    
        <h3>Show Teacher By City</h3>
        <label><input type="checkbox" id="pan-india-teachers"> Pan India Teachers</label>
        <label><input type="checkbox" id="current-city-teachers" checked> Current City Teachers</label>
    
        <h3>Filter By Mode Of Class</h3>
        <label><input type="checkbox" id="online-class"> Online Class</label>
        <label><input type="checkbox" id="offline-class"> Offline Class</label>
        <label><input type="checkbox" id="all-modes"> All Modes</label>
    
        <h3>Subjects</h3>
        <label><input type="checkbox" id="subject-mathematics"> Mathematics</label>
        <label><input type="checkbox" id="subject-english"> English</label>
        <label><input type="checkbox" id="subject-hindi"> Hindi</label>
        <label><input type="checkbox" id="subject-gk"> General Knowledge (GK)</label>
        <label><input type="checkbox" id="subject-science"> Science</label>
        <label><input type="checkbox" id="subject-social-studies"> Social Studies</label>
        <label><input type="checkbox" id="subject-computer"> Computer Science (Basic)</label>
        <label><input type="checkbox" id="subject-art"> Art and Craft</label>
        <label><input type="checkbox" id="subject-evs"> Environmental Studies (EVS)</label>
        <label><input type="checkbox" id="subject-french"> French Language</label>
        <label><input type="checkbox" id="subject-german"> German Language</label>
    
        <div class="navigation-btns">
          <button>&lt;&lt;</button>
          <button>&gt;&gt;</button>
        </div>
    
        <div class="slider-container">
          <h3>Experience Range</h3>
          <div class="slider-label">
            <span>Min: <span id="min-value">0</span></span>
            <span>Max: 30</span>
          </div>
          <input type="range" id="experience-range" min="0" max="30" value="0">
          <div class="slider-value" id="slider-value">Selected Min: 0</div>
        </div>
      </div>
    
      <!-- Profile Section -->
      <div class="profile-section" id="profile-section">
        <!-- Example Profile Cards -->
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Jai Rai Sir</h4>
          <div class="details">
            <span>Gender: Male | Qualification: M.Sc Gold Medalist</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Pyhsics</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Dr. Sarin Vijay Mythry</h4>
          <div class="details">
            <span>Gender: Male | Qualification: B.Tech, M.E, PhD in Electronics Engineering</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Pyhsics</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Satykam Sir</h4>
          <div class="details">
            <span>Gender: Male | Qualification: MSc for chemistry</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Chemistry</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Jai Rai Sir</h4>
          <div class="details">
            <span>Gender: Male | Qualification: M.Sc Gold Medalist</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Pyhsics</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Dr. Sarin Vijay Mythry</h4>
          <div class="details">
            <span>Gender: Male | Qualification: B.Tech, M.E, PhD in Electronics Engineering</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Pyhsics</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Satykam Sir</h4>
          <div class="details">
            <span>Gender: Male | Qualification: MSc for chemistry</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Chemistry</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
        <div class="profile-card" data-gender="male" data-subject="pyhsics">
          <img src="assets/icon/teacher.png" alt="Profile Picture">
          <h4>Satykam Sir</h4>
          <div class="details">
            <span>Gender: Male | Qualification: MSc for chemistry</span>
            <span>🎓 Passionate educator with a focus on personalized learning, dedicated to student success and growth
              📚✨</span>
            <span><i class="fas fa-book"></i> Subjects: Chemistry</span>
            <span><i class="fas fa-calendar-alt"></i> Experience: 18+ years</span>
            <span><i class="fas fa-map-marker-alt"></i> Location: Delhi</span>
          </div>
          <div class="btn-group">
            <button>View More Details</button>
            <button>Contact Now</button>
          </div>
        </div>
    
      </div>
    
      <script>
        // Update slider value dynamically
        const experienceRange = document.getElementById("experience-range");
        const minValue = document.getElementById("min-value");
        const sliderValue = document.getElementById("slider-value");
    
        experienceRange.addEventListener("input", () => {
          const value = experienceRange.value;
          minValue.textContent = value;
          sliderValue.textContent = `Selected Min: ${value}`;
        });
    
    
    
        const filterPanel = document.querySelector('.filter-panel');
        const filterOptionsButton = document.createElement('button');
        filterOptionsButton.textContent = 'FILTER OPTIONS';
        filterOptionsButton.className = 'filter-options-btn';
        document.body.insertBefore(filterOptionsButton, document.body.firstChild);
    
        const closeButton = document.createElement('button');
        closeButton.textContent = '✖';
        closeButton.className = 'close-btn';
        filterPanel.prepend(closeButton);
    
        filterOptionsButton.addEventListener('click', () => {
          filterPanel.classList.add('active');
        });
    
        closeButton.addEventListener('click', () => {
          filterPanel.classList.remove('active');
        });
    
    
      </script>
      
      </div>
    
@endsection