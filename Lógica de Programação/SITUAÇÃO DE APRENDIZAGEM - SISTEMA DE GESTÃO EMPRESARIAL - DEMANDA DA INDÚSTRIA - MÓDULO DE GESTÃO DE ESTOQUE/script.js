let numeroPedido1 = [];
let descontoCompras = [];
let nomeProduto1 = [];
let quantidadeProduto1 = [];
let precoProduto1 = [];
let fornecedorProduto1 = [];
let frete1 = []; 
let pagamento1 = [];
let totalPreco = [];
let calculoDesconto1 = [];
let venda = 0,calculoPreco1 = 0, data2, auxdata, inicio1, compras = 0, repita1, somaQuanti = 0, somaQuantiAux1, somaQuantiAux2, somaTotalCompras = 0,  somaTotalComprasAux1 = 0, somaTotalComprasAux2 = 0, lucro = 0, deletarAux;
let data1 = [];
let cpfCliente = [];
let data = [];
let tipoProduto = [];
let calculoPreco, calculoDesconto, calculoDescontoFuncionario, visualizar, repita, vendas = 0, somaQuantiProd = 0, somaTotalVendas = 0, inicio, auxQuantidadeProduto2 = 0;
let refri = [];
let produto = [];
let precoProduto = [];
let auxQuantidadeProduto = []
let quantidadeProduto = [];
let funcionario = [];
let nomeProduto = [];
let precoProdutoEstoque = [];
let contato = [];
let produtoFornecedor = [];
let quantidadeProdutoEstoque = [];
let somaProQuan = 0, mediaProdutos = 0, repita2, deletar, somaProValor = 0, repitaAux = 0, inicio2;

function AutenticacaoUsuario() {
    let nomeUsuario, senhaUsuario, nome = "administrador", senha = 9873;

    do {
        nomeUsuario = prompt("Digite o nome de usuário: ");
        if (nomeUsuario != nome) {
            alert("Nome de usuário não condiz!");
        }
    }
    while (nomeUsuario != nome)
    do {
        senhaUsuario = prompt("Digite a senha do usuário: ");
        if (senhaUsuario != senha) {
            alert("Senha do usuário não condiz!");
        }
    }
    while (senhaUsuario != senha)
    alert("Acesso permitido.")
}

