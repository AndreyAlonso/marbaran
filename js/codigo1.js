function iniciaSesion() {
    $("#iniciaSesion").modal();
}

function registrarse() {
    $("#registrarse").modal();
}

$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
});

function eliminaPerfil()
{
	if(confirm("Esta por eliminar el perfil. Desea Continuar?"))
	{
		location.href='../marbaran/bd/eliminaPerfil.php';

	}
}