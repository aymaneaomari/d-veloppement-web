//declaring a class for storing values of chosed product
class product{
    constructor(nom,price,path){
        this.nom=nom;
        this.price=price;
        this.path=path
    }
}

//for initializing the value of the cart with the las tvalue every time we load the page
let i=window.sessionStorage.i; 
if( isNaN(i))
    i=0;
//for initializing the array of chosedproduct with the las tvalue every time we load the page
let chosedproduct=[];
if(sessionStorage.getItem("chosedproduct")!==null)
    chosedproduct=JSON.parse(sessionStorage.getItem("chosedproduct"));


const cartQuantity=document.querySelector(".cart-quantity");
cartQuantity.innerHTML=`${i}`;
const productContainer=document.querySelectorAll(".card-product");

//for the products exsits in the main page
productContainer.forEach(e=>{ 
    let button=e.querySelector(".addToCard");
    button.addEventListener("click", Event=>{
        const nomOfProduct=e.querySelector(".nameOfProduct").innerHTML;
        const price=e.querySelector(".Price").innerHTML;
        const imageOfproduct=e.querySelector('.card-img');
        const pathOfProduct=imageOfproduct.getAttribute("src");
        //incrementing the quantity of chosed prodcut
        i++;
        cartQuantity.innerHTML=`${i}`;
        chosedproduct.push(new product(nomOfProduct,price,pathOfProduct));
        window.sessionStorage.setItem("chosedproduct",JSON.stringify(chosedproduct))
        window.sessionStorage.setItem("i",i);
    })
})    

//for the products exsits in the product page
const productContainer2=document.querySelectorAll(".p-proudct-Container");
productContainer2.forEach(e=>{ 
    let button=e.querySelector(".p-addToCard");
    button.addEventListener("click", Event=>{
        console.log(i);
        const nomOfProduct=e.querySelector(".p-nameOfProduct").innerHTML;
        const price=e.querySelector(".p-Price").innerHTML;
        const imageOfproduct=e.querySelector('.p-Product-Image');
        const pathOfProduct=imageOfproduct.getAttribute("src");
        i++;
        cartQuantity.innerHTML=`${i}`;
        chosedproduct.push(new product(nomOfProduct,price,pathOfProduct))
        window.sessionStorage.setItem("chosedproduct",JSON.stringify(chosedproduct))
        window.sessionStorage.setItem("i",i);
    })
})
//initilizing the total price that gonna be calculed in the panier page
let totalprice=0;

const panier=document.querySelector(".panier-chosed-products");
const productInPanier= JSON.parse(window.sessionStorage.getItem("chosedproduct"));
console.log(JSON.parse(window.sessionStorage.getItem("chosedproduct")));
//fill the panier page with the product chosed  
productInPanier.forEach(e => {
    totalprice=totalprice+parseFloat(e.price);
    panier.innerHTML=panier.innerHTML
    +`<div class="chosed-product">
    <img src="${e.path}" alt="" class="chosed-product-Image" >
    <div class="chosed-product-informations">
        <h2 class="chosed-product-Price">${e.price}  MAD</h2>
        <p class="chosed-product-name">${e.nom}</p>
        <div class="chosed-product-qte">
            <p class="chosed-product-qte-number">1</p>
            <button class="add-qte-button">+</button>
            <button class="remove-qte-button">-</button>   
        </div>
    </div>
    <button class="remove-product-panier">X</button>
    </div> `;
    
});
console.log(productInPanier);
console.log(productInPanier);
const productsPanier=document.querySelectorAll(".chosed-product");
productsPanier.forEach(Element=> {
    const remove=Element.querySelector(".remove-product-panier");
    const name=Element.querySelector(".chosed-product-name").innerHTML;
        remove.addEventListener("click",e=>{
            console.log(e);
       // productInPanier.splice(productInPanier.findIndex(item => item.nom === name), 1);
       // console.log(productContainer)
      //  window.sessionStorage.setItem("chosedproduct",JSON.stringify(productInPanier));
    })
    })
//and finnaly put the total to pay 

panier.innerHTML=panier.innerHTML+`<p class="Total-to-pay">Total<span>${parseFloat(totalprice).toFixed(2)}</span> MAD</p>`;
const sousTotal=document.querySelector(".payment-sousTotal-price");
console.log(sousTotal.innerHTML);
sousTotal.innerHTML=`${parseFloat(totalprice).toFixed(2)}  MAD`
productsPanier.forEach(Element=> {
    let qte=1;
    const quantity=Element.querySelector(".chosed-product-qte-number");
    const addButton=Element.querySelector(".add-qte-button");
    const removeButton=Element.querySelector(".remove-qte-button");
  //  const name=Element.querySelector(".chosed-product-name").innerHTML;
     const price=parseFloat(Element.querySelector(".chosed-product-Price").innerHTML);
    addButton.addEventListener("click",event=>{
        console.log(qte+1);
        qte=qte+1;
        quantity.innerHTML=`${qte}`;
        //totalprice=price+totalprice 
    })
    removeButton.addEventListener("click",event=>{
        qte=qte-1;
        if(qte<0)
        qte=0;
        quantity.innerHTML=`${qte}`; 
    });

    })

