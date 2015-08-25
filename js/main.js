$(document).ready(function () {
  $(".component").typed({
    strings: ["Web Developer", "Ruby on Rails lover", "Node.js enthusiast", "Avid Michael Crichton fan", "Speedcuber", "Pianist", "Senior undergrad at<br>IIT Kharagpur."],
    contentType: 'html', // or 'text',
    // typing speed
    typeSpeed: 30,
    // time before typing starts
    startDelay: 0,
    // backspacing speed
    backSpeed: 30,
    // time before backspacing
    backDelay: 1000,
  });
});
