const buterfly=document.querySelector('.buterfly');
const imgaroosKhanoom=document.querySelector('.contentImg');
const text=document.querySelector('.contentDesc');
console.log(text);
window.addEventListener('scroll',()=>{
    let value=window.scrollY;
    buterfly.style.right=-value*1+'px';
    buterfly.style.bottom=-value*1+'px';
    imgaroosKhanoom.style.left=-value*1.5+'px';
    imgaroosKhanoom.style.top=-value*1.5+'px';
    text.style.marginTop=-value*4.4+'px';
})