function gestaoEstoque() {
    
        do {
            inicio2 = prompt("Deseja armazenar um produto ao estoque? (sim ou não): ")
            if (inicio2 != "sim" && inicio2 != "não") {
                alert("Valor inválido!")
            }
        } while (inicio2 != "sim" && inicio2 != "não")
        for (let i=0;i<1000;i++) {
            if (inicio2 == "sim") {
            repitaAux++
            nomeProduto[i] = prompt("Digite o nome do produto: ");
            do {
                quantidadeProdutoEstoque[i] = Number(prompt("Digite a quantidade do produto: "));
                if (quantidadeProdutoEstoque[i] == NaN && quantidadeProdutoEstoque[i] < 0 && quantidadeProdutoEstoque[i] == undefined) {
                    alert("Valor inválido!")
                }
            } while (quantidadeProdutoEstoque[i] == NaN && quantidadeProdutoEstoque[i] < 0 && quantidadeProdutoEstoque[i] == undefined)
            do {
                precoProdutoEstoque[i] = Number(prompt("Digite o preco por unidade: "));
                if (precoProdutoEstoque[i] == NaN && preco[i] < 0 && precoProdutoEstoque[i] == undefined) {
                    alert("Valor inválido!")
                }
            } while (precoProdutoEstoque[i] == NaN && preco[i] < 0 && precoProdutoEstoque[i] == undefined)
            
            produtoFornecedor[i] = prompt("Digite o nome do fonercedor: ");
            contato[i] = prompt("Digite um método para contato: ");
            alert("Sucesso ao armazenar as informações!");
            alert("O produto " + nomeProduto[i] + " possui " + quantidadeProdutoEstoque[i] + " unidade(s) em estoque, ao preço de R$" + precoProdutoEstoque[i] + " por unidade. " + "Seu fornecedor é " + produtoFornecedor[i] + ", e sua forma de contato é " + contato[i] + ".\n");
            do{
                deletar = prompt("Deseja deletar os valores do produto? (sim ou não): ")
                if (deletar != "sim" && deletar != "não") {
                    alert("Valor inválido!")
                }
            } while (deletar != "sim" && deletar != "não")
            if (deletar == "sim") {
                delete nomeProduto[i];
                delete quantidadeProdutoEstoque[i];
                delete precoProdutoEstoque[i];
                delete produtoFornecedor[i];
                delete contato[i];
                alert("Valores deletados com sucesso!")
            }
            do {
                repita2 = prompt("Deseja armazenar outro produto? (sim ou não): ");
                if (repita2 != 'não' && repita2 != 'sim') {
                alert("Valor inválido!");
                }
            }
            while (repita2 != 'não' && repita2 != 'sim');
            if (repita2 == "não") {
                for (let i=0;i<repitaAux;i++) {
                    somaProQuan += quantidadeProdutoEstoque[i];
                    somaProValor += precoProdutoEstoque[i] * quantidadeProdutoEstoque[i];
                    mediaProdutos = somaProValor/somaProQuan;
                }
                alert('O total da quantidade de produtos é: ' + somaProQuan + '\nO total dos valores são: R$' + somaProValor + '\nA média de valores dos produtos é: R$' + mediaProdutos + '.');
                break;
            }
        }
else {
    do{
        deletar = prompt("Deseja deletar os valores de um produto? (sim ou não): ")
        if (deletar != "sim" && deletar != "não") {
            alert("Valor inválido!")
        }
    } while (deletar != "sim" && deletar != "não")
    if (deletar == "sim") {
        do {
            deletarAux = prompt("Digite o nome do produto para deletar: ")
            if (nomeProduto[i] != deletarAux) {
                alert("Produto não encontrado!")
            }
        } while (nomeProduto[i] != deletarAux)
        if (nomeProduto[i] == deletarAux) {
            delete nomeProduto[i];
            delete quantidadeProdutoEstoque[i];
            delete precoProdutoEstoque[i];
            delete produtoFornecedor[i];
            delete contato[i];
            alert("Valores deletados com sucesso!")
        }
        break;
    }
    break;
}
for (let i=0;i<repitaAux;i++) {
        somaProQuan += quantidadeProdutoEstoque[i];
        somaProValor += precoProdutoEstoque[i] * quantidadeProdutoEstoque[i];
        mediaProdutos = somaProValor/somaProQuan;
    }
    alert('O total da quantidade de produtos é: ' + somaProQuan + '\nO total dos valores são: R$' + somaProValor + '\nA média de valores dos produtos é: R$' + mediaProdutos + '.');
}
}

