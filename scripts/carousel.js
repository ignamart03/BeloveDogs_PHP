var indiceImagen = 0;

function cambiarImagen() {
  var imagenes = document.querySelectorAll('.carrusel img');
  imagenes[indiceImagen].classList.remove('imagen-activa');

  indiceImagen += 1;
  if (indiceImagen >= imagenes.length) {
    indiceImagen = 0;
  }

  imagenes[indiceImagen].classList.add('imagen-activa');
}

setInterval(cambiarImagen, 3000); // Cambia la imagen cada 3 segundos
