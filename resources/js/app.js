require('./bootstrap');


let login = document.querySelector('.login');
let modal = document.querySelector('.modalll');
let xis =   document.querySelectorAll('.xis');
let form = document.querySelectorAll('.modal-centerr');
let menuprincipal = document.querySelector('.menuprincipal');
let hamburguer = document.querySelector('.hamburguer');

let contatoemail = document.querySelector('.contatoemail');
let contato = document.querySelector('.contato');
let emailenviar = document.querySelector('.emailenviar');
let xis2 = document.querySelector('.xis2');

let aviso = document.querySelector('.alerta');
let enviar = document.querySelector('.enviar');
let footer = document.querySelector('.footer');
let header = document.querySelector('.header');
let blurr =  document.querySelectorAll('.blur');


let nome = document.querySelector('.nome');
let email = document.querySelector('.email');
let assunto = document.querySelector('.assunto');
let mensagem = document.querySelector('.mensagem');

let erronome = document.querySelector('.erronome');
let erroemail = document.querySelector('.erroemail');
let erroassunto = document.querySelector('.erroassunto');
let erromensagem = document.querySelector('.erromensagem');

let invalidofeedback = document.querySelector('.invalidofeedback');

let log = document.querySelector('.log');
let reg = document.querySelector('.reg');
let logi = document.querySelector('.logi');
let regi = document.querySelector('.regi'); 

let jscanvas = document.querySelector('#canvas-js');
let openSubmenu = document.querySelector('.opensubmenu');
let submenu = document.querySelector('.submenu');

let consulta = document. querySelector('.consulta');
let pesquisarnumero = document.querySelector('.pesquisarnumero');
let mens = document.querySelector('.aviso');
let simregistro = document.querySelector('.simregistro');
let naoregistro = document.querySelector('.naoregistro');

let idusuario = document.querySelector('.idusuario');
let roleusuario = document.querySelector('.roleusuario');
let idusuario1 = document.querySelector('.idusuario1');
let roleusuario1 = document.querySelector('.roleusuario1');

if(consulta){
  $('.consulta').mask('000000000000');
}

pesquisarnumero.addEventListener('click',function(e){
  let valid = true;
  if(consulta.value.length<'9'){
    mens.innerHTML = 'Insira seu siape (9 digitos) ou matricula (12 digitos)';
    valid = false;
  }
  
  else{
    if(consulta.value.length<'12' && consulta.value.length>'9'){
      mens.innerHTML = 'Insira seu siape (9 digitos) ou matricula (12 digitos)';
      valid = false;
    }
    else{
      mens.innerHTML = '';
    }
    
  }

  if(valid==false){
    return false;
  }

  aviso.classList.remove('alert-success');
  aviso.classList.remove('alert-danger');
  aviso.classList.add('alert-primary');
  aviso.innerHTML = 'Carregando...';
  $('.alerta').fadeIn();
  $.ajax({
    type: "GET", 
    url: "api/consulta", 
    async: true,
    data: 'consulta='+consulta.value, 
    success: function(data) { 
      $('.alerta').fadeOut();

      let readonly = document.querySelector('.readonly');
      

      
      if(data=='não foram encontrados usuarios'){
        consulta.value = '';
        readonly.value = data;
        $('.identificacao').html('não foram encontrados usuarios');
        $('.identificacao').show();
        $('#identificacao').hide();
        setTimeout(function(){
          $('.identificacao').fadeOut();
        },5000);
      }else{
        pesquisarnumero.setAttribute('disabled','disabled');
        consulta.setAttribute('readonly','readonly');
        $('#identificacao').show();
        $('.identificacao').html('Esse é você?');
        $('.identificacao').show();
        $('.simregistro,.naoregistro').show();
        readonly.value = data[0].nome;
        
        if(consulta.value.length == 9){
          roleusuario.value = 3;
          idusuario.value = data[0].siape;
        }else{
          roleusuario.value = 4;
          idusuario.value = data[0].matricula;
        }
        
      }

      },//sucesso
      error: function(){
        console.error('não deu');
        
    }//error




  });//ajax

})

