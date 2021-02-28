<?php
    include_once 'header.php'
?>
    <!-- main element -->
    <main class = 'home'>
        <?php
            if (isset($_SESSION["useruid"])) { #check if user is logged in
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        ?>
        <MVBoli>EQUESTRIA THE GAME</MVBoli><br>

            <!-- Slider Image  --> 
        <div class="slidercontainer">  
            <div class="showSlide fade">  
                <img src="img/Slider/1.jpg" />  
                <div class="content"></div>  
            </div>  
            <div class="showSlide fade">  
                <img src="img/Slider/2.jpg"/>  
                <div class="content"></div>  
            </div>  
            <div class="showSlide fade">  
                <img src="img/Slider/3.jpg"/>  
                <div class="content"></div>  
            </div>
            <!-- Navigation arrows -->  
            <a class="left" onclick="nextSlide(-1)">❮</a>  
            <a class="right" onclick="nextSlide(1)">❯</a>  
        </div>   

        <script type="text/javascript">  
                var slide_index = 1;  
                displaySlides(slide_index);  
                function nextSlide(n) {  
                    displaySlides(slide_index += n);  
                }  
                function currentSlide(n) {  
                    displaySlides(slide_index = n);  
                }  
                function displaySlides(n) {  
                    var i;  
                    var slides = document.getElementsByClassName("showSlide");  
                    if (n > slides.length) { slide_index = 1 }  
                    if (n < 1) { slide_index = slides.length }  
                    for (i = 0; i < slides.length; i++) {  
                        slides[i].style.display = "none";  
                    }  
                    slides[slide_index - 1].style.display = "block";  
                }  
        </script>   
            <!-- End of Slider Image. Doesn't seem to work anymore. :(--> 

        <OSB>News:</OSB>
        <OS>None for now</OS>


        <br><br>
        <OSB>Ready to Join te Herd?</OSB><br>
        <div><img src="img/derp.png" class = "Image1"></div>
        <buttons>
            <div id="button" class = "Signup1"><a href="Signup.html">Sign Up</a></div>
            <div id="button" class = "Login1"><a href="login.html">Log In</a></div>
        </buttons>
        <br><br>
    </main>
<?php
    include_once 'footer.php'
?>

        <!-- <script src="test.js"></script> -->