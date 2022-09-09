 <!--<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url('images/img11.jpg');">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                
                <!-- Slide Two - Set the background image for this slide in the line below 
                <div class="carousel-item" style="background-image: url('images/img8.jpg');">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- Slide One - Set the background image for this slide in the line below 
                <div class="carousel-item active" style="background-image: url('images/img9.jpg');">
                    <div class="carousel-caption d-none d-md-block">
                       
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('images/img10.webp');">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}

</style>
<div class="w3-content w3-display">

<div class=" mySlides">
  <img src="images/img8.jpg" style="width:100%" >
</div>

<div class=" mySlides">
  <img src="images/img9.webp" style="width:100%" >
</div>

<div class=" mySlides">
  <img src="images/img10.jpg" style="width:100%" >
</div>

<div class=" mySlides">
  <img src="images/img11.jpg" style="width:100%" >
</div>
<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
