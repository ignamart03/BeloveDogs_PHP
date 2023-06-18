// Esperamos a que el DOM se cargue completamente
document.addEventListener("DOMContentLoaded", function() {
    // Obtenemos todas las cajas
    const boxes = document.getElementsByClassName("box");
  
    // Recorremos las cajas y les añadimos un event listener para el clic
    for (let i = 0; i < boxes.length; i++) {
      boxes[i].addEventListener("click", function(event) {
        // Detenemos la propagación del evento clic para evitar que se active en elementos internos
        event.stopPropagation();
  
        // Obtenemos el elemento "additional-info" correspondiente a la caja clicada
        const additionalInfo = this.getElementsByClassName("additional-info")[0];
  
        // Verificamos si el elemento "additional-info" está oculto o visible
        if (additionalInfo.style.display === "none") {
          // Si está oculto, lo mostramos con una animación deslizante hacia abajo
          additionalInfo.style.display = "block";
          additionalInfo.style.height = additionalInfo.scrollHeight + "px";
        } else {
          // Si está visible, lo ocultamos con una animación deslizante hacia arriba
          additionalInfo.style.height = "0";
          additionalInfo.addEventListener("transitionend", function() {
            additionalInfo.style.display = "none";
          }, { once: true });
        }
      });
    }
  
    // Añadimos un event listener al documento para ocultar el "additional-info" al hacer clic fuera de él
    document.addEventListener("click", function() {
      const additionalInfos = document.getElementsByClassName("additional-info");
      for (let i = 0; i < additionalInfos.length; i++) {
        additionalInfos[i].style.height = "0";
        additionalInfos[i].addEventListener("transitionend", function() {
          additionalInfos[i].style.display = "none";
        }, { once: true });
      }
    });
  });
  