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

## Auditoria técnica

Esta auditoria cobre inspeção estática dos arquivos e verificações executadas no ambiente de desenvolvimento. As notas são avaliações de implementação, não certificação WCAG ou resultados de laboratório.

| Critério | Nota | Evidência / método |
| --- | ---: | --- |
| Arquitetura e organização | 7 | Configuração, helpers, entrada, estilos e script separados. |
| Qualidade PHP | 5 | Código inspecionado. `php -l` e execução indisponíveis porque o interpretador não está instalado. |
| Qualidade HTML | 7 | Entrada usa landmarks, idioma, headings e controles semânticos. Renderização não verificada. |
| Qualidade CSS | 7 | Tokens e breakpoints implementados, sem teste visual automatizado. |
| Qualidade JavaScript | 6 | `node --check` executado. Interações em navegador não executadas nesta auditoria. |
| Design e identidade | 7 | Revisão visual por código, sem captura de tela nesta execução. |
| Responsividade | 6 | Breakpoints declarados, sem validação em viewport real. |
| Acessibilidade | 6 | Foco visível, labels semânticos, `aria-live`, Escape e movimento reduzido. Contraste e leitor de tela sem teste. |
| Performance | 6 | Canvas limitado a DPR 1.5, com suspensão por visibilidade da página e interseção. Sem Lighthouse. |
| Segurança | 7 | Dados PHP escapados em HTML, JSON com flags HEX e URLs externas limitadas a HTTP(S). |
| SEO | 6 | Título, descrição, Open Graph, JSON-LD e `noindex` demonstrativo presentes. Canonical ainda não renderizado. |
| Conversão comercial | 6 | Contatos diretos e briefing guiado. Os canais permanecem ocultos até configuração. |
| Manutenção | 5 | Separação funcional existe, mas alguns arquivos permanecem compactos. |
| Personalização | 7 | Conteúdo principal concentrado em `config/portfolio.php`. |
| Animações | 6 | IntersectionObserver e `prefers-reduced-motion` tratados. Teste perceptual não realizado. |
| Horizon Core | 6 | Composição CSS com cursor limitado a dispositivos de ponteiro fino, sem medição de consumo. |
| Ecossistema tecnológico | 6 | Botões orbitais com acesso por teclado nativo e alternativa textual. Teste de uso pendente. |
| Simulador | 6 | Estado no navegador, validação básica e saída explícita por canais. Teste interativo pendente. |
| Compatibilidade entre navegadores | 4 | Recursos modernos incluem `<dialog>`, `:has` e `IntersectionObserver`. Sem matriz real de navegadores. |
| Compatibilidade HestiaCP | 5 | Estrutura convencional PHP, sem validação na versão PHP do servidor. |

### Correções desta auditoria

- O conteúdo não depende mais do `IntersectionObserver` para permanecer visível quando JavaScript está desativado.
- A animação de partículas pausa quando a aba fica oculta ou o canvas sai da área visível, e limita a escala interna do Canvas.
- Corrigidos seletores usados pelo ecossistema, filtros, serviços e animações para corresponder à marcação.
- O menu mobile pode ser fechado com Escape e recupera o foco no botão.
- O simulador anuncia sua etapa e o progresso em controles acessíveis por leitor de tela.
- A configuração demonstrativa permanece em `noindex`.

### Verificações e limitações

Executados: `node --check assets/js/main.js` e `git diff --check`.

Não executados: `php -l`, servidor PHP, testes interativos completos, navegador nos viewports solicitados, zoom 200%, avaliação WCAG com ferramentas, Lighthouse e matriz entre navegadores. PHP não está instalado no ambiente. Portanto, as notas de PHP, renderização, compatibilidade e experiência visual são provisórias e não alcançam a meta 9/10 sem esses testes.
