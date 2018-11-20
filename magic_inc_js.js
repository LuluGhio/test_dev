/*Lucile Ghio
test algo JS pour Digital Virgo */

function magic_inc(i, direction){

	var isNeg = false;
	if(i < 0){
		i = Math.abs(i);
		isNeg = true;
	}

	if(direction === "inc"){

		//1. ici var i doit être un décimal à 1 dixième
		if(i>=0.5 && i<=0.9){
			if(isNeg){
				return -i;
			}
			else{ return i +0.1; }
		}


		//2. ici var i doit être un nb entier
		if(i>=1 && i<=9){
			// if((typeof i) == "float"){
				i = Math.floor(i);
				i = i + 1;
				if(isNeg){
					return -i;
				}
				else{ return i;}
			// }
		}

		// 3. ici i doit être une dizaine (20-30...)
		if(i>=20 && i<=100){
			i = (Math.floor(i /10)+1) *10;
			if(isNeg){
				return -i +10;
			}
			else{return i;}
		}

		// 4. ici i doit être une centaine (100-200...)
		if(i>=100 && i<=400){
			if((typeof i) === "float"){
				i=Math.floor(i);
			}
			else if(String.prototype.substring(i, -1) <5){
				i = Math.ceil(i /100) *100;
			}
			else{
				i = Math.ceil(i /100) *100;
			}
			i = i +100;
			if(isNeg){
				return -i +100;
			}
			else{return i;}
		}
		// si aucune des conditions n'est remplie: affiche 0
		return 0;
	}

	if(direction === "dec"){

		//1. ici var i doit être un décimal à 1 dixième
		if(i>=0.5 && i<=0.9){
			if(isNeg){
				return -i;
			}
			else{ return i -0.1; }
			console.log(i);
		}


		//2. ici var i doit être un nb entier
		if(i>=1 && i<=9){
			// if((typeof i) == "float"){
				i = Math.floor(i);
				i = i - 1;
				if(isNeg){
					return -i --;
				}
				else{ return i;}
			// }
		}

		// 3. ici i doit être une dizaine (20-30...)
		if(i>=20 && i<=100){
			if((typeof i) === "float"){
				i=Math.floor(i);
			}
			else if(String.prototype.substring(i, -1) <5){
				i = Math.ceil(i /10) *10;
			}
			else{
				i = Math.ceil(i /10) *10;
			}
			i = i - 10;
			if(isNeg){
				return -i - 10;
			}
			else{return i;}
		}

		// 4. ici i doit être une centaine (100-200...)
		if(i>=100 && i<=400){
			if((typeof i) === "float"){
				i=Math.floor(i);
			}
			else if(String.prototype.substring(i, -1) <5){
				i = Math.ceil(i /100) *100;
			}
			else{
				i = Math.ceil(i /100) *100;
			}
			i = i - 100;
			if(isNeg){
				return -i - 100;
			}
			else{return i;}
		}
		// si aucune des conditions n'est remplie: affiche 0
		return 0;
	}
}

var inc1 = magic_inc(0.6, "inc");
console.log(inc1);
var inc2 = magic_inc(7.5, "inc");
console.log(inc2);
var inc3 = magic_inc(26, "inc");
console.log(inc3);
var inc4 = magic_inc(120, "inc");
console.log(inc4);

var dec1 = magic_inc(0.6, "dec");
console.log(dec1);
var dec2 = magic_inc(7.5, "dec");
console.log(dec2);
var dec3 = magic_inc(26, "dec");
console.log(dec3);
var dec4 = magic_inc(120, "dec");
console.log(dec4);

