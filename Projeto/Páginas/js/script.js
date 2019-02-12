//Função responsável por abrir a página de confirmação de compra ao clicar no botão comprar
function abrir(){
    window.location.href = 'confirmacao_compra.html';
}

//Função que retorna para a página inicial
function inicio(){
    window.location.href = 'index.html';
}

//Criando variável global para receber um número aleatório, que será o número do pedido
var teste;
num_ped = Math.floor((Math.random()* 35563) + 1);

//Função responsável por imprimir o número aleatório na página HTML
function pedido(){
    document.getElementById("pedido").innerHTML = num_ped;
   
}



