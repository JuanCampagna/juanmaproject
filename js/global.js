function loadPokemon(){
	$.ajax({
		url: 'https://pokeapi.co/api/v2/pokemon?offset=0&limit=900',
		success: function(result){
			console.log(result)
		},
		error: function(xhr,status,error){
			console.log(error)
		}
	});
}

def tuvieja:
	return 'HOLUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUU'