const small_img=document.getElementsByClassName('small_img');
const big_img=document.querySelector('.big_img')


for(let i=0;i<small_img.length;i++){
    
    small_img[i].onclick=(e)=>{
        for(let a=0;a<small_img.length;a++){
            small_img[a].classList.remove('active');
        }


        small_img[i].classList.add('active');

        big_img.src=e.target.src;
        big_img.style.display='block';

    }

}


// add to card section:
const notification=document.querySelector('.addToCard');
const btn=document.querySelector('.btn_submit');


btn.onclick=(event)=>{
    event.preventDefault()
    let n=Number(notification.getAttribute('data-count')||0);
    notification.setAttribute('data-count',n+1);
    notification.classList.add('zero');
    if(n>=1){
        console.log("ziad")
        let card_icon=document.querySelector('.addToCard');
        let alert=document.createElement('div');
        alert.classList.add('alert');
        alert.innerHTML='این محصول در سبد خرید موجود است'
        card_icon.appendChild(alert);
        notification.setAttribute('data-count',1);
        setTimeout(() => {
            alert.style.opacity='0';
        }, 2000);

    }
}


// image zoomer
function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    lens=document.getElementById(myresult);

    
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    img.parentElement.insertBefore(lens, img);

    /*calculate the ratio between result DIV and lens:*/
    cx = result.offsetWidth / lens.offsetWidth;
    cy = result.offsetHeight / lens.offsetHeight;


    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";


    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);


    lens.addEventListener("mouseleave", leave);
    img.addEventListener("mouseleave", leave);


    function moveLens(e) {
        lens.style.visibility = 'visible';
        result.style.visibility = 'visible';
      var pos, x, y;
      e.preventDefault();
      pos = getCursorPos(e);
      x = pos.x - (lens.offsetWidth / 2);
      y = pos.y - (lens.offsetHeight / 2);


      if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
      if (x < 0) {x = 0;}
      if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
      if (y < 0) {y = 0;}

      lens.style.left = x + "px";
      lens.style.top = y + "px";
      result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }
    function getCursorPos(e) {
      var a, x = 0, y = 0;
      e = e || window.event;
      a = img.getBoundingClientRect();
      x = e.pageX - a.left;
      y = e.pageY - a.top;
      x = x - window.pageXOffset;
      y = y - window.pageYOffset;
      return {x : x, y : y};
    }

    function leave(){
        lens.style.visibility='hidden';
        result.style.visibility='hidden';
    }
  }

  imageZoom("myimage", "myresult");
