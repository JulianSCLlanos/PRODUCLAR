document.addEventListener('DOMContentLoaded', event =>{


} );

const bCarrito =document.querySelector('.nav-link-carrito');

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
	fetch('http://localhost/xampp/htdocs/noxen/TiendaOnline/carrito/api-carrito.php?action=mostrar').then(response => response.json()).then(data => {

		console.log(data);
		let tablaCont = document.querySelector('#tabla');
		let precioTotal = '';
		let html = '';

		data.items.forEach(element => {
			html = 
				<div class = 'fila'>
					<div class ='imagen'>
						<img src='img/${element.imagen}' width='100' />
					</div>

					<div class ='info'>
					
					</div>

				</div>


			;

		});

		tablaCont.innerHTML = html;



	});
}
