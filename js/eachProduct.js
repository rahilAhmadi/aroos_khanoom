console.log(document.querySelector('.big_each img'));
// const smallImage=[...document.querySelectorAll('.small_img')];
function showImage(src){
    document.querySelector('.big_each img').src=src;
}