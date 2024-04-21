
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click',()=> {

    wrapper.classList.add('active');
});

loginLink.addEventListener('click',()=> {

    wrapper.classList.remove('active');
});



let eyeicon=document.getElementById("LOCKHIDDEN");
let pass=document.getElementById("PASSWORD");
let pf=document.getElementById("profilepic");
var mailfield=document.getElementById("emailfield");


let eyeicon2=document.getElementById("LOCKHIDDEn");
let pass2=document.getElementById("PASSWORd");
let pf2=document.getElementById("profilepiC");
var mailfield2=document.getElementById("emailfielD");




eyeicon.onclick =function(){
    if(pass.type == "password"){
        pass.type="text";
        eyeicon.innerHTML='<ion-icon name="lock-open"></ion-icon>';
        pf.src="image/passshow.jpg";
    }else{
        pass.type="password";
        eyeicon.innerHTML='<ion-icon name="lock-closed"></ion-icon>';
        pf.src="image/passhide.jpg";
    }
}


eyeicon2.onclick =function(){
    if(pass2.type == "password"){
        pass2.type="text";
        eyeicon2.innerHTML='<ion-icon name="lock-open"></ion-icon>';
        pf2.src="image/passshow.jpg";
    }else{
        pass2.type="password";
        eyeicon2.innerHTML='<ion-icon name="lock-closed"></ion-icon>';
        pf2.src="image/passhide.jpg";
    }
}



function passfunc(){
    if(pass.type == "password"){
        pass.type="password";
        eyeicon.innerHTML='<ion-icon name="lock-closed"></ion-icon>';
        pf.src="image/passhide.jpg";
    }else{
        pass.type="text";
        eyeicon.innerHTML='<ion-icon name="lock-open"></ion-icon>';
        pf.src="image/passshow.jpg";
    }
}
passfunc();
pass.addEventListener('input',passfunc);




function pass2func(){
    if(pass2.type == "password"){
        pass2.type="password";
        eyeicon2.innerHTML='<ion-icon name="lock-closed"></ion-icon>';
        pf2.src="image/passhide.jpg";
    }else{
        pass2.type="text";
        eyeicon2.innerHTML='<ion-icon name="lock-open"></ion-icon>';
        pf2.src="image/passshow.jpg";
    }
}
pass2func();
pass2.addEventListener('input',pass2func);




pass.onclick =function(){
    if(pass.type=="password"){
        pf.src="image/passhide.jpg";
    }
    else{
        pf.src="image/passshow.jpg";
    }
}


pass2.onclick =function(){
    if(pass2.type=="password"){
        pf2.src="image/passhide.jpg";
    }
    else{
        pf2.src="image/passshow.jpg";
    }
}



function checkmaillength(){
    var lngth=mailfield.value;
    var lngthh=lngth.length;
    if(lngthh<=3){
        pf.src="image/panda1.jpg";
    }
    else if(lngthh<=10){
        pf.src="image/panda2.jpg";
    }
    else if(lngthh<=15){
        pf.src="image/panda3.jpg";
    }
    else if(lngthh<=20){
        pf.src="image/panda4.jpg";
    }
    else if(lngthh<=25){
        pf.src="image/panda5.jpg";
    }
    
    else{
        pf.src="image/panda6.jpg";
    }
}

checkmaillength();
mailfield.addEventListener('input',checkmaillength);


function checkmaillength2(){
    var lngth=mailfield2.value;
    var lngthh=lngth.length;
    if(lngthh<=3){
        pf2.src="image/panda1.jpg";
    }
    else if(lngthh<=10){
        pf2.src="image/panda2.jpg";
    }
    else if(lngthh<=15){
        pf2.src="image/panda3.jpg";
    }
    else if(lngthh<=20){
        pf2.src="image/panda4.jpg";
    }
    else if(lngthh<=25){
        pf2.src="image/panda5.jpg";
    }
    
    else{
        pf2.src="image/panda6.jpg";
    }
}

checkmaillength2();
mailfield2.addEventListener('input',checkmaillength2);






mailfield.onclick=function(){

    var lngth=mailfield.value;
    var lngthh=lngth.length;
    if(lngthh<=3){
        pf.src="image/panda1.jpg";
    }
    else if(lngthh<=10){
        pf.src="image/panda2.jpg";
    }
    else if(lngthh<=15){
        pf.src="image/panda3.jpg";
    }
    else if(lngthh<=20){
        pf.src="image/panda4.jpg";
    }
    else if(lngthh<=25){
        pf.src="image/panda5.jpg";
    }
    
    else{
        pf.src="image/panda6.jpg";
    }

}




mailfield2.onclick=function(){

    var lngth=mailfield2.value;
    var lngthh=lngth.length;
    if(lngthh<=3){
        pf2.src="image/panda1.jpg";
    }
    else if(lngthh<=10){
        pf2.src="image/panda2.jpg";
    }
    else if(lngthh<=15){
        pf2.src="image/panda3.jpg";
    }
    else if(lngthh<=20){
        pf2.src="image/panda4.jpg";
    }
    else if(lngthh<=25){
        pf2.src="image/panda5.jpg";
    }
    
    else{
        pf2.src="image/panda6.jpg";
    }

}