$('.naoregistro').click(function(){
  consulta.removeAttribute('readonly');
  pesquisarnumero.removeAttribute('disabled');
  consulta.focus();
  $('.simregistro,.naoregistro').hide();
  $('.identificacao').hide();
  $('.readonly').hide();
});

function blur(px){
    jscanvas.style.filter = px;
    menuprincipal.style.filter = px;
    footer.style.filter = px;
    header.style.filter = px;
    blurr.forEach(function(b){
        b.style.filter = px;
    });
}


let submenuactive = false;

  openSubmenu.addEventListener('click',function(e){
    e.preventDefault();
    if(submenuactive==false){
        submenu.style.height = '90px';
        submenuactive = true;
        
    }else{
      submenu.style.height = '0';
      submenuactive = false;
    }
});


hamburguer.addEventListener('click',function(){

    if(menuprincipal.style.width == '0px' || menuprincipal.style.width == ''){
        menuprincipal.style.width='350px';

        
    }else{
        menuprincipal.style.width = '0';

    }
});



function styleflow(elemento,width,height,overflow,e){
    e.preventDefault();
    elemento.style.width=width;
    elemento.style.height=height;
    document.body.style.overflow = overflow;
}



if(login){
    login.addEventListener('click',function(e){
        styleflow(modal,'100%','100vh','hidden',e);
        blur('blur(5px)');   
    });
}

xis.forEach(function(el){
    el.addEventListener('click',function(e){
        styleflow(modal,'100%','0','auto',e);
        blur('blur(0px)');
    });
})

modal.addEventListener('click',function(e){
    styleflow(modal,'100%','0','auto',e); 
    blur('blur(0px)');
});

form.forEach(function(e){
  e.addEventListener('click',function(ee){
    ee.stopPropagation();
  });
});


contato.addEventListener('click',function(e){
    styleflow(contatoemail,'100%','100vh','hidden',e);
    blur('blur(5px)');
});
contatoemail.addEventListener('click',function(e){
    styleflow(contatoemail,'100%','0','auto',e);
    blur('blur(0px)');
}); 

xis2.addEventListener('click',function(e){
    styleflow(contatoemail,'100%','0','auto',e);
    blur('blur(0px)');
});

emailenviar.addEventListener('click',function(e){
    e.stopPropagation();
});








