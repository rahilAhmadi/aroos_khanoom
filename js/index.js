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
let index=0;

next.onclick=()=>{
    if(index==comments_box.length){
        index=0;
    }
    if(comments_box[comments_box.length-1].classList.contains('show')){
        next.style.display="none"
    }
    comments_box[index].classList.add('hide');
    comments_box[index+3].classList.remove('hide');
    comments_box[index+3].classList.add('show');
    index+=1;
    console.log(index);
}
prev.onclick=()=>{
    if(index==0){
        index=comments_box.length-1;
    }else{
        index--;
        console.log(index);
    }
    if(next.style.display=="none"){
        next.style.display="block";
        comments_box[comments_box.length-1].classList.remove('show');
        comments_box[comments_box.length-1].classList.add('hide');
        comments_box[comments_box.length-index].classList.add('show');
    }
}