/*
var helado = 'chocolate';

if (helado === 'chocolate'){
	console.log('si amo el helado de chocolate');
} else {
	console.log('pero mi favorito es el de chocolate');
}


function multiplica(num1,num2){
	var resultado = num1 * num2;
	console.log(resultado);
}

multiplica(4,7);


document.querySelector('html').onclick = function(){
	alert('deja de pincharme');
}

*/

/*
var miImage = document.querySelector('img');

miImage.onclick = function(){
	var miSrc = miImage.getAttribute('src');
	if (miSrc === 'images/logo 4.png'){
		miImage.setAttribute('src','images/firefox2.png.jpg');

	} else {
		miImage.setAttribute('src','images/logo 4.png');
	}
}

*/
/*
var miBoton = document.querySelector('button');
var miTitulo = document.querySelector('h1');

function estableceNombreUsuario(){
	var miNombre = prompt('porfavor, ingresa tu nombre');
	localStorage.setItem('nombre', miNombre);
	miTitulo.textContent = 'mozilla es fresco, ' + miNombre;
}

if (!localStorage.getItem('nombre')){
	estableceNombreUsuario();
}

else{
	var nombreAlmacenado = localStorage.getItem('nombre');
	miTitulo.textContent = 'mozilla es fresco,' +nombreAlmacenado;
}

miBoton.onclick = function(){
	estableceNombreUsuario();
}
*/

/*

function saludar(nombre){
	console.log("hola " + nombre);


}

saludar("jose");



if (true){
	var x = 5;
}

console.log(x)



var palabra = "77";

function convertir(){

	var cambio = parseInt(palabra);
	console.log(cambio);
}

convertir();



var Ventas = 'toyota';

function TiposCarro(nombre){

	if (nombre == "honda"){

		return nombre;

	} else{

		return "lo siento nosotros no vendemos " + nombre + ".";
	}
}

var carro = {

	miCarro:"saturn", getCarro: TiposCarro("honda"),especial: Ventas};


console.log(carro.miCarro);
console.log(carro.getCarro);
console.log(carro.especial);



*/






/*
var materia = "derecho";

switch (materia){

	case "mercadotecnia":
	console.log("Excelente materia");
	break;

	case "diseño":
	console.log("Mas o menos");
	break;

	case "matematicas":
	console.log("aburrido");
	break;

	default:
	console.log("no tenemos esa materia");
  }


*/


/*
function howMany(selectObject){
	var numberSelected = 0;
	for (var i = 0; i < selectObject.options.length; i++){
		if (selectObject.options[i].selected){
			numberSelected++;
		}
	}

	return numberSelected;
}

var btn = document.getElementById("btn");
btn.addEventListener("click", function(){
	alert('number of options selected: ' + howMany(document.selectForm.musicTypes))
});

var numero = prompt("Introduce un número entero");
 
var resultado = parImpar(numero);
alert("El número "+numero+" es "+resultado);
 
function parImpar(numero) {
  if(numero % 2 == 0) {
    return "par";
  }
  else {
    return "impar";
  }
}

*/


var cuadrado = function(x){
	return x * x;
}

console.log(cuadrado(12));

var hazRuido = function(){
	console.log('pling');
}


hazRuido();


var potencia = function(base,exponente){
	var resultado = 1;
	for (var cuenta = 0; cuenta < exponente; cuenta++)
		resultado *= base;
	return resultado;
}

console.log(potencia(2,10));


var casa = new Casa{
	var mama = gloria;
	var hijo1 = leo;
	var hijo2 = jose;
}