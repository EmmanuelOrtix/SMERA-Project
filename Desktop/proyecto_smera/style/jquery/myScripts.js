function cargarDatos(){

	var jq			= $(document);
	var datos 		= jq.find('.datos');
	var datos2		= jq.find('.datos2');
	var datos3		= jq.find('.datos3');
	var datos4		= jq.find('.datos4');
	var datos5		= jq.find('.datos5');
	var datos6		= jq.find('.datos6');
	var datos7		= jq.find('.datos7');
	var datos8		= jq.find('.datos8');
	var datos9		= jq.find('.datos9');
	var datos10		= jq.find('.datos10');
	var datos11		= jq.find('.datos11');
	var datos12		= jq.find('.datos12');
	var datos13		= jq.find('.datos13');
	var datos14		= jq.find('.datos14');
	var datos15		= jq.find('.datos15');
	var datos16		= jq.find('.datos16');
	
	var x = document.getElementById("1");
	var y = document.getElementById("2");
	var z = document.getElementById("3");
	var a = document.getElementById("4");
	var b = document.getElementById("5");
	var c = document.getElementById("6");
	var d = document.getElementById("7");
    var e = document.getElementById("8");
    var f = document.getElementById("9");
    var g = document.getElementById("10");
    var h = document.getElementById("11");
    var i = document.getElementById("12");
    var j = document.getElementById("13");
    var k = document.getElementById("14");
    var l = document.getElementById("15");
    var m = document.getElementById("16");
    var n = document.getElementById("17");
    var o = document.getElementById("18");
    var p = document.getElementById("19");
    var q = document.getElementById("20");
    var r = document.getElementById("21");
    var s = document.getElementById("22");

	
	console.log(datos.val() +"\n"+ datos2.val() +"\n"+ datos3.val() +"\n"+ datos6.val());

	//------amarillo y azul---------------------------
	if(datos2.val() == "libre"){

		y.style.backgroundColor = "#00c0ef";

	}else if(datos2.val() == "ocupado"){

		y.style.backgroundColor = "#f39c12";
		
	}
	if(datos7.val() == "libre"){

		d.style.backgroundColor = "#00c0ef";

	}else if(datos7.val() == "ocupado"){

		d.style.backgroundColor = "#f39c12";
	}
	if(datos12.val() == "ocupado"){
		i.style.backgroundColor = "#f39c12";
		j.style.backgroundColor = "#f39c12";
	}
	//------amarillo y azul---------------------------

	//------rojo y verde---------------------------

	if(datos.val() == "libre"){
		
		x.style.backgroundColor = "#5cb85c";
	
	}else if(datos.val() == "ocupado"){
		
		x.style.backgroundColor = "#d9534f";
				
	}
	if(datos3.val() == "libre"){

		z.style.backgroundColor = "#5cb85c";

	}else if(datos3.val() == "ocupado"){

		z.style.backgroundColor = "#d9534f";
	} 
	if(datos6.val() == "libre"){

		c.style.backgroundColor ="#5cb85c";

	}else if(datos6.val() == "ocupado"){

		c.style.backgroundColor = "#d9534f";
	}
	if(datos5.val() == "libre"){

		b.style.backgroundColor ="#5cb85c";

	}else if(datos5.val() == "ocupado"){

		b.style.backgroundColor = "#d9534f";
	}
	if(datos4.val() == "libre"){

		a.style.backgroundColor ="#5cb85c";

	}else if(datos4.val() == "ocupado"){

		a.style.backgroundColor = "#d9534f";
	}
	if(datos8.val() == "libre" && datos9.val() == "libre" && datos10.val() == "libre" && datos11.val() == "libre"){

		e.style.backgroundColor ="#5cb85c";
		f.style.backgroundColor ="#5cb85c";
		h.style.backgroundColor ="#5cb85c";
		g.style.backgroundColor ="#5cb85c";

	}else if(datos8.val() == "ocupado"){

		e.style.backgroundColor = "#d9534f";
	}

	if(datos16.val() == "ocupado"){
		k.style.backgroundColor = "#d9534f";
		l.style.backgroundColor = "#d9534f";
		m.style.backgroundColor = "#d9534f";
		n.style.backgroundColor = "#d9534f";
		o.style.backgroundColor = "#d9534f";
		p.style.backgroundColor = "#d9534f";
		q.style.backgroundColor = "#d9534f";
		r.style.backgroundColor = "#d9534f";
		s.style.backgroundColor = "#d9534f";
	}
	//------rojo y verde---------------------------
	
}

function recargar(){
	cargarDatos();
	//setTimeout('document.location=document.location',5000)
	//setInterval('cargar_espacios()',5000);
	//setInterval('cargarDatos()',5000);
	setInterval('cargar_contenido()',2000);
}

function cargar_espacios(){
	cargarDatos();
	
	loadContent('controlador.php?c=home&a=espacios','contenedor_1','jlkjlj');
}

function cargar_contenido()
{

	//capturamos el contenido del input correspondiente a su id
	var contenido = document.getElementById('txt_cargar').value;
	//evaluamos si el input tiene algo escrito
	if(contenido=="cargar")
	{
		loadContent('controlador.php?c=Home&a=contenido','contenido','operacion=mostrar&texto='+contenido);
		
	}else
	{
	//	alert ("ingresa algo");
	}
}

function loadContent(url, destino, qs)         
{
	//el spiner es el gif que mostramos mientras carga y que tenemos guardado en la carpeta img
	//todo esto es configurable y es una etiqueta html
	//puedes agregar div,tr,th,etc. cualquier etiqueta para maquetar la imagen y poder centrarla como gustes<img src='style/img/loader.gif' alt='Cargando'/>
	var spinner = "";
	var destino = jQuery('#'+destino);
			
	destino.html(spinner);
			
	jQuery.ajax({
		type:"get",
		url:url,
		dataType:'html',
		data: qs,
		cache:false,
		timeout:30000,
		error:function(xhr, ts, et)
		{
			alert("Error al cargar la pagina");
			destino.html('');
		},
		success:function(data, ts){
			window.setTimeout(function(){
				destino.html('');
				destino.html(data);
				//en la siguiente linea corresponde al tiempo que aparecera el gif 
				//donde 1 segundo equibale a 1000
				//actualmente es 0,5segundos = 500
				},0);
		}
		});
}