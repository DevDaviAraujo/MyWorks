/*1) Ler 3 valores (A, B e C) representando as medidas dos lados de um triângulo e escrever se formam ou não um triângulo. OBS: para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados. */

{

let valorA,valorB,valorC
function soma(valorA,valorB,valorC) {
    let soma = valorA+valorB
    let soma1 = valorC+valorB
    let soma2 = valorA+valorC
    if (soma1>valorA && soma2>valorB && soma>valorC) {
        return alert("Forma um triângulo.")
    } else {
        return alert("Não forma um triângulo.")
    }
}

valorA = Number(prompt("Digite o primeiro número: "))
valorB = Number(prompt("Digite o segundo número: "))
valorC = Number(prompt("Digite o terceiro número: "))
soma(valorA,valorB,valorC)

}

/* 2) Ler o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE. */

{

let nome1, gols1, nome2, gols2
 function op(nome1, gols1, nome2, gols2) {
     if (gols1>gols2) {
        return alert("Ganhador da partida é" + " " + nome1 + ".")
     } else if (gols1<gols2) {
        return alert("Ganhador da partida é" + " " + nome2 + ".")
     } else {
        return alert("Empate.") 
     }
 }
 
 nome1 = prompt("Digite o nome do time: ")
 gols1 = Number(prompt("Digite o saldo de gols: "))
 nome2 = prompt("Digite o nome do time: ")
 gols2 = Number(prompt("Digite o saldo de gols: "))
 op(nome1, gols1, nome2, gols2)

}

/*3) Ler dois valores e imprimir uma das três mensagens a seguir: ‘Números iguais’, caso os números sejam iguais ‘Primeiro é maior’, caso o primeiro seja maior que o segundo; ‘Segundo
 maior’, caso o segundo seja maior que o primeiro. */

{ 

let num1, num2

function op(num1,num2) {
    if (num1==num2) {
        alert("Números iguais.")
    } else if (num1>num2) {
        alert("Primeiro é maior.")
    } else {
        alert("Segundo é maior.")
    }
}

num1 = Number(prompt("Digite um número: "))
num2 = Number(prompt("Digite outro número: "))
op(num1,num2)

}

/*4) Um posto está vendendo combustíveis com a seguinte tabela de descontos:
até 20 litros, desconto de 3% por litro Álcool
até 20 litros, desconto de 4% por litro Gasolina
acima de 20 litros, desconto de 5% por litro Álcool
acima de 20 litros, desconto de 6% por litro Gasolina
Escreva um algoritmo que leia o número de litros vendidos e o tipo de combustível (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente
 sabendo-se que o preço do litro da gasolina é R$ 3,30 e o preço do litro do álcool é R$ 2,90.*/

{

let litros, combustivel, preco, cal

function op(litros,combustivel,preco,cal) {
    switch (combustivel) {
        case "G": 
           preco = litros * 3,3
           if (litros < 20) {
               cal = preco - (preco * 4 / 100)
               alert("Preço à se pagar" + " " + "R$" + cal + ".")
           } else if (litros > 20) {
               cal = preco - (preco * 6 / 100)
               alert("Preço à se pagar" + " " + "R$" + cal + ".")
           }
           break
        case "A":
            preco = litros * 2,9
            if (litros < 20) {
                cal = preco - (preco * 3 / 100)
                alert("Preço à se pagar" + " " + "R$" + cal + ".")
            } else if (litros > 20) {
                cal = preco - (preco * 5 / 100)
                alert("Preço à se pagar" + " " + "R$" + cal + ".")
            }
            break
        default:
            alert("Inválido.")
    }
}
litros = Number(prompt("Digite à quantidade de litros: "))
do {
    combustivel = prompt("Digite uma opção, sendo G-gasolina e A-alcool: ")
    op(litros,combustivel,preco,cal)
}
while (combustivel != "G" && combustivel != "A")

} 