function moduloCompra() {
    do {
        inicio1 = prompt("Deseja armazenar um pedido de compra? (sim ou não): ")
        if (inicio1 != "sim" && inicio1 != "não") {
            alert("Valor inválido!")
        }
    }
    while (inicio1 != "sim" && inicio1 != "não")
    switch (inicio1) {
        case "sim":
            for (let i=0;i<1000;i++) {
                compras++
                numeroPedido1[i] = Number(prompt("Digite o número do pedido: "));
                nomeProduto1[i] = prompt("Digite o nome do produto: ");
                do {
                    quantidadeProduto1[i] = Number(prompt("Digite a quantidade de " + nomeProduto1[i] + "(s): "))
                    if (quantidadeProduto1[i] < 0 && quantidadeProduto1[i] == undefined && quantidadeProduto1[i] == NaN) {
                        alert("Valor inválido!")
                        delete quantidadeProduto1[i]
                    }
                }
                while (quantidadeProduto1[i] < 0 && quantidadeProduto1[i] != undefined && quantidadeProduto1[i] != NaN)
                do {
                    precoProduto1[i] = Number(prompt("Digite o preço por unidade de " + nomeProduto1[i] + ": "))
                    if (precoProduto1[i] < 0 && precoProduto1[i] == undefined && precoProduto1[i] == NaN) {
                        alert("Valor inválido!")
                        delete precoProduto1[i]
                    }
                } while (precoProduto1[i] < 0 && precoProduto1[i] == undefined && precoProduto1[i] == NaN)
                fornecedorProduto1[i] = prompt("Digite o fornecedor de " + nomeProduto1[i] + "(s): ")
                do {
                    frete1[i] = Number(prompt("Digite o valor do frete: "))
                    if (frete1[i] < 0 && frete1[i] == undefined && frete1[i] == NaN) {
                        alert("Valor Inválido!")
                    }
                } while (frete1[i] < 0 && frete1[i] == undefined && frete1[i] == NaN)
                do {
                    descontoCompras[i] = Number(prompt("Digite a porcentagem de desconto: "))
                    if (descontoCompras[i] < 0 && descontoCompras[i] == undefined && descontoCompras[i] == NaN) {
                        alert("Valor Inválido!")
                    }
                } while (descontoCompras[i] < 0 && descontoCompras[i] == undefined && descontoCompras[i] == NaN)
                do {
                    pagamento1[i] = (prompt("Digite o tipo de pagamento, sendo cartão, à vista, ou boleto: "))
                    if (pagamento1[i] != "cartão" && pagamento1[i] != "à vista" && pagamento1[i] != "boleto") {
                    alert("Valor inválido!")
                    }
                } while (pagamento1[i] != "cartão" && pagamento1[i] != "à vista" && pagamento1[i] != "boleto" )
                data1[i] = Date()
                alert("Data de registro do pedido: " + data1[i])
                alert("Sucesso em registrar as informações!\n")
                do {
                    repita1 = prompt("Deseja armazenar outra compra? (sim ou não): ")
                    if (repita1 != "sim" && repita1 != "não") {
                        alert("Valor inválido!")
                    }
                }
                while (repita1 != "sim" && repita1 != "não")
                if (repita1 == "não") {
                    break;
                }
            }
        for (let i=0;i<compras;i++) {
            do {
                do {
                    auxdata = prompt("Deseja ter informações sobre pedidos? (sim ou não): ")
                    if (auxdata != "sim" && auxdata != "não") {
                    alert("Valor inválido!")
                    }
                } while (auxdata != "sim" && auxdata != "não")
                switch (auxdata)  {
                    case "sim":
                        do {
                            data2 = prompt('Digite a data do pedido: ')
                            if (data2 != data1[i]) {
                                alert("Não encontrado.")
                            }
                        }
                        while (data2 != data1[i])
                        if (data2 == data1[i]) {
                            alert("Pedido de nº " + numeroPedido1[i] + ", produto de nome " + nomeProduto1[i] + " sendo o estoque de " + quantidadeProduto1[i] + " unidade(s), vendido à R$" + precoProduto1[i] + " a unidade, do fornecedor " + fornecedorProduto1[i] + ".")
                            if (frete1[i] > 0) {
                                    alert("\nFrete no valor da compra é de " + frete1[i] + ".")
                            }
                            calculoPreco1 = precoProduto1[i] * quantidadeProduto1[i];
                            calculodesconto1 = calculoPreco1 * descontoCompras / 100;
                                alert("\nPreço da compra é: R$" + calculoPreco1 + ".")
                            totalPreco[i] = calculoPreco1 + frete1[i] - calculodesconto1;
                            alert("Total do valor da compra é: R$" + totalPreco[i])
                        }
                        break;
                    case "não":
                        calculoPreco1 = precoProduto1[i] * quantidadeProduto1[i];
                        calculodesconto1 = calculoPreco1 * descontoCompras / 100;
                        totalPreco[i] = calculoPreco1 + frete1[i] - calculodesconto1;
                        break;
                }
            } 
            while (auxdata != "não" && auxdata != "sim")
            if (pagamento1[i] == "cartão" && pagamento1[i] == "à vista") {
                somaQuantiAux1 += totalPreco[i];
                somaQuantiAux2 = somaQuantiAux1;
            }
            break;
        }
    }
}

