function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
  captionText.dataset.id = dots[slideIndex-1].dataset.id;
  console.log(captionText.dataset.id);
}

function validateYouTubeUrl(myID)
    {
        var videoID = myID;

        var request = new XMLHttpRequest();

        request.open('GET', 'https://www.googleapis.com/youtube/v3/videos?id='+ videoID + '&key=KEY&part=snippet', true);

        request.send();

        if (request.status === 200) {
        var response = JSON.Parse(request.responseText);
            if (response.pageInfo.totalResults == 0) {
                 return false;
            } else {
                 return true;
            }
        } else {
            return false;
        }
        temp.pageInfo.totalResults
    }
