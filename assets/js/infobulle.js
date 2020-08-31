function controle(){

	let el=document.getElementById('name')
	let el2=document.getElementById('imp2')
	let el3=document.getElementById('imp3')

	if(el.value!='nom prénom'){
		kodal.erreur(el,'erreur sur input 1 erreur sur input 1 erreur sur input 1');

	}

	if(el2.value!='coucou'){
		kodal.erreur(el2,'erreur sur input 2');

	}

	if(el3.value!='coucou'){
		kodal.erreur(el3,'erreur sur input 3');

	}

}