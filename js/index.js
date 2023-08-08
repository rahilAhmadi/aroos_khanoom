const buterfly=document.querySelector('.buterfly');
const imgaroosKhanoom=document.querySelector('.contentImg');
const text=document.querySelector('.contentDesc');
window.addEventListener('scroll',()=>{
    let value=window.scrollY;
    buterfly.style.right=-value*1+'px';
    buterfly.style.bottom=-value*1+'px';
    imgaroosKhanoom.style.left=-value*1.5+'px';
    imgaroosKhanoom.style.top=-value*1.5+'px';
    text.style.marginTop=-value*4.4+'px';
})


//button Effect
const buttonStart=document.querySelector('.start_btn');
buttonStart.addEventListener('mouseover',function(event){
    console.log('hovered')
    let x=event.clientX-event.target.offsetLeft;
    let y=event.clientY-event.target.offsetTop;
    const span=document.createElement('span');
    span.classList.add('span_click_btn');
    span.style.left=`${x}px`;
    span.style.top=`${y}px`;
    this.appendChild(span);

    setTimeout(() => {
        span.remove();
    }, 1000);

})


// comment sectoin
const next=document.querySelector('.next_comment');
const prev=document.querySelector('.prev_comment');
const comments_box=document.querySelector('.comments').children;
let currentIndex = 0;


for (let i = 0; i <= 2 ; i++) {
    comments_box[i].classList.add('visible');
  }

next.onclick=()=>{
    for (let i = currentIndex; i < currentIndex + 3; i++) {
        comments_box[i].classList.remove('visible');
      }
    
      currentIndex += 3;
      if (currentIndex >= comments_box.length) {
        currentIndex = comments_box.length - 3;
      }
    
      for (let i = currentIndex; i < currentIndex + 3; i++) {
        comments_box[i].classList.add('visible');
      }
}
prev.onclick=()=>{
    for (let i = currentIndex; i < currentIndex + 3; i++) {
        comments_box[i].classList.remove('visible');
      }
    
      currentIndex -= 3;
      if (currentIndex < 0) {
        currentIndex = 0;
      }
    
      for (let i = currentIndex; i < currentIndex + 3; i++) {
        comments_box[i].classList.add('visible');
      }
}