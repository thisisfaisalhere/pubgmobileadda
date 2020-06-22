var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 800
});


var backdrop = document.querySelector('.backdrop');
var modal = document.querySelector('.modal');
var registrationButtons = document.querySelectorAll('.event-registration__button');
var hamburger = document.querySelector('.hamburger');
var mobileNav = document.querySelector('.mobile-nav');
var navItems = document.querySelectorAll('.mobile-nav__item a');
var deadline = new Date("29 june, 2022 19:30:00").getTime(); 
var deadline_2 = new Date("30 june, 2029 19:30:00").getTime(); 



for( i = 0; i < registrationButtons.length; i++) {
registrationButtons[i].addEventListener('click', function() {
  modal.classList.add('open');
  backdrop.classList.add('open');
});
}

for( i = 0; i < navItems.length; i++) {
navItems[i].addEventListener('click', function() {
  mobileNav.classList.remove('open');
  backdrop.classList.remove('open');
});
}

function closeModal() {
  backdrop.classList.remove('open');
  modal.classList.remove('open');
}

backdrop.addEventListener('click', function() {
  mobileNav.classList.remove('open');
  closeModal();
});

modal.addEventListener('click', closeModal);

hamburger.addEventListener('click', function() {
  mobileNav.classList.add('open');
  backdrop.classList.add('open');
});

  
var x = setInterval(function() { 
  var now = new Date().getTime(); 
  var t = deadline - now; 
  var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
  var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
  var seconds = Math.floor((t % (1000 * 60)) / 1000); 
  document.getElementById("day").innerHTML =days ; 
  document.getElementById("hour").innerHTML =hours; 
  document.getElementById("minute").innerHTML = minutes;  
  document.getElementById("second").innerHTML =seconds;  
  if (t < 0) { 
          clearInterval(x); 
          document.getElementById("statement").innerHTML = "TIME UP"; 
          document.getElementById("day").innerHTML ='0'; 
          document.getElementById("hour").innerHTML ='0'; 
          document.getElementById("minute").innerHTML ='0' ;  
          document.getElementById("second").innerHTML = '0'; } 
}, 1000);  

  
var y = setInterval(function() { 
  var now_2 = new Date().getTime(); 
  var t2 = deadline_2 - now_2; 
  var days = Math.floor(t2 / (1000 * 60 * 60 * 24)); 
  var hours = Math.floor((t2%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
  var minutes = Math.floor((t2 % (1000 * 60 * 60)) / (1000 * 60)); 
  var seconds = Math.floor((t2 % (1000 * 60)) / 1000); 
  document.getElementById("day_2").innerHTML =days ; 
  document.getElementById("hour_2").innerHTML =hours; 
  document.getElementById("minute_2").innerHTML = minutes;  
  document.getElementById("second_2").innerHTML =seconds;  
  if (t2 < 0) { 
          clearInterval(y); 
          document.getElementById("statement_2").innerHTML = "TIME UP"; 
          document.getElementById("day_2").innerHTML ='0'; 
          document.getElementById("hour_2").innerHTML ='0'; 
          document.getElementById("minute_2").innerHTML ='0' ;  
          document.getElementById("second_2").innerHTML = '0'; } 
}, 1000); 