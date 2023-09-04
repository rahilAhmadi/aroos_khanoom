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

