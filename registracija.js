function Saberi()
{
    	var broj1 = parseInt(document.getElementById("Br1").value);
    	var broj2 = parseInt(document.getElementById("Br2").value);
	var broj3 = parseInt(document.getElementById("Br3").value);
	var broj4 = parseInt(document.getElementById("Br4").value);
    var rezultat = broj1*10 + broj2/10 + broj3*2 + broj4/2;
    document.getElementById("Rez").value = rezultat;
}