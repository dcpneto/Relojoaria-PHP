# Relojoaria
Crud utilizando PHP no formato MVC

### Objetivo: 
>Desenvolver um sistema CRUD simples em PHP e MySQL para a gestão de relógios de uma loja.

### Detalhes:
>Os relógios devem contar com as seguintes informações:

1. Nome
2. Marca
3. Quantidade em Estoque
4. Preço (BRL, contando centavos)
5. Flag para venda ativa/inativa (Disponível ou não)
6. Data de inclusão/edição

### Regras: 
>As regras abaixo devem ser seguidas ao cadastrar/editar um relógio:

1. Não devem haver relógios com o mesmo nome.
2. A quantidade de estoque e o preço, não podem ser zerados nem negativos.
3. O relógio deve ter o valor inicial de inativo, podendo ser alterado posteriormente diretamente por meio da listagem (link ou Ajax) ou edição.
4. O preço deve ser formatado no padrão brasileiro (R$ 1.234,56).


### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema.
2.  diretório "view" é onde ficam todas as telas do sistema.
3.  diretório "controller" é onde fica ficam as funcionalidades do sistema que interagem com o banco de dados.
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados.


No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php. a página head e menu são os escopos do HTML e menu do sistemas.
No diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.
No diretório "model" estão os arquivos de conexão com o banco de dados.
O arquivo script.sql é o script em sql que cria o banco e as tabelas e deverá ser executado antes de inicializar o sistema.
