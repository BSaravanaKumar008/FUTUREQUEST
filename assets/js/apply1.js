var i;
let inc = 0;
const country = document.querySelectorAll(".country");
const topdiv = document.querySelector(".topdiv");
const cntry = document.querySelector("#cntry");

cntry.addEventListener("click", function () {
  topdiv.style.display = "block";
});

function stateClick(clicked_id) {
  for (i = 0; i < country.length; i++) {
    country[i].style.display = "none";
  }
  inc = clicked_id;
  country[inc].style.display = "block";
}
function transferCheck(clicked_id) {
  cntry.value = clicked_id;
  topdiv.style.display = "none";
}
