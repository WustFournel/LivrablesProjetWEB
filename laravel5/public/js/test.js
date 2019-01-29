/*alert("bonjour bienvenue maggle");
var nb1= prompt("ta quel age frere?");

if (nb1>18){
	alert ("t majeur kaou");
}

else if (nb1<18){
	alert ("t un bb");
}*/
/* 
$(function(){
	var color = localStorage.getItem("color");
	if (color == "dark"){
		$("body").addClass('dark');
	}
	$ (".bouton #chgt color").click(function(event){
		$("body").removeClass('dark');
		localStorage.setItem("color","light");
	});
		}
 */
 var enable= false;
 

function myFunction(){
	if (!enable){
	document.getElementById("hamburgernav").style.display = "block";
	enable = true;}
	else{
	document.getElementById("hamburgernav").style.display = "none";
	enable = false
	}

};











































