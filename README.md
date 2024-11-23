# Projeto de Login com PHP Orientado a objeto 🚀
Este repositório contém o código-fonte de um sistema de login desenvolvido em PHP puro, utilizando Orientação a Objetos (OO) e o padrão DAO (Data Access Object). O projeto é simples e tem como objetivo fornecer uma implementação prática de um sistema de login seguro, utilizando MySQL como banco de dados.

## Tecnologias Utilizadas e Funcionalidades 🛠️

O projeto foi desenvolvido com as seguintes tecnologias e práticas:

- **PHP Orientado a Objetos (OO): O código foi estruturado utilizando princípios de programação orientada a objetos, tornando o código mais modular, reutilizável e fácil de manter.

- **DAO (Data Access Object): O padrão DAO foi utilizado para abstrair a lógica de acesso ao banco de dados, oferecendo uma interface limpa e desacoplada para realizar operações no banco de dados.

- Autoload via Composer: O autoload foi configurado via Composer, o que permite o carregamento automático das classes sem a necessidade de require ou include em cada arquivo PHP.

- Bootstrap Componentizado: O Bootstrap foi utilizado para a interface do usuário, e foi componentizado para facilitar a reutilização e personalização dos elementos visuais.

- Sistema de Sessões: Um sistema de sessões foi implementado para gerenciar o estado de autenticação, garantindo que o usuário permaneça logado enquanto navega.

- Sistema de Autenticação: A autenticação de usuários foi implementada utilizando classes PHP, oferecendo segurança no login e controle de acesso.

- Banco de Dados MySQL: O projeto usa MySQL para armazenar as credenciais dos usuários e outras informações necessárias para o sistema de login.

## Como utilizar 🤝

1. **Clone o Repositório:**
   
   ```bash
   git clone https://github.com/Kaua-Almeida/Login-POO.git
   cd Login-POO


2. **Instale as Dependências do Composer:**
   ```bash
   composer install

3. **Configure o Ambiente:**

   ```bash
   Configure com banco de dados criando um novo banco com uma tabela users com campos email e senha.
   
4. **Crie um usuário diretamente pelo banco:**
   ``` bash
   INSERT INTO `users`( `email`, `password`) VALUES ('[value-3]','[value-4]').

4. . **Inicie o servidor local:**
   ```bash
   php -S localhost:8000

## Licença 📄

Este projeto é open-source. Sinta-se à vontade para explorar, contribuir e adaptar conforme necessário.

Agradeço por visitar meu repositório e estou ansioso para receber seu feedback!
