
$(document).ready(iniciarEventos);

function iniciarEventos()
{
	$(document).mousemove(moverMouse);
}

function moverMouse(event)
{
	$("#posx").text(event.clientX);
	$("#posy").text(event.clientY);
}

