$(document).ready(function(){
	$("#form").submit(function(e){
		e.preventDefault();

		$.ajax({
			type: "POST",
			url: "action.php",
			data:
			{
				cpf: $('#cpf').val(),
    			nome: $('#nome').val(),
   				idade: $('#idade').val(),

    			cidade: $('#cidade').val(),
   				estado: $('#estado').val(),

    			rua: $('#rua').val(),
    			numero: $('numero').val(),
    			bairro: $('bairro').val(),
    			cep: $('cep').val(),

    			telefone: $('telefone').val()
			}
		});

	});

	/*var itens = "";
    //Capturar Dados Usando Método AJAX do jQuery
    $.ajax({
	    url: "listar.php",
	    cache: false,
	    dataType: "json",
	    beforeSend: function() {
		    $("h2").html("Carregando..."); //Carregando
	    },
	    error: function() {
		    $("h2").html("Há algum problema com a fonte de dados");
	    },
	    success: function(retorno) {
		    if(retorno[0].erro){
			    $("h2").html(retorno[0].erro);
		    }
		    else{
			    //Laço para criar linhas da tabela
			    for(var i = 0; i<retorno.length; i++){
				    itens += "<tr>";
				    itens += "<td>" + retorno[i].cpf + "</td>";
				    itens += "<td>" + retorno[i].nome + "</td>";
				    itens += "<td>" + retorno[i].idade + "</td>";
				    itens += "</tr>";
			    }
			    //Preencher a Tabela
			    $("#minhaTabela tbody").html(itens);
			    
			    //Limpar Status de Carregando
			    $("h2").html("Carregado");
		    }
	    }
    });*/
});