

/**
  * Função para criar um objeto XMLHTTPRequest
  * 
*/
function criaRequest() {
    try{
        request = new XMLHttpRequest();        
    }catch (IEAtual){
         
        try{
            request = new ActiveXObject("Msxml2.XMLHTTP");       
        }catch(IEAntigo){
            try{
                request = new ActiveXObject("Microsoft.XMLHTTP");          
            }catch(falha){
                request = false;
                }
            }
        }
        if (!request) {
           alert("Seu Navegador não suporta Ajax!");
        }else{
           return request;
        }
}       
/**
  * Função para capturar os dados diretamente interagindo com o usuário.
  * Exemplo de chamada para a função: xmlreq.open("GET", "Contato.php?txtnome=" + nome, true);
  * Você pode pegar esse dado no php usando $_POST['username'];
  */
function enviaEmail() {
    // Declaração de Variáveis
    var user = prompt ('Digite o Login');//document.getElementById("txtnome").value;
    var pass = prompt ('Digite a SENHA');
    var xmlreq = criaRequest();
    xmlreq.onreadystatechange = function(){
        // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
        if (xmlreq.readyState == 4) {
            // Verifica se o arquivo foi encontrado com sucesso
            if (xmlreq.status == 200) {
                alert(xmlreq.responseText);
            }else{
                alert("Erro..."+ xmlreq.statusText ); 
            };
        }
    };
    xmlreq.open('GET','e-mail.php?user='+user+'&pass='+pass, true);
   //xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlreq.send()
    //sendData("email.php","POST",user);//,"user="+user);
    //var result = document.getElementById("Resultado");
}

// $.ajax({
//     type: "POST",
//     //method: "POST",
//     url: "e-mail.php",
//     data: { 
//         user: 'correiodolulu'
//         //pass: pass
//     }
// })
//  .done(function(msg) {
//      alert(msg);
// });
    
/**
  * Função para enviar os dados de capturando do documento em que se está inserida.
  * A variável dados já deve ser um objeto setado.
  * Exemplo de chamada para a função sendData('seuendereco/seuscript.php', 'POST','username='+username1);
  * Você pode pegar esse dado no php usando $_POST['username'];
  */
function sendData(url, metodo, dados){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            alert("Enviado!");
            location.href = location.href;
        }else{
            alert("Erro na função sendData AJAX!");
        }
    };
    xhttp.open(metodo, url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(dados);
}
/**
  * Função para enviar os dados de capturando do documento em que se está inserida.
  * A variável dados já deve ser um objeto setado.
  * Exemplo de chamada para a função sendData('seuendereco/seuscript.php', 'POST','username='+username1);
  * Você pode pegar esse dado no php usando $_POST['username'];
  */

// $(document).ready(function(){
// 	$("#adicionar").click(function(){
// 		var idproduto = $('input[name="idprod"]').val();
// 	 	var qtde = $('input[name="qtd"]').val();
// 		var inputQtd = $('input[name="qtd"]');

// 		$.ajax({
// 			url: 'Classes/Validar_Carrinho.php',
//             type: 'POST',
//             data: 'produto='+idproduto+'&quantidade='+qtde+'&acao=add',
//             success: function(data){}




// 		});
	

// 	});

// });

