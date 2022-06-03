// function test(s) {
//   let p = true;
//   let element = document.getElementById(s);
//   let element_error = document.getElementById("error_" + s);
//   if (element.value) {
//     element.style.borderColor = "inherit";
//     if (element_error.className === "invalid-feedback") {
//       element_error.className.replace("invalid-feedback", "valid-feedback");
//     }
//     p = true;
//   } else {
//     element.style.borderColor = "#fd011a";
//     if (element_error.className === "valid-feedback") {
//       element_error.className.replace("valid-feedback", "invalid-feedback");
//     }
//     let t = "Please provide a valid " + s + ".";
//     element_error.innerHTML = t;
//     p = false;
//   }
//   return p;
// }
// const form = document.getElementById("form_insert");
// form.addEventListener("submit", function (e) {
//   if (
//     !test("name") &&
//     !test("size") &&
//     !test("URL_image") &&
//     !test("Description")
//   ) {
//     e.preventDefault();
//   }
// });
