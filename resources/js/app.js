require('./bootstrap');


let login = document.querySelector('.login');
let modal = document.querySelector('.modalll');
let xis =   document.querySelector('.xis');
let form = document.querySelector('.modal-centerr');
let body = document.getElementsByTagName('BODY')[0];
let menuprincipal = document.querySelector('.menuprincipal');
let hamburguer = document.querySelector('.hamburguer');
login.addEventListener('click',function(e){
    e.preventDefault();
    modal.style.display = 'flex';
    count = 1;
    interval = setInterval(()=>{
        console.log(modal.style.backgroundColor);
        modal.style.backgroundColor = 'rgba(0,0,0,0.'+count+')';
        if(modal.style.backgroundColor == 'rgba(0, 0, 0, 0.6)'){
            clearInterval(interval);
        }
        count++;
    },100);

});

xis.addEventListener('click',function(){
    modal.style.display = 'none';
    modal.style.backgroundColor == 'rgba(0, 0, 0, 0.0)';
});

modal.addEventListener('click',function(){
    modal.style.display = 'none';
    modal.style.backgroundColor == 'rgba(0, 0, 0, 0.0)';
});

form.addEventListener('click',function(e){
    e.stopPropagation();
});

hamburguer.addEventListener('click',function(){

    // if(menuprincipal.style.display == 'block'){
    //     menuprincipal.style.right='-450px';
    //     setTimeout(function(){
    //         menuprincipal.style.display = 'none';
    //     },600);
        
    // }else{
    //     menuprincipal.style.display = 'block';
    //     setTimeout(function(){
    //         menuprincipal.style.right='0';
    //     },100);
    // }
    if(menuprincipal.style.width == '0px'){
        menuprincipal.style.width='350px';

        
    }else{
        menuprincipal.style.width = '0';

    }
});








$(document).ready(function(){
    $('.slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        cssEase: 'linear',
        arrows:true,
        prevArrow:$('.prev'),
        nextArrow:$('.prox')

    });


    $('.egressosslide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false
      });
});