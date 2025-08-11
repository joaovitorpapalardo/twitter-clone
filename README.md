# Twitter Clone - PHP + Mini Framework MVC

Este é um clone simplificado do Twitter, desenvolvido em **PHP** utilizando um **mini framework MVC**.  
O projeto inclui funcionalidades de autenticação, publicação de tweets, listagem de usuários, seguir e deixar de seguir, além de exibir uma timeline personalizada.
Foi criado como projeto no curso de desenvolvimento web completo na Udemy, pelo instrutor Jorge Sant Ana e Jamilton Damasceno.

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
│ ├── Views/ # Views (.phtml: timeline, cadastro, inscreverse, etc.)  
│ └── Route.php # Rotas da aplicação  
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
│  
├── Connection.php # Conexão com o banco (usar placeholders ou .env para segurança)  
├── composer.json # Configuração do Composer  
├── composer.lock # Travamento das dependências  
└── README.md # Este arquivo  
