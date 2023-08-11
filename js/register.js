function validate(event){
    if(event.target.value.length<3){
        var x = document.getElementById("snackbar-vms")
        x.innerHTML="خطا!!! نام شما باید حداقل 3 کاراکتر باشد.";
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
}
function validatepass(event){
    
    console.log("changed");
   let password= event.target.value;
   var x = document.getElementById("snackbar-vms")
    if (password.length<8){
        x.innerHTML="پسورد انتخابی شما حداقل باید 8 کاراکتر باشد";
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
}


//password button
const toggle=document.querySelector('.toggle');
const input=document.getElementById('input_pass');
toggle.addEventListener('click',function(){
  if(input.type==="password"){
        input.setAttribute('type','text');
        toggle.classList.add('hide');
 }else{
      input.setAttribute('type','password');
      toggle.classList.remove('hide');
 }
})

// modal section
const btn=document.querySelector('.btn_submit');
const alertBox=document.querySelector('.alert-box');
const closebtn=document.querySelector('.close-btn');
const nameInput=document.querySelector('.input_name');
const usernameInput=document.querySelector('.input_username');
const passwordInput=document.querySelector('.input_pass');
let timer;

const form=document.querySelectorAll('.form_login input');
console.log(form);

for(let i=0;i<form.length;i++){
    form[i].addEventListener('input',function(){
        if(form[i].value.length == 0){
        form[i].style.border='1px solid #af0423e4'
    }
    else{
        form[i].style.border='1px solid #038f31'
        }
    })
}

btn.addEventListener('click',function(e){
    if(nameInput.value.length==0 || passwordInput.value.length==0||usernameInput.value.length==0){
        e.preventDefault();
        // closebtn.getElementsByTagName('p').innerHTML="برای ثبت نام باید همه فیلد ها پر باشند."
        showAlertBox();

    }
})

closebtn.addEventListener('click',function(){
    hideAlertBox();
    clearTimeout(timer);
})


function showAlertBox(){    
    alertBox.classList.remove('hide');
    alertBox.classList.add('show');
    if(alertBox.classList.contains('hidden')){
        alertBox.classList.remove('hidden');
    }
    timer=setTimeout(() => {
        hideAlertBox();
    }, 5000);
}

function hideAlertBox(){
    alertBox.classList.remove('show');
    alertBox.classList.add('hide');
}