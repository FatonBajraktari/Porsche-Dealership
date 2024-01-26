<?php include_once 'include/header.php'?>
     
<h1 style="margin-top: 35vh; margin-left: 8vh; color: white; font-size: 7vh;"><b>Choose<br> Boldly</b></h1>

<div style="display:flex; margin-top: 40vh; justify-content: space-between;">
    <img id="por1" src="assets/porsche1.jpg" alt="porsche1">
    <section id="link1">
        <div id="aboutus">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed lorem lectus. Sed dapibus risus id pharetra tempus. In porttitor neque et urna dictum dapibus. Nullam mollis fermentum nisl quis lobortis. Aliquam varius, quam et laoreet porta, libero risus dapibus dolor, sed vulputate massa ex ac sapien. Quisque tristique iaculis luctus. Sed at aliquam purus. Duis iaculis ipsum nec velit ornare, eget accumsan dui imperdiet. Duis ac eros est. Fusce nec gravida velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </section>
</div>
<?php
    if(isset($_SESSION['id'])){
        ?>
<section id="galery" >
    <h2 style="text-align: center; margin-top: 10vh;">Our Gems</h2>
    <div id="gal1">
        <img src="assets/gem.jpeg" alt="photo1">
        <img src="assets/gem2.jpeg" alt="photo2">
        <img src="assets/gem1.jpg" alt="photo3">
    </div>
    <div class="side">
        <video id="galvid" loop muted autoplay="autoplay">
            <source src="assets/video.mp4">
        </video>
    </div>
    <div id="gal2">
        <img src="assets/gem4.jpg" alt="photo4">
        <img src="assets/gem5.jpeg" alt="photo5">
        <img src="assets/gem3.jpg" alt="photo6">
    </div>
</section>
<?php
    }
?>

<section id="link2"> </section>

<footer>
    <div id="footer"> 
        <div id="movup">
            <div id="ebutdiv">
                <a href="mailto:pirroberisha@gmail.com" target="_blank" id="ebutton"><b>Compose an Email</b></a>
            </div>
    
            <h3 id="socname">Social Media</h3>
            
            <div class="social-buttons">
                <a href="https://www.facebook.com/porsche" target="_blank" class="social-button"><img src="assets/facebook-icon.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/porsche" target="_blank" class="social-button"><img src="assets/instagram-icon.png" alt="Instagram"></a>
                <a href="https://www.pinterest.com/porsche" target="_blank" class="social-button"><img src="assets/pinterest-icon.png" alt="Pinterest"></a>
                <a href="https://www.youtube.com/porsche" target="_blank" class="social-button"><img src="assets/youtube-icon.png" alt="YouTube"></a>
                <a href="https://www.linkedin.com/company/porsche-deutschland-gmbh/" target="_blank" class="social-button"><img src="assets/linkedin-icon.png" alt="LinkedIn"></a>
            </div>
        </div>
    
        <div id="maps">
            <div>
                <div>
                    <h3>Current Region/Location</h3>
                </div>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336318.3699490007!2d8.620748519897468!3d48.810763743699745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799da80f9e76845%3A0x187a543ed0b6bbea!2sPorsche%20Zentrum%20Stuttgart!5e0!3m2!1sen!2s!4v1702144234464!5m2!1sen!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p>Designed and Developed by Faton Bajraktari & Epirot Berisha &copy; 2023</p>
</footer>

<script src="home.js"></script>

</body>
</html>
