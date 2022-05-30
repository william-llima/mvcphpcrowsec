(function(){
    'use strict'
var btn_login = document.getElementById("login_btn")
var emailvalue= document.getElementById("emailvalue")
var senhavalue= document.getElementById("senhavalue")

datalogin={
    email:emailvalue.value,
    senhavalue:senhavalue.value
}

function testejson(datareturn){
    console.log(datareturn)
}
var datalogin={}

btn_login.addEventListener('click',function(){
    datalogin={
        'email':emailvalue.value,
        'password':senhavalue.value
    }
    
   if(datalogin.email && datalogin.password){
    if(document.querySelector('.spanalert')){
        document.querySelector('.spanalert').style.display='none'
    }
       var conexao= new ethernet('/login','POST',testejson,datalogin)
       conexao.initConnection()
       
   }else{
    document.querySelector('#spanAlert').innerHTML="<br/><span class='spanalert'>fill all filds</span>"
   }

})

})();