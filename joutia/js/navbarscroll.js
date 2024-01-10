
const navbar=document.querySelector(".nav-one");
const logo=document.querySelector('.nav-logo');
const linksNav=document.querySelectorAll('.navbar-link')
const iconNav=document.querySelector('.cart-button')
const buttonheader=document.querySelectorAll('.buttonheader')
const clientname=document.querySelector(".client-name")

const jackets=document.querySelector(".jackets")





window.addEventListener("scroll",event=>{
    let scrolltop=document.documentElement.scrollTop;
    console.log(scrolltop)
})

console.log()
window.addEventListener("scroll",event=>{
    let scrolltop=document.documentElement.scrollTop;
    if(scrolltop>4814){
    buttonheader.forEach(e=>{e.classList.add("hide")})    
    navbar.classList.add('nav-one-d')
    logo.removeAttribute('src');
    logo.setAttribute('src',"assets/2.png");    
    iconNav.classList.add('hide');
  //clientname.classList.add('hide');
    linksNav.forEach(e => {
        e.classList.add('navbar-link-d');
    });
    }
    if(scrolltop<4814){
    buttonheader.forEach(e=>{e.classList.remove("hide")})   
    navbar.classList.remove('nav-one-d')
    logo.removeAttribute('src');
    logo.setAttribute('src',"assets/1.png");  
    iconNav.classList.remove('hide');
    //clientname.classList.remove('hide');
    linksNav.forEach(e => {
        e.classList.remove('navbar-link-d');
    }); 
}
})
