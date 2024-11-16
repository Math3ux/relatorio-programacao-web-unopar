# Projeto: Calculadora de Signo do Zodíaco

## Descrição

Este projeto é uma aplicação web simples em PHP que permite ao usuário descobrir seu signo do zodíaco com base em sua data de nascimento. A aplicação utiliza um arquivo XML para armazenar as informações dos signos, incluindo datas, nomes e descrições.

## Funcionalidades

- Entrada da data de nascimento através de um formulário.
- Cálculo do signo correspondente considerando os signos que atravessam o final do ano.
- Exibição do nome do signo e uma breve descrição.
- Layout responsivo utilizando Bootstrap.

## Tecnologias Utilizadas

- PHP
- XML
- HTML e CSS
- Bootstrap

## Estrutura do Projeto

-

index.php

: Página inicial com o formulário para entrada da data de nascimento.

-

show_zodiac_sign.php

: Script que processa a data inserida e exibe o signo correspondente.

-

signos.xml

: Arquivo XML contendo os dados dos signos.

-

header.php

: Arquivo de cabeçalho com as importações de estilos.

-

style.css

: Arquivo CSS com estilos personalizados.

## Como Executar

1. **Pré-requisitos**:

   - Servidor web com suporte a PHP (por exemplo, XAMPP ou WAMP).

2. **Instalação**:

   - Clone este repositório ou faça o download dos arquivos.
   - Coloque os arquivos na pasta raiz do seu servidor web (por exemplo, `htdocs` para XAMPP).

3. **Execução**:
   - Inicie o servidor web.
   - Acesse `http://localhost/index.php` no seu navegador.
   - Insira sua data de nascimento e envie o formulário para ver seu signo.
