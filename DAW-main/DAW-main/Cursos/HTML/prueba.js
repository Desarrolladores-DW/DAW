// Simula la lógica de inicio de sesión
const usuarioHaIniciadoSesion = false; // Cambia a true si el usuario ha iniciado sesión

// Selecciona el elemento del candado y el contenido
const overlay = document.getElementById('overlay');
const content = document.querySelector('.content');

// Muestra u oculta el candado según el estado de inicio de sesión
if (!usuarioHaIniciadoSesion) {
    overlay.style.display = 'flex';
    content.style.display = 'none';
} else {
    overlay.style.display = 'none';
    content.style.display = 'block';
}
