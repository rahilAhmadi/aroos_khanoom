const menu=document.querySelector(".menuRight ul");
const overlay=document.querySelector(".overlay");
const bars=document.getElementById("bars");

bars.addEventListener("click",function(){
     menu.style.right="0";
    overlay.style.display="block";
})
overlay.addEventListener("click",function (){
    menu.style.right="-200px";
    overlay.style.display="none";
});



// range of price
const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".price-input input"),
  range = document.querySelector(".slider .progress");
let priceGap = 1000;

priceInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minPrice = parseInt(priceInput[1].value),
      maxPrice = parseInt(priceInput[0].value);

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[0].max) {
      if (e.target.className === "input-min") {
        rangeInput[1].value = minPrice;
        range.style.right = (minPrice / rangeInput[1].max) * 100 + "%";
      } else {
        rangeInput[0].value = maxPrice;
        range.style.left = 100 - (maxPrice / rangeInput[0].max) * 100 + "%";
      }
    }
  });
});

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minVal = parseInt(rangeInput[0].value),
      maxVal = parseInt(rangeInput[1].value);

    if (maxVal - minVal < priceGap) {
      if (e.target.className === "range-min") {
        rangeInput[0].value = maxVal - priceGap;
      } else {
        rangeInput[1].value = minVal + priceGap;
      }
    } else {
      priceInput[0].value = minVal;
      priceInput[1].value = maxVal;
      range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
      range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
    }
  });
});

