// //password button
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


///form validation
const form=document.getElementById('form');
const nameinput=document.getElementById('name_user_rigister');
const username=document.getElementById('input_user');
const password=document.getElementById('input_pass');

nameinput.addEventListener('blur',function(){
    checkInput('user');
})
username.addEventListener('blur',function(){
    checkInput('name');
})
password.addEventListener('blur',function(){
    checkInput('pass');
})


function checkInput(key){
    const usernameVaule= username.value.trim();
    const nameValue= nameinput.value.trim();
    const passwrodVaule= password.value.trim();

  if(key=='name'){
    if(usernameVaule===''){
        setError(username,'این فیلد نمیتواند خالی باشد نام کاربری انتخاب کنید');
    }else{
        setsuccess(username);
    }
  }


  if(key=='user'){

    if(nameValue===''){
        setError(nameinput,'مقدار نام نمیتواند خالی باشد نامی را انتخاب کنید.')
    }else{
        setsuccess(nameinput);
    }
}

   if(key=='pass'){
    if(passwrodVaule===''){
      setError(password,'مقدار پسورد خالی است پسوردی وارد کنید')
  }else{
      setsuccess(password)
  }
   }
}

function setError(input, massege){
    const formControl = input.parentElement;
    console.log(formControl)
    const span= formControl.querySelector('span');

    span.innerHTML=massege;
    formControl.className='form-control error';
}

function setsuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success'
}


//password validation
var myInput = document.getElementById("input_pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}