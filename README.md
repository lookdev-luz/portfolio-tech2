# Digital Horizon

Template de portfólio em português para uma pessoa desenvolvedora em início de carreira, preparado para hospedagem PHP convencional. Todo conteúdo pessoal demonstrativo está claramente sinalizado e os contatos começam vazios.

## Tecnologias

PHP puro, HTML5 semântico, CSS3, JavaScript Vanilla, SVG e Canvas. Não há dependências de instalação nem banco de dados. O JavaScript amplia a experiência, enquanto o conteúdo essencial é renderizado no HTML pelo PHP.

## Arquivos

- `index.php`: montagem das seções, SEO e dados estruturados.
- `config/portfolio.php`: conteúdo personalizável.
- `includes/helpers.php`: escape HTML e validação de URLs.
- `assets/css/main.css`: identidade visual, componentes e responsividade.
- `assets/js/main.js`: navegação, ecossistema, filtros, modal, simulador e partículas.
- `assets/icons/favicon.svg`: favicon próprio.

## Executar localmente

Com PHP instalado, execute `php -S 127.0.0.1:8000` na pasta do projeto e abra `http://127.0.0.1:8000`. Não é necessário Composer, Node ou compilação.

## Personalização

Edite `config/portfolio.php` para nome, cargo, biografia, localização, disponibilidade, tecnologias, serviços, projetos, processo e opções do simulador. Valores de contato vazios ocultam seus links. Preencha somente endereços próprios. Mantenha `demonstration` como `true` e `seo.indexable` como `false` até trocar os dados e revisar o conteúdo.

Para alterar cores, edite as variáveis `:root` no começo de `assets/css/main.css`. Adicione tecnologia seguindo os campos dos exemplos em `technologies`. Cada projeto usa categoria, descrição, problema, tecnologias, imagem e links. URLs de demonstração devem ser HTTPS ou HTTP. Serviços podem ser ocultados com `enabled => false`.

O simulador lê `builder.types`, `builder.features`, `builder.goals` e `builder.timing`. Os dados só são enviados quando o visitante escolhe WhatsApp ou e-mail, e nada é armazenado pelo site.

## Publicar no HestiaCP

Crie um domínio no HestiaCP com PHP habilitado e envie os arquivos para a raiz pública do domínio, normalmente `public_html`. Confira que `index.php` esteja nessa raiz e que o PHP esteja habilitado na versão suportada pela conta. Não é necessário configurar banco de dados.

Habilite SSL/TLS no painel HestiaCP para o domínio e redirecione HTTP para HTTPS nas opções do domínio. Depois de validar contatos e substituir os exemplos, ajuste `demonstration` para `false`, informe `seo.indexable` como `true` e configure `seo.canonical` com a URL HTTPS definitiva. A diretiva `noindex` é removida automaticamente nessas condições. O `robots.txt` não bloqueia rastreamento.
