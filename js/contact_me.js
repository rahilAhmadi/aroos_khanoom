const textarea=document.getElementById('textarea');
const remaining=document.getElementById('textarea-remaining');
let MAX_CHARS=200;

textarea.addEventListener('input',function(){
    const totalRemaning=MAX_CHARS - textarea.value.length;
    const colorRemaining=totalRemaning<MAX_CHARS*.1?'red':null;
    remaining.textContent=`کارکتر باقی مانده ${totalRemaning}`
    remaining.style.color=colorRemaining;



    if(totalRemaning===0){
        remaining.textContent=`مقدار مجاز تکمیل است ${totalRemaning}`
    }
})

// input type file
let input = document.getElementById("inputTag");
let textInput=document.querySelector('.textInput');
let imgPrev=document.querySelector('.image-prev');
let iconPrev=document.querySelector('.icon_prev');
console.log(textInput[0])
input.addEventListener("change", ()=>{
    let inputImage = document.querySelector("input[type=file]").files[0];
    if(inputImage){
        const reader=new FileReader();
        console.log(reader,inputImage)
        iconPrev.style.display='none';
        imgPrev.style.display='block';
        textInput.style.display='none'

        reader.addEventListener('load',function(){
            imgPrev.setAttribute('src',this.result)
        })
        reader.readAsDataURL(inputImage);
    }else{
        iconPrev.style.display=null;
        imgPrev.style.display=null;
        textInput.style.display=null;
        imgPrev.setAttribute('src','');
    }
})