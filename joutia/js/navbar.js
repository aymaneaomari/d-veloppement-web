const navLink=document.querySelectorAll('.nav-one-menu li a');
navLink.forEach((e)=>{
    e.addEventListener('mouseover',Event=>{
    e.classList.add('navbar-link-mouseover');
    e.addEventListener('mouseout',Event=>{
    e.classList.remove('navbar-link-mouseover');
    })
})});

