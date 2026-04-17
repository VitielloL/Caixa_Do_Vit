# caixa-do-vit
Sistema de gestão de caixa e vendas em Laravel com controle de transações, PIX e painel básico.

## Visão geral
`caixa-do-vit` é um sistema de caixa desenvolvido em PHP e Laravel, pensado para gerenciar vendas, movimentos de caixa e pagamentos via PIX. A aplicação inclui autenticação, cadastro de transações de caixa e PIX, além de uma interface enxuta para controle operacional.

## Funcionalidades principais
* Autenticação de usuário
* Registro e consulta de entradas e saídas de caixa
* Registro de pagamentos via PIX
* Estrutura MVC com controllers e modelos dedicados
* Front-end com Bootstrap e Vite

## Tecnologias usadas
* PHP 8.1
* Laravel 10
* Node.js 18
* Vite
* Bootstrap

## Estrutura do projeto
* `app/Http/Controllers` - controladores do sistema
* `app/Models` - modelos `User`, `Cash` e `Pix`
* `routes/web.php` - rotas da aplicação
* `resources/views` - templates para login, caixa e PIX
* `database/migrations` - tabelas de usuários, caixa e PIX

## Instalação
1. Clone o repositório
2. Copie `.env.example` para `.env`
3. Execute `composer install`
4. Execute `npm install`
5. Gere a chave do aplicativo com `php artisan key:generate`
6. Configure o banco de dados em `.env`
7. Rode migrações e seeders com:
   * `php artisan migrate`
   * `php artisan db:seed`
8. Inicie o servidor de desenvolvimento Laravel:
   * `php artisan serve`
9. Inicie o Vite:
   * `npm run dev`

## Uso
Acesse a aplicação no navegador pelo endereço mostrado no terminal (`http://127.0.0.1:8000` por padrão) e faça login para acessar o módulo de caixa e PIX.

## Observações
Este projeto serve como base para um sistema de gestão de caixa e pode ser ampliado com relatórios financeiros, controle de estoque, permissões de usuário e integração com outras formas de pagamento.
