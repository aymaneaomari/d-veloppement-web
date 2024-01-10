const deconnexionButton=document.querySelector('.DeconnexionButton');
function Deconnexion(){
    deconnexionButton.innerHTML='<?php session_destroy();?>'
}