/*5) Faça um algoritmo para ler um número que é um código de usuário. Caso este código seja diferente de um código armazenado internamente no algoritmo (igual a 1234) deve ser apresentada
a mensagem ‘Usuário inválido!’. Caso o Código seja correto, deve ser lido outro valor que é a senha. Se esta senha estiver incorreta (a certa é 9999) deve ser mostrada a mensagem ‘senha 
incorreta’. Caso a senha esteja correta, deve ser mostrada a mensagem ‘Acesso permitido’.*/

{

let codigo= 1234, senha = 9999, senha1, codigo1

function op(codigo,codigo1) {
    if (codigo != codigo1) {
        alert("Usuário inválido!")
    } 
}
function op1(senha,senha1) {
    if (senha != senha1) {
        alert("Senha incorreta!")
    } else {
        alert("Acesso permitido.")
    }
}
do {
    codigo1 = Number(prompt("Digite o código do usuário: "))
    op(codigo,codigo1)
}
while (codigo1 != codigo)  
do {  
    senha1 = Number(prompt("Digite a senha do usuário: "))
    op1(senha,senha1)
}
while (senha1 != senha)

}

/*6)  Uma fruteira está vendendo frutas com a seguinte tabela de preços: 
Até 5 Kg
Morango R$ 2,50 por Kg
Maçã R$ 1,80 por Kg
 Acima de 5 Kg
 Morango R$ 2,20 por Kg
 Maçã R$ 1,50 por Kg
Se o cliente comprar mais de 8 Kg em frutas ou o valor total da compra ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler
a quantidade (em Kg) de morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente.*/

{

let kg, preco, fruta, cal

function op(kg,preco,fruta,cal) {
    switch (fruta) {
        case "morango": 
            if (kg < 5) {
                preco = (kg * 2,5)
                alert("Valor à se pagar é: " + "R$" + preco + ".")
            } else {
                if (kg > 5) {
                    preco = (kg * 2,2)
                    alert("Valor à se pagar é: " + "R$" + preco + ".")
                    if (kg > 8 || preco > 25) {
                        cal = (preco - (preco * 10 / 100))
                        alert("Valor à se pagar com desconto é: " + "R$" + cal + ".")
                    }
                }
            }
            break
        case "maçã":
            if (kg < 5) {
                preco = (kg * 1,8)
                alert("Valor à se pagar é: " + "R$" + preco + ".")
            } else {
                if (kg > 5) {
                    preco = (kg * 1,5)
                    alert("Valor à se pagar é: " + "R$" + preco + ".")
                    if (kg > 8 || preco > 25) {
                        cal = (preco - (preco * 10 / 100))
                        alert("Valor à se pagar com desconto é: " + "R$" + cal + ".")
                    }
                }
            }
            break
        default:
            alert("Valores inválidos.")
    }
}
do {
    fruta = prompt("Digite o tipo de fruta, sendo 'morango' ou 'maçã': ")
    kg = Number(prompt("Digite a quantidade de kilogramas: "))
    op(kg,preco,fruta,cal)
}
while (fruta != "maçã" && fruta != "morango")

}
/*7) Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. Para estar em condições, um dos seguintes requisitos deve ser satisfeito: 
 Ter no mínimo 65 anos de idade. 
 Ter trabalhado no mínimo 30 anos. 
 Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.
Com base nas informações acima, faça um algoritmo que leia: o número do empregado (código), o ano de seu nascimento e o ano de seu ingresso na empresa. O programa deverá 
escrever a idade e o tempo de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer'.*/

