console.log("Team Edraak JavaScript");
const elements = document.getElementsByTagName("p");
(elements[1].innerHTML = "Hi From Outside "),
  (elements[1].className = "paragraph-part1"),
  (elements[3].innerHTML = "Car "),
  (elements[3].className = "paragraph-part1"),
  console.log("Part 2 {three circles}");
const r = [3, 6, 9];
for (let e = 0; e < r.length; e++) {
  var s =
    "A circle has radius " +
    r[e] +
    " and its area is: " +
    Math.PI * Math.pow(r[e], 2) +
    " cm<sup>2</sup>";
  (document.getElementById("Part2-test" + e).innerHTML = s),
    (document.getElementById("Part2-test" + e).className = "paragraph"),
    console.log(s);
}
function rectangleArea(e, t) {
  return e === t ? "this is square " + Math.pow(e, 2) : e * t;
}
console.log("Part 3 {rectangle}"),
  (document.getElementById("Part3-test1").innerHTML = rectangleArea(3, 3)),
  console.log(rectangleArea(3, 3)),
  (document.getElementById("Part3-test2").innerHTML = rectangleArea(6, 3)),
  console.log(rectangleArea(6, 3)),
  console.log("Part 4 {Arrow functions}"),
  console.log("First snippet");
let sum = (e, t) => e + t;
(document.getElementById("Part4-First-test1").innerHTML = sum(40, 0)),
  console.log("the answer to everything is", sum(40, 0)),
  (document.getElementById("Part4-First-test2").innerHTML = sum(42, 0)),
  console.log("the answer to everything is", sum(42, 0)),
  console.log("Second snippet");
let stringLength = (e) => console.log("the length of", e, "is:", e.length),
  longestCityNameInTheWorld =
    "Taumatawhakatangihangakoauauotamateaturipukakapikimaungahoronukupokaiwhenuakitanatahu";
stringLength(longestCityNameInTheWorld),
  (document.getElementById("Part4-Second-test1").innerHTML =
    "The length of " +
    longestCityNameInTheWorld +
    " is: " +
    longestCityNameInTheWorld.length),
  (document.getElementById("my_paragraph").style.fontSize = "30px"),
  (document.getElementById("my_paragraph").style.color = "red"),
  (document.getElementById("my_paragraph").innerHTML = "مرحبا بالعالم");
var e = document.getElementById("item0"),
  f = document.getElementById("item1"),
  g = document.getElementById("item2");
k = document.getElementById("bod");
function checkDate(e) {
  const t = new Date(),
    n = new Date(e);
  let a = t.getFullYear(),
    r = n.getFullYear(),
    o = t.getMonth() + 1,
    l = n.getMonth() + 1,
    s = t.getDate(),
    m = n.getDate();
  return r > a || (!(r < a) && (l > o || (!(l < o) && m > s)));
}

k.addEventListener("mouseover", function () {
  k.style.backgroundColor = "#ffffff";
}),
  k.addEventListener("mouseout", function () {
    k.style.backgroundColor = "#f2f2f2";
  }),
  e.addEventListener("mouseover", function () {
    e.className = "item item-hover";
  }),
  e.addEventListener("mouseout", function () {
    e.className = "item";
  }),
  f.addEventListener("mouseover", function () {
    f.className = "item item-hover";
  }),
  f.addEventListener("mouseout", function () {
    f.className = "item";
  }),
  g.addEventListener("mouseover", function () {
    g.className = "item item-hover";
  }),
  g.addEventListener("mouseout", function () {
    g.className = "item";
  });
const form = document.getElementById("my_form");
form.addEventListener("submit", function (e) {
  let t = "";
  var n = document.getElementById("age_input"),
    a = document.getElementById("name_input"),
    r = document.getElementById("date_input");
  !n.value || isNaN(n.value) || parseInt(n.value) < 18
    ? ((n.style.borderColor = "red"), (t += "age is invalid</br>"))
    : (n.style.borderColor = "inherit"),
    a.value
      ? (a.style.borderColor = "inherit")
      : ((a.style.borderColor = "red"), (t += "name is invalid</br>")),
    r.value
      ? checkDate(r.value)
        ? (r.style.borderColor = "inherit")
        : ((r.style.borderColor = "red"),
          (t += "The date entered is less than today's date.\n"))
      : ((r.style.borderColor = "red"),
        (t += "The date entered is linvalid</br>")),
    t && (e.preventDefault(), (document.getElementById("erorr").innerHTML = t));
});
