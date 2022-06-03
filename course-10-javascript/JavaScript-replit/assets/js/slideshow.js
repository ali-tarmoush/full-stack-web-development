let slideIndex = 0;
function showSlides() {
  let e,
    s = document.getElementsByClassName("mySlides"),
    l = document.getElementsByClassName("dot");
  for (e = 0; e < s.length; e++) s[e].style.display = "none";
  for (++slideIndex > s.length && (slideIndex = 1), e = 0; e < l.length; e++)
    l[e].className = l[e].className.replace(" active", "");
  (s[slideIndex - 1].style.display = "block"),
    (l[slideIndex - 1].className += " active"),
    setTimeout(showSlides, 5000);
}
showSlides();
