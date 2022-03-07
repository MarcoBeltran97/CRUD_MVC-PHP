function confirmacion(e) {
    if (confirm("¿Estas seguro que deseas eliminar este registro?")) {

        return true;
    }
    else {
        e.preventDefault();

    }
}

let d_delete = document.querySelectorAll(".btn_delete");
for (var i = 0; i < d_delete.length; i++) {
    d_delete[i].addEventListener('click', confirmacion);
}
