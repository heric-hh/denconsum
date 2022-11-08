const formulariosAjax = document.querySelectorAll(".formularioAjax");

function enviarFormularioAjax(e) {
    e.preventDefault();

    let data = new FormData(this);
    let method = this.getAttribute("method");
    let action = this.getAttribute("action");
    let tipo = this.getAttribute("data-form");

    let encabezados = new Headers();
    let config = {
        method: method,
        headers: encabezados,
        mode: 'cors',
        cache: 'no-cache',
        body: data
    };

    let textoAlerta;

    if ( tipo === 'save' ) {
        textoAlerta ="Los datos quedaran guardados en el sistema.";
    } else if ( tipo === 'delete' ){
        textoAlerta = 'Los datos serán eliminados completamente del sistema.';
    } else if ( tipo === 'update' ) {
        textoAlerta = 'Los datos del sistema serán actualizados';
    } else if ( tipo === 'search' ) {
        textoAlerta = 'Se eliminará el término de búsqueda y tendrás que escribir uno nuevo.';
    } else if ( tipo === 'loans' ) {
        textoAlerta = '¿Desea remover los datos seleccionados?';
    } else {
        textoAlerta = '¿Quieres realizar la opción solicitada?';
    }

    Swal.fire({
        title: '¿Estás seguro?',
        text: textoAlerta,
        type: 'question',
        confirmButtonText: 'Aceptar',
        showCancelButton: true,
        confirmButtonColor: '#3085D6',
        cancelButtonColor: '#D33',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            fetch(action, config)
            .then(respuesta => respuesta.json())
            .then(respuesta => {
                return alertasAjax(respuesta);
            });
        }
    })

}

function alertasAjax(alerta) {
    if ( alerta.Alerta === 'simple' ) {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
          })
    } else if ( alerta.Alerta === 'recargar' ) {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
          }).then((result) => {
            if (result.isConfirmed) {
                location.reload();
            }
          })
    } else if ( alerta.Alerta === 'limpiar' ) {
        Swal.fire({
            title: alerta.Titulo,
            text: alerta.Texto,
            type: alerta.Tipo,
            confirmButtonText: 'Aceptar'
          }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector('.formularioAjax').reset();
            }
          })
    } else if ( alerta.Alerta === 'redireccionar' ) {
        window.location.href = alerta.URL;
    }
}

formulariosAjax.forEach( formularios => {
    formularios.addEventListener('submit', enviarFormularioAjax);
});

