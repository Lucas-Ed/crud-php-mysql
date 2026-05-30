# CRUD PHP + MySQL

Sistema CRUD simples desenvolvido em PHP com MySQL, orquestrado com Docker.

## Tecnologias

- **PHP** 8.x com PDO
- **MySQL** 5.7
- **Nginx** (servidor web)
- **Docker** e Docker Compose

## Estrutura

```
📂crud-php-mysql/
├── 📄docker-compose.yml
├── 📂nginx/  # Configuração do Nginx
│   ├── 📄Dockerfile
│   └── 📄default.conf
├── 📂php/  # Dockerfile do PHP
│   └── 📄Dockerfile
└── 📂html/  # Arquivos PHP da aplicação
    ├── 📄db.php
    ├── 📄index.php
    ├── 📄create.php
    ├── 📄edit.php
    └── 📄delete.php
```

## Como executar

```bash
docker-compose up -d
```

Acesse [http://localhost:8080](http://localhost:8080)

## Funcionalidades

- Listar registros
- Criar novo registro
- Editar registro
- Excluir registro

## Banco de Dados

O banco é criado automaticamente com o nome `crud`. A tabela esperada é `pessoas` com os campos:
___________________
| Campo | Tipo     |
|-------|----------|
| id    | int (PK) |
| nome  | varchar  |
| email | varchar  |
|_______|__________|

Feito com simplicidade para fins educacionais, sem foco em segurança ou performance. Ideal para aprender os conceitos básicos de CRUD com PHP e MySQL.
