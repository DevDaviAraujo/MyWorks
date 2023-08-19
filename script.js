

// Programa de gerenciamento de estoque em linguagem JavasScript, entregue as 14/02/2023 //

/* Descrição resumida: 

Desenvolver um sistema para que uma empresa revendedora de eletrodomésticos de refrigeração cadastre e gerencie os produtos disponíveis para venda. 
 
Benefícios esperados: 
Com esse projeto, busca-se otimizar o controle das marcas e produtos revendidos pela empresa, facilitando assim o controle de revendas e de estoque. 
 
Detalhamento: 
Uma empresa de revenda de eletrodomésticos de refrigeração, especializada em geladeiras e freezers, está tendo dificuldades para gerenciar os produtos que estão ativos/inativos para venda, o que gera situações desconfortáveis, como oferta de produtos não mais disponíveis. Para sanar essa dificuldade, a empresa deseja que seja produzido um software web que permita o cadastro das marcas e produtos disponíveis para venda, que possa ser consultado por seus vendedores no momento de um pedido. Relatórios são bem vindos, bem como segurança de acesso através da autenticação dos funcionários. 
 
Escola: 
(SC) Faculdade de Tecnologia SENAI Joinville 
Restrições (O que a solução não pode ter): 
Não poderá utilizar recursos de alto custo na aplicação e infraestrutura. 
 
Estado: 
SC 

Baseando-se na descrição acima, implemente o módulo de estoque e venda da situação.
Poste o código .js */




let numeroProduto = [], tipoProduto = [], nomeProduto = [], precoProduto = [], marcaProduto = [], fornecedorProduto = [], quantidadeProduto = [];
let inicio, errata = "Valor inválido!", repita, deletar, auxdeletar, aux2deletar, aux3deletar = 0, auxinformacao, aux2informacao, auxvendas, aux2vendas = 0, vendaQuantidade, precoVenda, dataVenda, pagamentoVenda, totalQuantidadeProdutos, totalPrecoProdutos, mediaProdutos, controle;

function estoque() {
    do {
        inicio = prompt("Deseja armazenar um produto? Digite (sim) ou (não): ")
        if (inicio != "sim" && inicio != "não") {
            alert(errata)
        }
    } while (inicio != "sim" && inicio != "não")
    for (let i=0;i<1000;i++) {
        if (inicio == "sim") {
            numeroProduto[i] = prompt("Digite o número do pedido: ")
            tipoProduto[i] = prompt("Digite o tipo do produto: ")
            nomeProduto[i] = prompt("Digite o nome do produto: ")
            quantidadeProduto[i] = Number(prompt("Digite a quantidade do produto: "))
            precoProduto[i] = Number(prompt("Digite o preço por unidade do produto: "))
            marcaProduto[i] = prompt("Digite a marca do produto: ")
            fornecedorProduto[i] = prompt("Digite o fornecedor do produto: ")
        } else {
            break;
        }
        do {
            repita = prompt("Deseja armazenar outro produto? digite (sim) ou (não): ")
            if (repita != 'sim' && repita != 'não') {
                alert(errata)
            }
        } while (repita != 'sim' && repita != 'não')
        if (repita == 'não') {
            break;
        }
    }
}

