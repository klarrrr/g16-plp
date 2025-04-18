<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pamantasan ng Lungsod ng Pasig</title>
    <link rel="icon" href="images/PLP_Logo.png">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Nav Container -->
    <nav>
        <div id="nav_upper_part">
            <!-- Social Media Buttons -->
            <div class="soc_med"">
                <a href=" https://www.facebook.com/pamantasannglungsodngpasig/">
                <img src="SVGs/soc_med/fb.svg" alt="FB Icon">
                </a>

                <a href="https://www.youtube.com/@pamantasannglungsodngpasig8829">
                    <img src="SVGs/soc_med/yt.svg" alt="YT Icon">
                </a>
                <a href="https://www.instagram.com/explore/locations/1029602515/pamantasan-ng-lungsod-ng-pasig/">
                    <img src="SVGs/soc_med/ig.svg" alt="IG Icon">
                </a>
            </div>
            <!-- Logo including the name of the school -->
            <a href="plp_sample2.html" style="text-decoration: none; color: black;">
                <div class="logo_grouped">
                    <img src="images/PLP_Logo.png" alt="PLP Logo" id="nav_plp_logo">
                    <div id="nav_logo_texts">
                        <h1 class="main_text" id="plp_nav_main_text">PAMANTASAN NG LUNGSOD NG PASIG</h1>
                        <h2 class="sub_text" id="plp_nav_sub_text">University of Pasig City</h2>
                    </div>
                </div>
            </a>
            <!-- Button to Inquire -->
            <button name="inq_btn" id="inq_btn">Inquire Now</button>
        </div>
        <!-- Unordered List of Navigation Items -->
        <hr>
        <ul id="nav_items">
            <?php
            if (isset($_GET['userText']) && !empty($_GET['userText'])) {
                echo "<li>" . htmlspecialchars($_GET['userText']) . "</li>";
            } else {
                echo "<li>No input received.</li>";
            }
            ?>
            <li>About</li>
            <li>Admission</li>
            <li>Academics</li>
            <li>Campus Life</li>
            <li>Research</li>
            <li>Reservation</li>
            <li>Alumni</li>
            <li>News</li>
            <li>Events</li>
        </ul>
    </nav>
    <!-- Main Video of PLP -->
    <div id="video_container">
        <div id="vid_text_container">
            <h2 class="video_text" id="vid_welcome_text">Welcome to</h2>
            <h1 class="video_text" id="vid_plp_text">Pamantasan ng Lungsod ng Pasig</h1>
        </div>
        <video autoplay loop src="video/plp_vid.mp4" id="main_plp_vid">Cannot play video</video>
    </div>
    <!-- About Section -->
    <div class="" about_container>
        <h3>ABOUT PLP</h3>
        <p>The Pamantasan ng Lungsod ng Pasig is the realization of our long cherished dream for all Pasigueños. Now, we
            can
            proudly claim that the Pasig City Government has provided for the complete education needs of its
            constituents –
            from day care to college.
            <br>
            By using all available facilities and resources of the City through integrated activities and networking
            initiated by the Pamantasan, we foresee our youth to be at par with the world’s best in terms of
            competencies
            that develop in each one of them a strong sense of nationhood, responsibility, integrity, efficiency, and
            global
            consciousness.
        </p>
        <img src="images/aerial_view_plp.jpg" alt="Aerial View of PLP" id="aerial_img_plp">
    </div>
    <div class="latest_news_container">
        <h3>LATEST NEWS</h3>
        <div class="news_container">
            <div class="news_card" id="news1"></div>
            <div class="news_card" id="news2"></div>
            <div class="news_card" id="news3"></div>
        </div>
    </div>
    <div class="landmark_container">
        <h3>LANDMARKS</h3>
        <!-- Embedded Google Street View of PLP -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!4v1744542728444!6m8!1m7!1sz4FNKx2OpNJSW-c5VZK5aQ!2m2!1d14.56158871310125!2d121.0747111263509!3f22.598841697556825!4f5.484409261404167!5f0.7820865974627469"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Embedded Google Map View of PLP -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6482025081345!2d121.07217507494352!3d14.562099278018431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c87941df8e2b%3A0xc7cd5073d3d73742!2sPamantasan%20ng%20Lungsod%20ng%20Pasig!5e0!3m2!1sen!2sph!4v1744542664602!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Footer Section of the Site -->
    <footer>
        <div id="footer_contact_us">
            <h4>Contact Us</h4>
            <img src="" alt="">
            <p>2-8643-1014</p>
        </div>
        <div id="footer_downloads">
            <h4>Downloads</h4>
            <img src="" alt="">
            <p>inquiry@plpasig.edu.ph</p>
        </div>
        <div id="footer_academic_quick_links">
            <h4>Academic Quick Links</h4>
            <img src="" alt="">
            <p>12-B Alcalde Jose, Pasig, 1600 Metro Manila</p>
        </div>
    </footer>
</body>

</html>