$(document).ready(function(){
    // $('.slide').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     fade: true,
    //     cssEase: 'linear',
    //     arrows:true,
    //     prevArrow:$('.prev'),
    //     nextArrow:$('.prox')

    // });


    $('.egressosslide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false
      });

      


      function validacao(){
        var status = 0;
        if(nome.value == ''){
          erronome.innerHTML = 'Campo nome requerido!';
          nome.style.borderColor = 'red';
          status = 1;
        }else{
            erronome.innerHTML = '';
            nome.style.borderColor = 'blue';
        }

        if(email.value == ''){
                erroemail.innerHTML = 'Campo email requerido!';
                email.style.borderColor = 'red';
                status = 1;
        }else{
          
          var filtro = 	
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
          
          if(!filtro.test(email.value)) {
            erroemail.innerHTML = 'Insira um email valido!';
            email.style.borderColor = 'red';
            status = 1;

          }else{
            email.style.borderColor = 'blue';
            erroemail.innerHTML = '';
          }         
        }

        if(assunto.value == ''){
            erroassunto.innerHTML = 'Campo assunto requerido!';
            assunto.style.borderColor = 'red';
            status = 1;
        }else{
            assunto.style.borderColor = 'blue';
            erroassunto.innerHTML = '';
        }

        if(mensagem.value == ''){
            erromensagem.innerHTML = 'Campo de mensagem requerido!';
            mensagem.style.borderColor = 'red';
            status = 1;
        }else{
            mensagem.style.borderColor = 'blue';
            erromensagem.innerHTML = '';
        }

        if (status == 1){
          return false;
        }
      }
      
      
      
      enviar.addEventListener('click',function(e){
        e.preventDefault();
        var validar;
        validar = validacao();
        if (validar==false){
            return false;
        }

        aviso.classList.remove('alert-success');
        aviso.classList.remove('alert-danger');
        aviso.classList.add('alert-primary');
        aviso.innerHTML = 'Carregando...';

       

        $('.alerta').fadeIn();

        $.ajax({
          type: "GET", 
          url: "api/email", 
          async: true,
          data: 'nome='+nome.value+'&email='+email.value+'&assunto='+assunto.value+'&mensagem='+mensagem.value, 
          success: function(data) { 
            nome.value = '';
            email.value = '';
            assunto.value = '';
            mensagem.value = '';
            console.log(data);
            $('.alerta').fadeOut();
              setTimeout(function(){
                aviso.classList.remove('alert-primary');
                aviso.classList.remove('alert-danger');
                aviso.classList.add('alert-success');
                aviso.innerHTML = data;
                $('.alert').fadeIn();
                setTimeout(function(){
                $('.alert').fadeOut();
                },5000);
              },500);
              
            
            },//sucesso
            error: function(data){
              $('.alerta').fadeOut();
              setTimeout(function(){
                aviso.classList.remove('alert-success');
                aviso.classList.remove('alert-primary');
                aviso.classList.add('alert-danger');
                aviso.innerHTML = 'Não foi possivel enviar a mensagem';
                $('.alerta').fadeIn();
                setTimeout(function(){
                $('.alert').fadeOut();
                },5000);
              },500);
              console.log(data);
          }//error




        });//ajax
  
      });//enviar

      function avisar(){
        if(invalidofeedback){
          setTimeout(function(){
            $('.invalidofeedback').fadeOut();
          },5000);
        }
      }

      regi.addEventListener('click',function(e){
        e.preventDefault();
        log.style.width = '0';
        reg.style.width = '500px';
      });
      logi.addEventListener('click',function(e){
        e.preventDefault();
        reg.style.width = '0';
        log.style.width = '500px';
      });

      let modalregister = document.querySelector('.modalregister');
      let simregistro = document.querySelector('.simregistro');

      simregistro.addEventListener('click',function(e){
        let readonly = document.querySelector('.readonly');

        e.preventDefault();
        reg.style.width = '0';
        modalregister.style.width = '500px';
        nomeregistro = document.querySelector('.nomeregistro');
        nomeregistro.value = readonly.value;
        idusuario1.value = idusuario.value;
        roleusuario1.value = roleusuario.value;
      });

      let logivolta = document.querySelector('.logivolta');

      logivolta.addEventListener('click',function(e){
        e.preventDefault();
        reg.style.width = '500px';
        modalregister.style.width = '0';
        
      });

      let submitregister = document.querySelector('.submitregister');

      submitregister.addEventListener('click',function(e){
        let emailll = document.querySelector('#emailll');
        let passwordd = document.querySelector('#passwordd');
        let passwordConfirm = document.querySelector('#password-confirm');
        let erroemail = document.querySelector('.erroemail');
        let errosenha = document.querySelector('.errosenha');

        let flag = true;
        var filtro =  
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

           if(!filtro.test(emailll.value)){
            erroemail.innerHTML = 'Insira uma senha válida';
            flag == false;
           } 
           else{
            erroemail.innerHTML = '';
           }
           if(passwordd.value.length <8){
            errosenha.innerHTML = 'Minimo de 8 caracteres';
            flag == false;
           }else{
              if(passwordd.value != passwordConfirm.value){
                errosenha.innerHTML = 'As senhas não combinam.';
                flag == false;
              }else{
                errosenha.innerHTML = '';
              }
           }

           if(flag == false){
            e.preventDefault();
           }
            
          else { 
            e.submit();
          }
           
      });
          
});