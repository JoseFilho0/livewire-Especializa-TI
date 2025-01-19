# Projeto de Envio de Tweets

Bem-vindo ao repositório do **Projeto de Envio de Tweets**! Este é um projeto desenvolvido com Laravel que permite aos usuários se cadastrarem, fazerem login e publicarem tweets. Além disso, os usuários podem fazer upload de uma foto de perfil que será exibida junto com seus tweets.

---

## Desenvolvido com Livewire

Este projeto foi desenvolvido utilizando o framework Livewire para simplificar a criação de componentes dinâmicos e reativos no Laravel. A abordagem do Livewire permite uma experiência rica para o usuário, com menos dependência de JavaScript no front-end.

Este projeto também foi desenvolvido com a orientação do **professor do Especializa TI**, a quem agradeço pelos ensinamentos.

Link do canal e do curso: https://youtu.be/lMNpKM3TbJw?si=U40eNf5lTP-HlkHq

---

## Funcionalidades

- Cadastro de usuários na rota `/register`.
- Login de usuários na rota `/login`.
- Envio de tweets através da rota `/tweets`.
- Upload de uma foto de perfil na rota `/upload`.

---

## Requisitos do Sistema

Antes de começar, certifique-se de que sua máquina atenda aos seguintes requisitos:

- **PHP**: Versão 8.1 ou superior.
- **Composer**: Gerenciador de dependências do PHP.
- **Node.js**: Versão 16 ou superior.
- **npm** ou **yarn**: Gerenciador de pacotes para o front-end.
- **Banco de Dados**: MySQL ou equivalente configurado.

---

## Instalação

Siga as etapas abaixo para configurar e executar o projeto em sua máquina local:

### 1. Clonar o Repositório

```bash
git clone https://github.com/JoseFilho0/livewire-Especializa-TI.git
cd nome-do-repositorio
```

### 2. Instalar Dependências do Back-end

Utilize o Composer para instalar as dependências do Laravel:

```bash
composer install
```

### 3. Configurar o Arquivo `.env`

Crie um arquivo `.env` a partir do exemplo fornecido:

```bash
cp .env.example .env
```

Abra o arquivo `.env` e configure as seguintes variáveis:

```env
APP_NAME=Projeto de Envio de Tweets
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

### 4. Gerar a Chave da Aplicação

```bash
php artisan key:generate
```

### 5. Configurar o Banco de Dados

Execute as migrações para criar as tabelas necessárias:

```bash
php artisan migrate
```

### 6. Instalar Dependências do Front-end

Use `npm` ou `yarn` para instalar as dependências do front-end:

```bash
npm install
```

### 7. Compilar os Arquivos Estáticos

Compile os assets do projeto:

```bash
npm run dev
```

---

## Uso

### Iniciar o Servidor

Inicie o servidor local do Laravel:

```bash
php artisan serve
```

A aplicação estará disponível em [http://localhost:8000](http://localhost:8000).

### Rotas Principais

1. **Cadastro de Usuários**: `/register`
   - Enviar os dados `name`, `email`, e `password` no corpo da requisição.

2. **Login de Usuários**: `/login`
   - Enviar os dados `email` e `password` no corpo da requisição.

3. **Envio de Tweets**: `/tweets`
   - O usuário deve estar autenticado.
   - Enviar os dados `content` (conteúdo do tweet).

4. **Upload de Foto de Perfil**: `/upload`
   - Depois de realizar o cadastro pode ir na rota acima e fazer upload da sua foto de perfil.

---

## Licença

Este projeto é licenciado sob a [Licença MIT](LICENSE).

---

Obrigado por explorar este projeto! Espero que você goste de utilizá-lo tanto quanto eu gostei de desenvolvê-lo! 🚀