function moduloVenda() {
    do {
        inicio = prompt('Deseja armazenar um pedido de venda? (sim ou não): ')
        if (inicio != "sim" && inicio != "não") {
            alert("Valor inválido!")
        }
    }
    while (inicio != "sim" && inicio != "não")
    if (inicio == "sim") {
    for (let i=0;i<1000;i++) {
    cpfCliente[i] = prompt("Digite o CPF do cliente: ")
    data[i] = Date()
    vendas++
    do {
        tipoProduto[i] = prompt("Digite o tipo do produto, sendo (normal ou kitfesta): ")
        if (tipoProduto[i] != "normal" && tipoProduto[i] != "kitfesta") {
            alert("Valor inválido!")
        }
    }
    while (tipoProduto[i] != "kitfesta" && tipoProduto[i] != "normal")
    switch (tipoProduto[i]) {
        case "normal":
            produto[i] = prompt("Digite o nome do produto: ")
            do {
                auxQuantidadeProduto[i] = prompt("Produto isolado? (sim ou não): ")
                if (auxQuantidadeProduto[i] != "sim" && auxQuantidadeProduto[i] != "não") {
                    alert("Valor inválido!")
                }
            }
            while (auxQuantidadeProduto[i] != "sim" && auxQuantidadeProduto[i] != "não")
            switch (auxQuantidadeProduto[i]) {
                case "sim":
                    auxQuantidadeProduto2++;
                    quantidadeProduto[i] = auxQuantidadeProduto2;
                    do {
                        precoProduto[i] = Number(prompt("Digite o preço: "))
                        if (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    } while (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0)
                    calculoPreco = precoProduto[i];
                    break;
                case "não":
                    do {
                        quantidadeProduto[i] = Number(prompt("Digite a quantidade: "))
                        if (quantidadeProduto[i] == NaN && quantidadeProduto[i] == undefined && quantidaderoduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    } while (quantidadeProduto[i] == NaN && quantidadeProduto[i] == undefined && quantidaderoduto[i] < 0)
                    do {
                        precoProduto[i] = Number(prompt("Digite o preço por unidade: "))
                        if (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    } while (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0)
                    calculoPreco = quantidadeProduto[i] * precoProduto[i]
            }
                    do {
                        funcionario[i] = prompt("Cliente é um funcionário? (sim ou não): ")
                        if (funcionario[i] != "sim" && funcionario[i] != "não") {
                            alert("Valor inválido!")
                        }
                    }
                    while (funcionario[i] != "sim" && funcionario[i] != "não") 
                        switch (funcionario[i]) {
                            case "sim":
                                calculoPreco  = calculoPreco - (calculoPreco * 10 / 100)
                                break;
                            case "não":
                                break;
                        }
                    alert("O CPF do cliente é "+ cpfCliente[i] + ", venda feita às " + data[i] + ".")
                    if (auxQuantidadeProduto[i] != "sim") {
                        alert(" O produto " + produto[i] + " de " + quantidadeProduto[i] + " quantidade de unidades, por R$" + precoProduto[i] + " a unidade, valor à se pagar " + calculoPreco + ".\n\n")
                    } else {
                        alert("O produto " + produto[i] + ", valor à se pagar " + calculoPreco + ".\n\n")
                    }
                    break;
            
            break;
            
        case "kitfesta":
            produto[i] = prompt("Digite o nome do produto: ")
            do {
                auxQuantidadeProduto[i] = prompt("Produto isolado? (sim ou não): ")
                if (auxQuantidadeProduto[i] != "sim" && auxQuantidadeProduto[i] != "não") {
                    alert("Valor inválido!")
                }
            }
            while (auxQuantidadeProduto[i] != "sim" && auxQuantidadeProduto[i] != "não")
            switch (auxQuantidadeProduto[i]) {
                case "sim":
                    auxQuantidadeProduto2++;
                    quantidadeProduto[i] = auxQuantidadeProduto2;
                    do {
                        precoProduto[i] = Number(prompt("Digite o preço: "))
                        if (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    } while (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0)
                    calculoPreco = precoProduto[i]
                    calculoDesconto = precoProduto - (precoProduto[i] * 3 / 100)
                    break;
                case "não":
                    do {
                        quantidadeProduto[i] = Number(prompt("Digite a quantidade: "))
                        if (quantidadeProduto[i] == NaN && quantidadeProduto[i] == undefined && quantidaderoduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    } while (quantidadeProduto[i] == NaN && quantidadeProduto[i] == undefined && quantidaderoduto[i] < 0)
                    do {
                        precoProduto[i] = Number(prompt("Digite o preço por unidade: "))
                        if (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0) {
                            alert("Valor inválido!")
                        }
                    
                    } while (precoProduto[i] == NaN && precoProduto[i] == undefined && precoProduto[i] < 0)
                    calculoPreco = quantidadeProduto[i] * precoProduto[i]
                    calculoDesconto = calculoPreco - (calculoPreco * 3 / 100)
                    break;
            }
                do {
                    funcionario[i] = prompt("Cliente é um funcionário? (sim ou não): ")
                    if (funcionario[i] != "sim" && funcionario[i] != "não") {
                        alert("Valor inválido!")
                    }
                }
                while (funcionario[i] != "sim" && funcionario[i] != "não")
                switch (funcionario[i]) {
                    case "sim":
                        caculoDesconto = calculoDesconto - (calculoDesconto * 10 / 100)
                        break;
                    case "não":
                        break;
                }
                refri[i] = prompt("Digite um refrigerante 2l da preferência do cliente: ")
                alert(" O CPF do cliente é " + cpfCliente[i] + ", venda feita às " + data[i] + ".")
                if (auxQuantidadeProduto[i] != "sim") {
                    alert(" O produto " + produto[i] + " de " + quantidadeProduto[i] + " quantidade de unidades, por R$" + precoProduto[i] + " a unidade, sendo o preço a se pagar " + calculoDesconto + ".") 
                } else {
                    alert("O produto " + produto[i] + " de preço à se pagar " + calculoDesconto + ".")
                }
                alert("Adicionado um refrigerante " + refri[i] + " de 2L.\n\n")
            break;
        default:
            alert("Valor inválido!")
            break;
            }
        do {
            repita = prompt("Deseja armazenar outra venda? (sim ou não): ")
            if (repita != "sim" && repita != "não") {
            alert("Valor inválido!")
            }
        }
        while (repita != "sim" && repita != "não")
            if (repita == "não") {
                break;
            }
        }
    }
}

function opcaoVisualizar(moduloVenda,moduloCompra) {
    for (let i=0;i<vendas;i++) {
            somaQuantiProd += quantidadeProduto[i]
            if (tipoProduto[i] == "kitfesta") {
            somaTotalVendas = calculoDesconto
        } else {
            somaTotalVendas = calculoPreco
        }
        
    }
    for (let i=0;i<compras;i++) {
        somaTotalComprasAux1 += totalPreco[i];
        somaTotalComprasAux2 = somaTotalComprasAux1;
    }
    somaQuanti = somaQuantiAux2;
    somaTotalCompras = somaTotalComprasAux2;
    lucro = (somaTotalVendas - somaTotalCompras);
    alert("total de compras no dia: " + compras + ".")
    alert("Quantidade de produtos vendidos: " + somaQuantiProd + '.')
    alert("Total em tipo de compras se cartão ou à vista: R$" + somaQuanti + ".")
    alert("Total de vendas no dia: " + vendas + ".")
    alert("Lucro do dia: R$" + lucro + ".")
}

let controle

AutenticacaoUsuario()
for (let i=0;i=1000;i++) {
    do {
    controle = prompt("Escolha as funções dos sistema: \nGestão de estoque (estoque) \nGestão de vendas (vendas) \nGestão de compras (compras) \nInformações adicionais (informações) \nDesligar o sistema  (off) \nDigite: ")
        if (controle != "estoque" && controle != "vendas" && controle != "compras" && controle != "off" && controle != "informações") {
            alert("Valor inválido!")
        }
    } while (controle != "estoque" && controle != "vendas" && controle != "compras" && controle != "off" && controle != "informações")
    switch (controle) {
        case "estoque":
            gestaoEstoque()
            break;
        case "compras":
            moduloCompra()
            break;
        case "vendas":
            moduloVenda()
            break;
        case "informações":
            opcaoVisualizar(moduloVenda,moduloCompra)
            break;
            
    }
    if (controle == "off") {
        break;
    }
    
}