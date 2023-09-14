const filterItem=document.querySelectorAll('.item_filter .input_check');
const products=document.querySelector('.content-div').children;




for(let i=0; i<filterItem.length;i++)
{
    filterItem[i].onchange=function(e){
        if(filterItem[i].checked){
            filterItem[i].classList.add('active');
        }else{
            filterItem[i].classList.remove('active')
        }
        const displayItem=filterItem[i].getAttribute('data-filter');
        for (let z=0;z<products.length;z++){
            products[z].style.transform='scale(0)';
            setTimeout(() => {
                products[z].style.display='none'
            }, 500);
            
            if(products[z].getAttribute('data-category')==displayItem || displayItem=='all'){
                products[z].style.transform='scale(1)';
                setTimeout(() => {
                    products[z].style.display='block'
                }, 500);
            }
        }
    }
}