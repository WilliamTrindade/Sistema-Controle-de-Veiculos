//scripts
//quando o documento estiver pronto
//executa a funcao e chama a função mask 
//do jquery mask
$(document).ready(
	function(){
		$('#placa').mask("AAA-0000", {placeholder: "___-____"});
	}
);
