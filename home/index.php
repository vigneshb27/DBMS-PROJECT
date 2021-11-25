<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Home Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand">PHD Student Details</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#learn" class="nav-link">What You'll Learn</a>
            </li>
            <li class="nav-item">
              <a href="#outcomes" class="nav-link">Outcomes</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Showcase -->
    <section
      class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Become a <span class="text-warning"> Research Scholar </span></h1>
            <p class="lead my-4">
              We focus on teaching our students the fundamentals of the latest
              and greatest technologies to prepare them for their bright future
            </p><a href="../staff_login.php">
            <button
              class="btn btn-primary btn-lg"
              data-bs-toggle="modal"
              data-bs-target="#enroll"
            >
              Login Now
            </button></a>
          </div>
          <img
            class="img-fluid w-50 d-none d-sm-block"
            src="img/showcase.svg"
            alt=""
          />
        </div>
      </div>
    </section>

   

   
    <!-- Learn Sections -->
    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img src="img/491-4913148_web-design-and-development-computer-science-engineering-cartoon.png" class="img-fluid" alt="" />
          </div>
          <div class="col-md p-5">
            <h2>About Our Programs</h2>
            <p class="lead">
              Our vision is that all learners are prepared to thrive in a dynamic future.
              Our programs leverage University’s interdisciplinary strengths as well as the latest advancements in technology.
            </p>
            <p>
              The doctoral program in advertising at Madras Institute of Technology is interdisciplinary in nature. 
              It is designed to provide a rigorous educational experience that challenges graduates to attain their highest 
              potential of intellectual achievement. The Ph.D. program is designed to meet the needs of exceptional graduate 
              students who wish to prepare for teaching and research positions in universities or for research careers 
              in industry or business.
            </p>
            
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container" id = "outcomes">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>Valuable Outcomes</h2>
            <p class="lead">
              The success is in halfway when you are in right path under the proper
              guidance, which our institute will be insisting you!
            </p>
            <p>
              The department offers support to our incoming students with teaching assistantships, 
              graduate assistantships and university fellowships as well as funds for conference presentations.
              The outcomes of the PHD programs include a vast opportunity for the candidate in the technical world.
              Most of our students are placed in a very big companies and others driven the attention by publishing a
              more influencing research papers. The success of our students is due to their deligency and the utmost care
              given by thier guide. A huge opportunity is placed in front of the students and let they gain benefit through
              our programs.
              
            </p>
            
          </div>
          <div class="col-md">
            <img src="img/—Pngtree—vector buckle-free cartoon character doctor_4598215.png" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    
    


    <!-- Contact & Map -->
    <section class="p-5" id = "contact">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> MIT Rd, Radha Nagar, Chromepet, Chennai

              </li>
              <li class="list-group-item">
                <span class="fw-bold">College Phone:</span> 044-22516004
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Department Phone:</span> 91-9444109209 
              </li>
              <li class="list-group-item">
                <span class="fw-bold">College Website:</span> www.mitindia.edu
              </li>
              <li class="list-group-item">
                <span class="fw-bold">University Website:</span>
                www.annauniv.edu
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

    <script>
      mapboxgl.accessToken =
        'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
      var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [80.139803, 12.948289],
        zoom: 17.3,
      })
    </script>
  </body>
</html>
