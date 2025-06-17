# PortfolioPro

PortfolioPro é uma aplicação multi-tenant desenvolvida em Laravel, que permite a profissionais criarem portfólios personalizados com domínio próprio, de forma simples e rápida.

## Funcionalidades

- Cadastro de usuários com domínio personalizado
- Criação automática de tenant e banco de dados isolado
- Autenticação e gerenciamento de sessão
- Sistema de portfólios para múltiplos clientes

## Tecnologias Utilizadas

- PHP 8+
- Laravel 10+
- [stancl/tenancy](https://github.com/stancl/tenancy) para multi-tenancy
- Vite
- PostgreSQL

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/portfoliopro.git
   cd portfoliopro
   ```
2. Instale as dependências:
   ```bash
   composer install
   npm install && npm run build
   ```
3. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Configure o banco de dados central e as credenciais no `.env`.
5. Execute as migrations e popule o banco com seeders:
   ```bash
   php artisan migrate:fresh --seed
   ```
6. (Opcional) Configure hosts locais para domínios de tenants.

## Como funciona o multi-tenancy?

- Ao registrar um novo usuário, um tenant é criado automaticamente com domínio próprio.
- O banco de dados do tenant é criado e as migrations são executadas automaticamente.
- Cada tenant possui dados isolados dos demais.

## Baixando imagens de exemplo para projetos

Para popular a pasta de projetos com imagens de exemplo, execute o script abaixo:

```bash
chmod +x baixar_imagens_projetos.sh
./baixar_imagens_projetos.sh
```

As imagens serão salvas em `storage/app/public/projetos`.

## Estrutura de Pastas

- `app/Http/Controllers/Auth/RegisteredUserController.php`: Lógica de registro e criação de tenant
- `routes/web.php`: Rotas principais
- `resources/views/auth/register.blade.php`: Tela de cadastro
- `config/tenancy.php`: Configurações do multi-tenancy
- `baixar_imagens_projetos.sh`: Script para baixar imagens de exemplo

## Contribuição

Pull requests são bem-vindos! Para grandes mudanças, abra uma issue primeiro para discutir o que você gostaria de mudar.

## Licença

[MIT](LICENSE)
