const popup=document.querySelector('.popup');
const popupButton=document.querySelector('.popup-button');

popupButton.addEventListener('click',(Event)=>{ 
    popup.classList.add('popupdisapear');
})