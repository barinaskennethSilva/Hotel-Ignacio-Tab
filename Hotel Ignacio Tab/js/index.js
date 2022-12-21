//for search function
function opensearch(){
  var searchForm = document.getElementsByClassName("searchForm")[0];
  var searchIcon = document.getElementById("searchIcon");
  var searchIcon1 = document.getElementById("searchIcon1");
   var x = window.matchMedia("(max-width:600px)");
   var y = window.matchMedia("(max-width:700px)");
  if (x.matches) {
     searchForm.style.width = '350px';
     searchIcon1.style.display = "none";
  searchIcon.style.display = "block";
  }
else if(y.matches){
searchForm.style.width = '0px';
  searchIcon.style.display = "none";
  searchIcon1.style.display = "block";
}
  else{
  searchForm.style.width = '600px';
  searchIcon1.style.display = "none";
  searchIcon.style.display = "block";
}
}
function closeSearch(){
  var searchForm = document.getElementsByClassName("searchForm")[0];
   var searchIcon = document.getElementById("searchIcon");
  var searchIcon1 = document.getElementById("searchIcon1");

searchForm.style.width = '0px';
  searchIcon.style.display = "none";
  searchIcon1.style.display = "block";
}
function OpenDash(){
  var dashboard = document.getElementById("dashboard");
  var dashoff = document.getElementById("dashoff");
  dashboard.style.width ="50%";
   dashoff.style.width ="50%";
}

function CloseDash(){
  var dashboard = document.getElementById("dashboard");
  var dashoff = document.getElementById("dashoff");
  dashboard.style.width ="0%";
   dashoff.style.width ="0%";
}

const swiper = new Swiper('.swiper', {
  // Optional parameters
autoplay: {
  delay:3000,
  disableOnInteraction:false,
},
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


  
});
