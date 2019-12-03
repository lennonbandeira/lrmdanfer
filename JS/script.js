function excluir(id){

	var confirma = window.confirm("Deseja realmente excluir?");
	if(confirma) {

		window.location = ("estoque.php?delete="+id);
	}


}