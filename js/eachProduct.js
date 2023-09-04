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