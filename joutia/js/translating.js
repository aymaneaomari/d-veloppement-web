const links=document.querySelectorAll("#translate");
links.forEach((e)=>{
    e.addEventListener('mouseover',Event=>{
        e.classList.add('translate-link');
    })
    e.addEventListener('mouseout',Event=>{
        
        e.classList.remove('translate-link')
    })
})