{

let codigo, anoNascimento, anoEmpresa, anoAtual, tempoTrabalho, idade

function operação(codigo,anoNascimento,anoEmpresa,anoAtual,tempoTrabalho) {
    idade = (anoAtual - anoNascimento)
    tempoTrabalho = (anoAtual - anoEmpresa)
    alert("Idade do empregado é " + idade + ", " + "O tempo de trabalho é " + tempoTrabalho + ", ")
    if (tempoTrabalho >= 25 && idade >= 60 || idade >= 65 || tempoTrabalho >= 30) {
        alert("sendo assim, requer aposentadoria.")
    } else {
        alert("sendo assim, não requer aposentadoria.")
    }
}

codigo = Number(prompt("Digite o código do empregado: "))
do {
    anoNascimento = Number(prompt("Digite o ano de nascimento do empregado: "))
    if (anoNascimento <= 0) {
        alert("Valor inválido.")
    }
}
while (anoNascimento <= 0)
do {
    anoAtual = Number(prompt("Digite o ano atual: "))
    if (anoAtual <= 0) {
        alert("Valor inválido.")
    }
}
while (anoAtual <= 0)
do {
    anoEmpresa = Number(prompt("Digite o ano de regresso do empregado na empresa: "))
    if (anoEmpresa <= 0) {
        alert("Valor inválido.")
    }
}
while (anoEmpresa <= 0)
 operação(codigo,anoNascimento,anoEmpresa,anoAtual,tempoTrabalho)

}

/*8) Escreva um algoritmo para ler 10 números e ao final da leitura escrever a soma total dos 10 números lidos.*/

{

function operação() {
    let soma = 0;
    for (let i=0;i<10;i++) {
        soma += Number(prompt("Digite um número: "))
    }
    return soma
}
alert("A soma dos números é: " + operação())

}
/*9)  Uma loja está levantando o valor total de todas as mercadorias em estoque. Escreva um algoritmo que imprima o valor total do estoque e a média dos valores das mercadorias digitadas, sabendo que 
as entradas são as informações abaixo: 
o número total de mercadorias no estoque;
o valor de cada mercadoria. 
var valores = [];
var mercadoria,  media, soma = 0;*/

{

function vetor(mercadoria) {
    for (var i=0;i<mercadoria;i++) {
        valores[i] = Number(prompt("Digite o valor da mercadoria: "))
        soma += valores[i];
    }
    media = soma/mercadoria
    return alert("O valor total das mercadorias é: " + "R$" + soma + ". \n" + "A média dos valores é: " + "R$" + media + ".")
}
mercadoria = Number(prompt("Digite a quantidade de mercadoria: "))
vetor(mercadoria)

}

/*10)  A prefeitura de uma cidade deseja fazer uma pesquisa entre seus habitantes. Faça um algoritmos para coletar dados sobre o salário e número de filhos de cada habitante e após as leituras, escrever: 
Média de salário da população
Média do número de filhos
Maior salário dos habitantes
Percentual de pessoas com salário menor que R$ 150,00*/

{

let salario = [];
let filhos = [];
let porcentagem, auxSalario = 0, auxFilhos = 0, mediaSalarial, mediaFilhos, pobres = 0, totalSalario = 0, totalFilhos = 0, maiorSalario =0

function operacao() {
    for (let i=0;i<1;i++) {
        mediaSalarial = (totalSalario/auxSalario)
        mediaFilhos = (totalFilhos/auxFilhos)
        porcentagem = ((pobres * 100) / auxSalario)
        for (let i=0;i<10000;i++) {
            Math.max(salario[i])
        }
        maiorSalario = Math.max(salario[i])
        alert("A média salarial é: " + "R$" + mediaSalarial + ".\n" + "A média de filhos é: "  + mediaFilhos + ".\n" + "A porcentagem de pessoas com salário abaixo de R$150 é:" + "R$" + porcentagem + "%" + ".\n" +"O maior salário é: " + "R$" + maiorSalario + ".")
    }
}


for (let i=0;i<1000;i++) {
    salario[i] = Number(prompt("Digite o salário: "))
    if (salario[i] < 0 ) {
            break;
        } else {
            totalSalario += salario[i]
            auxSalario++
            if (salario[i] < 150) {
                pobres++
            }
        }
}    
    
for (let i=0;i<1000;i++) {
    filhos[i] = Number(prompt("Digite a quantidade de filhos: "))
    if (filhos[i] < 0) {
        break
    } else {
        totalFilhos += filhos[i]
        auxFilhos++
        }
}    

operacao()

}