function deletarProdutos() {
    do {
        inicio = prompt("Deseja deletar valores de produtos? (sim) ou (não): ")
        if (inicio != "sim" && inicio != "não") {
            alert(errata)
        }
    } while (inicio != "sim" && inicio != "não")
    for (let i=0;i<1000;i++) {
        switch (inicio) {
            case "sim":
                do {
                    deletar = prompt("Deletar todos os valores de um produto (1)\nDeletar valores seletos (2)\nDigite:")
                    if (deletar != '1' && deletar != '2') {
                        alert(errata)
                    }
                } while (deletar != '1' && deletar != '2')
                switch (deletar) {
                    case '1':
                       auxdeletar = prompt("Digite o numero do produto:")
                        for (let i=0;i<1000;i++) {
                            if (auxdeletar == numeroProduto[i]){
                                delete numeroProduto[i];
                                delete nomeProduto[i];
                                delete tipoProduto[i];
                                delete marcaProduto[i];
                                delete fornecedorProduto[i];
                                delete precoProduto[i];
                                delete quantidadeProduto[i];
                                aux3deletar++ 
                            }
                        }
                        if (aux3deletar > 0) {
                            alert("Valores deletados!")
                        } else {
                            alert("Não encontrado!")
                        }
                        break;
                    case "2":
                        do {
                            auxdeletar = prompt("Deletar numeração do produto (1).\nDeletar nome do produto (2).\nDeletar o tipo de produto (3).\nDeletar a marca do produto (4).\nDeletar o fornecedor do produto (5).\nDeletar o preco do produto (6).\nDeletar a quantidade do produto (7).\nDigite: ")
                            if (auxdeletar != "1" && auxdeletar != "2" && auxdeletar != "3" && auxdeletar != "4" && auxdeletar != "5" && auxdeletar != "6" && auxdeletar != "7") {
                              alert(errata)
                            }
                        } while (auxdeletar != "1" && auxdeletar != "2" && auxdeletar != "3" && auxdeletar != "4" && auxdeletar != "5" && auxdeletar != "6" && auxdeletar != "7")
                        switch (auxdeletar) {
                          case "1":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete numeroProduto[i];
                                  aux3deletar++ 
                                  numeroProduto[i] = prompt("Digite a numeração do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "2":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete nomeProduto[i];
                                  aux3deletar++
                                  nomeProduto[i] = prompt("Digite o nome do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "3":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete tipoProduto[i];
                                  aux3deletar++
                                  tipoProduto[i] = prompt("Digite o tipo do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "4":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete marcaProduto[i];
                                  aux3deletar++
                                  marcaProduto[i] = prompt("Digite a marca do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "5":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete fornecedorProduto[i];
                                  aux3deletar++
                                  fornecedorProduto[i] = prompt("Digite o fornecedor do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "6":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete precoProduto[i];
                                  aux3deletar++
                                  precoProduto[i] = prompt("Digite o preço do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          case "7":
                            aux2deletar = prompt("Digite a numeração do produto para o valor ser deletado: ")
                            for (let i=0;i<1000;i++) {
                              if (aux2deletar == numeroProduto[i]){
                                  delete quantidadeProduto[i];
                                  aux3deletar++
                                  quantidadeProduto[i] = prompt("Digite a quantidade do produto, para substituir o valor deletado: ")
                              }
                            }
                            if (aux3deletar > 0) {
                              alert("sucesso!")
                              aux3deletar = 0;
                            } else {
                                alert("Não encontrado!")
                            }
                            break;
                          break;
                        }
                }
        }
        break;
    }
}

function informacoes() {
  do {
    inicio = prompt('Deseja obter informações de produtos em estoque? (sim) ou (não): ')
    if (inicio != 'sim' && inicio != 'não') {
      alert(errata)
    }
  } while (inicio != 'sim' && inicio != 'não')
  for (let i=0;i<1000;i++) {
    if (inicio == 'sim') {
      for (let i=0;i<1000;i++) {
        totalQuantidadeProdutos += quantidadeProduto[i];
        totalPrecoProdutos += precoProduto[i] * quantidadeProduto[i];
        mediaProdutos = totalQuantidadeProdutos/totalPrecoProdutos;
      }
      alert("O total da quantidade de produtos em estoque é " + totalQuantidadeProdutos + ", sendo o total do valor em " + totalPrecoProdutos + ", e a média dos valores " + mediaProdutos + ".")
      do {
        auxinformacao = prompt("Deseja ter informações de produtos seletos? (sim) ou (não): ")
        if (auxinformacao != "sim" && auxinformacao != "não") {
          alert(errata)
        }
      } while (auxinformacao != "sim" && auxinformacao != "não")
      aux2informacao = prompt("Digite a numeração do produto, para obter informações: ")
      for (let i=0;i<1000;i++) {
        if (aux2informacao == numeroProduto[i]) {
          alert("Numeração do produto: " + numeroProduto[i] +".\nNome do produto: " + nomeProduto[i] + ".\nTipo do produto: " + tipoProduto[i] + ".\nMarca do Produto: " + marcaProduto[i] + ".\nFornocedor do produto " + fornecedorProduto[i] + ".\nQuantidade do produto: " + quantidadeProduto[i] + ".\nPreço do produto: " + precoProduto[i] + '.')
        }
      }
    }
    break;
  }
}

function vendas() {
  do {
    inicio = prompt('Deseja fazer a venda de um produto? (sim) ou (não): ')
    if (inicio != 'sim' && inicio != 'não') {
      alert(errata)
    }
  } while (inicio != 'sim' && inicio != 'não')
  for (let i=0;i<1000;i++) {
    if (inicio == "sim") {
     auxvendas = prompt('Digite a numeração do produto que deseja vender: ')
      for (let i=0;i<1000;i++) {
        if (auxvendas == numeroProduto[i]) {
          aux2vendas++
          if (aux2vendas > 0) {
            do {
              vendaQuantidade = Number(prompt("Digite a quantidade de unidades à ser vendida: "))
              if (vendaQuantidade > quantidadeProduto[i]) {
                alert(errata)
              }
            } while (vendaQuantidade > quantidadeProduto[i])
            precoVenda = vendaQuantidade * precoProduto[i];
            quantidadeProduto[i] -= vendaQuantidade;
            dataVenda = Date();
            alert("Valor da venda é de R$" + precoVenda + ".")
            do {
              pagamentoVenda = prompt("Escolha a forma de pagamento para efetuar a venda, sendo (cartão) ou (à vista): ")
              if (pagamentoVenda != "cartão" && pagamento != "à vista") {
                alert(errata)
              }
            } while (pagamentoVenda != "cartão" && pagamento != "à vista")
            alert("Sucesso!")
            break;
          }
        }
      }
    }
    break;
  }
}

for (let i=0;i<10000;i++) {
  do {
    controle = prompt("Escolha as funções do sistema:\nGestão do estoque (1).\nDeletar ou substituir valores (2).\nObter informações dos produtos (3).\nGestão das Vendas (4).\nDesligar sistema (off).\nDigite: ")
    if (controle != "1" && controle != "2" && controle != "3" && controle != "4" && controle != "off") {
      alert(errata)
    }
  } while (controle != "1" && controle != "2" && controle != "3" && controle != "4" && controle != "off")
  switch (controle) {
    case "1":
      estoque()
      break;
    case "2":
      deletarProdutos()
      break;
    case "3":
      informacoes()
      break;
    case "4":
      vendas()
      break;
  }
  if (controle == "off") {
    break;
  }
}



