# Twitter Clone - PHP + Mini Framework MVC

Este é um clone simplificado do Twitter, desenvolvido em **PHP** utilizando um **mini framework MVC**.  
O projeto inclui funcionalidades de autenticação, publicação de tweets, listagem de usuários, seguir e deixar de seguir, além de exibir uma timeline personalizada.
Foi criado como projeto no curso de desenvolvimento web completo na Udemy, com os instrutores Jorge Sant Ana e Jamilton Damasceno.

---

## Funcionalidades

- Cadastro e login de usuários (com autenticação de sessão)
- Publicar tweets
- Listar tweets na timeline
- Seguir e deixar de seguir usuários
- Listar sugestões de "Quem seguir"
- Layout inspirado no Twitter original
- Organização de código utilizando arquitetura **MVC**
- Roteamento simples com `Route.php`

---

## 📁 Estrutura do Projeto
├── App/  
│ ├── Controllers/ # Controladores (AuthController, IndexController, AppController)  
│ ├── Models/ # Modelos (Usuario.php, Tweet.php)  
│ ├── Views/ # Views (.phtml: timeline, cadastro, inscreverse, index, layout.)  
│ └── Route.php # Rotas da aplicação  
│ └── Connection.php # Conexão com o banco  
│  
├── public/ # Arquivos públicos acessíveis via navegador  
│ ├── index.php # Ponto de entrada do sistema  
│ └── css/style.css # Estilos da aplicação  
│  
├── vendor/  
│ └── MF  
│ ├── Action.php  
│ ├── Bootstrap.php  
│ ├── Container.php  
│ └── Model.php  
│ └── Autoload.php
│  
└── README.md # Este arquivo  

## Arquitetura MVC
O projeto utiliza o padrão **MVC (Model-View-Controller)**:

- **Model (Modelo)** → Gerencia os dados e interage com o banco (ex: `Usuario.php`, `Tweet.php`).
- **View (Visão)** → Responsável pela interface (arquivos `.phtml`).
- **Controller (Controlador)** → Processa requisições, coordena o fluxo e retorna as views (ex: `AuthController.php`, `IndexController.php`).

**Vantagens do MVC:**
- Organização e clareza no código.
- Separação de responsabilidades.
- Facilidade para manutenção e expansão.
- Reuso de código e layouts.

---

## ⚙️ Requisitos

- PHP >= 7.0
- Composer
- Servidor web local (Apache, Nginx ou o embutido do PHP)
- Banco de dados MySQL/MariaDB
