// Clase para crear ventana emergente personalizada
function CustomAlert() {
    this.show = function(message, redirectUrl) {
        // Crear el fondo oscuro
        var modalBackground = document.createElement('div');
        modalBackground.style.position = 'fixed';
        modalBackground.style.top = '0';
        modalBackground.style.left = '0';
        modalBackground.style.width = '100%';
        modalBackground.style.height = '100%';
        modalBackground.style.backgroundColor = 'rgba(0,0,0,0.5)';
        modalBackground.style.zIndex = '999';
        
        // Crear la ventana emergente
        var modal = document.createElement('div');
        modal.style.position = 'fixed';
        modal.style.top = '50%';
        modal.style.left = '50%';
        modal.style.transform = 'translate(-50%, -50%)';
        modal.style.backgroundColor = 'white';
        modal.style.padding = '20px';
        modal.style.borderRadius = '10px';
        modal.style.boxShadow = '0 4px 8px rgba(0,0,0,0.2)';
        modal.style.textAlign = 'center';
        modal.style.zIndex = '1000';
        modal.style.width = '300px';
        
        // Contenido del pop-up
        modal.innerHTML = `
            <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" width="50" style="margin-bottom: 10px;">
            <h3>¡Registro exitoso!</h3>
            <p>${message}</p>
            <a href="${redirectUrl}">
                <button style="background-color: #3498db; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Agregar nuevo registro
                </button>
            </a>
        `;
        
        document.body.appendChild(modalBackground);
        document.body.appendChild(modal);
        
        // Cerrar al hacer clic en el fondo
        modalBackground.onclick = function() {
            document.body.removeChild(modalBackground);
            document.body.removeChild(modal);
        };
    };
}

// Crear una instancia global
var Alert = new CustomAlert();