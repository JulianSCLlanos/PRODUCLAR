

<nav class="navbar navbar-expand-lg navbar-light bg-light   ">

  
<a class="navbar-brand" href="#"><a href="../../index.html"><img src="../Images/Produu.jpg" height="120"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    <ul class="navbar-nav ml-auto">
      

      <li class="carrito">
        
        <button onclick="actualizarCarritoUI()" ><a class='btn-carrito' href="#"><img src="../Images2/carrito.jpg">Carrito</a>
        <div id="carrito-container">
          <div id="tabla">
            
          </div>

          <div>
            <?php
                $apiKey="4Vj8eK4rloUd272L48hsrarnUA";
                $merchantId="508029";
                $accountId="512321";
                $description="Compra";
                $referenceCode="01";
                $amount="200000";
                $tax="0";
                $taxReturnBase="0";
                $currency="COP";
                $signature="";
                $test="0";
                $buyerEmail="ariascristian085@gmail.com";
                $responseUrl="http://localhost/panel/noxen/TiendaOnline/Vistas/Catalogo.php";
                $confirmationUrl="http://localhost/panel/noxen/TiendaOnline/Vistas/Catalogo.php";
                //$firma=“$apiKey~$merchantId~$referenceCode~$amount~$currency”;
                $firmaMD5=md5($apiKey."~".$merchantId."~".$referenceCode."~".$amount."~".$currency);
              ?>



<form method="post" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
 <input name="ApiKey"    type="hidden"  value="<?php echo $apikey; ?>"   >
  <input name="merchantId"    type="hidden"  value="<?php echo $merchantId; ?>"   >
  <input name="accountId"     type="hidden"  value="<?php echo $accountId; ?>" >
  <input name="description"   type="hidden"  value="<?php echo $description; ?>"  >
  <input name="referenceCode" type="hidden"  value="<?php echo $referenceCode; ?>" >
  <input name="amount"        type="hidden"  value="<?php echo $amount; ?>"   >
  <input name="tax"           type="hidden"  value="<?php echo $tax; ?>"  >
  <input name="taxReturnBase" type="hidden"  value="<?php echo $taxReturnBase; ?>" >
  <input name="currency"      type="hidden"  value="<?php echo $currency; ?>" >
  <input name="signature"     type="hidden"  value="<?php echo $firmaMD5; ?>"  >
  <input name="test"          type="hidden"  value="<?php echo $test; ?>" >
  <input name="buyerEmail"    type="hidden"  value="<?php echo $buyerEmail; ?>" >
  <input name="responseUrl"    type="hidden"  value="<?php echo $responseUrl; ?>" >
  <input name="confirmationUrl"    type="hidden"  value="<?php echo $confirmationUrl; ?>" >


  <input name="Submit"        type="submit"  value="Enviar" >
</form>
          </div>

        </div>
        </button>
      </li>

    </ul>

</nav>


<script >

document.addEventListener('DOMContentLoaded', event =>{


} );

const bCarrito =document.querySelector('.btn-carrito');

bCarrito.addEventListener('click', event => {

  const carritoContainer = document.querySelector('#carrito-container');

  if (carritoContainer.style.display == '') {
    
    carritoContainer.style.display = 'block'; 
    actualizarCarritoUI();

  }else{
      carritoContainer.style.display = '';  
  }

} );


function actualizarCarritoUI(){
  fetch('http://localhost/TiendaOnline/carrito/api-carrito.php?action=mostrar').then(response => response.json()).then(data => {

    console.log(data);
    let tablaCont = document.querySelector('#tabla');
    let precioTotal = '';
    let html = '';
    var prueba ='';

    data.items.forEach(element => {
      html += `

        <div class='fila'>
          
          <div class='imagen'>
            <img src='../Images2/${element.imagen}' width='100' />
          </div>


          <div class='info'>
            <input type='hidden' value='${element.codpro}' />

            <div class='nombre'>${element.descripcion}</div>

            <div>${element.cantidad} items de $${element.precio} COP</div>

            <div>Subtotal: $${element.subtotal} COP</div>


            <div class='botones'><button class='btn-remove'>Quitar 1 del carrito</button></div>

          </div>

 

        </div>
       



      `;

    } );  

    precioTotal=`<p>Total: $${data.info.total} COP</p>`;
    tablaCont.innerHTML = precioTotal + html;

    
    document.cookie =`items=${data.info.count}`;


    bCarrito.innerHTML=`(${data.info.count}) Carrito`;

    document.querySelectorAll('.btn-remove').forEach(boton =>{
      boton.addEventListener('click', e =>{
        const codpro= boton.parentElement.parentElement.children[0].value;

        removeItemFromCarrito(codpro);


      });
    });

  });

}

const botones = document.querySelectorAll('.btn-add');

botones.forEach(boton =>{
  const codpro= boton.parentElement.parentElement.children[0].value;

  boton.addEventListener('click', e =>{
    addItemToCarrito(codpro);
  });
});


function removeItemFromCarrito(codpro){
    fetch('http://localhost/TiendaOnline/carrito/api-carrito.php?action=remove&codpro=' +codpro)
  .then(res => res.json())
  .then(data =>{
   console.log(data.status);
    actualizarCarritoUI();
  });

}

function addItemToCarrito(codpro){
   fetch('http://localhost/TiendaOnline/carrito/api-carrito.php?action=add&codpro=' +codpro)
  .then(res => res.json())
  .then(data =>{
   console.log(data.status);
    actualizarCarritoUI();
  });


}




</script>

