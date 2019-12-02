function excluir(id){

	var confirma = window.confirm("Deseja realmente exluir?");
	if(confirma) {

		window.location = ("estoque.php?delete="+id);
	}


}