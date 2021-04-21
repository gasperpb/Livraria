# Crud feito em laravel para fins de estudo porem com intuito de ir em frente e melhorar 


# Tarefas
O controle das tarefas desse projeto será realizado no GitHub

# Ícones
📦 Nova Funcionalidade
🆙 Atualização
🐞 Correção de Bug
🏁 Release


## Instalação

Em uma pasta do seu computador, digitar no cmd =  git clone 
https://github.com/gasperpb/Livraria.git

OBS: "Irá fazer dowload do projeto"

DENTRO DA PASTA "livraria" digitar = composer install
OBS: "Irá criar as pastas necessárias"

Se não tiver o banco de dados, Criar no mysql

Abrir o arquivo .env.example e substituir as linhas : DB_DATABASE=SUA_BASE_DE_DADOS /// DB_USERNAME=SEU_NOME_DE_USUARIO /// DB_PASSWORD=SUA_SENHA

Rodar o comando = php -r "copy('.env.example', '.env');"
Rodar o comando = php artisan key:generate
Rodar o comando = php artisan migrate --seed
Rodar o comando = php artisan serve
## Ações disponíveis

Cadastro de usuarios;
Cadastro de livros;
Cadastro de Funcionário;
