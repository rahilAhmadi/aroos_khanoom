console.log("toggle")
const toggle=document.querySelector('.toggle');
const input=document.getElementById('input_pass');
toggle.addEventListener('click',function(){
    console.log("click shodammm")
    if(input.type==="password"){
        input.setAttribute('type','text');
        toggle.classList.add('hide');
    }else{
        input.setAttribute('type','password');
        toggle.classList.remove('hide');
    }
})