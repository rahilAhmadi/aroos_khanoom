const textarea=document.getElementById('textarea');
const remaining=document.getElementById('textarea-remaining');
let MAX_CHARS=500;

textarea.addEventListener('input',function(){
    const totalRemaning=MAX_CHARS - textarea.value.length;
    const colorRemaining=totalRemaning<MAX_CHARS*.1?'red':null;
    remaining.textContent=`کارکتر باقی مانده ${totalRemaning}`
    remaining.style.color=colorRemaining;



    if(totalRemaning===0){
        remaining.textContent=`مقدار مجاز تکمیل است ${totalRemaning}`
    }
})