# ANACROW - PROJETO FINAL - OPEN SOURCE

Inicialmente neste README irá conter um guia sobre o funcionamento dos diretórios.


## ☕ Versão do PHP
- PHP >= 7.4.12 

## ✅ CONECTANDO O BANCO DE DADOS 

- 1 ) Para encontrar o arquivo do banco de dados, vá até -> [ESTE DIRETÓRIO](/config/.sql).

- 2 ) Para definir a conexão do banco de dados, vá até  [BANCO DE DADOS](/config/.env).


## 🛍️ Bibliotecas/Frameworks Utilizados

Obs : para um sistema deste nível, optei por não utilizar Laravel, pelo motivo de "Utilizar uma serra elétrica pra cortar uma folha de papel", em outras palavras, 
a biblioteca do Laravel é muito ampla, e este sistema é bem pequeno, com isso, escolhi utilizar frameworks mais simples para produção do mesmo.

Frameworks Back-End escolhidos : 
```php
echo ("Slim Framework" . " & " . "Rain TPL");
```


## 📌 Diretórios Importantes

- [DIRETÓRIO DOS ARQUIVOS HTML](/public/frontend/views)
- [DIRETÓRIO DOS ARQUIVOS DE RECURSO (CSS/JS/IMGS)](/public/resources)

- [DIRETÓRIO DAS ROTAS DE ADMINISTRADOR](/routes/admin)
- [DIRETÓRIO DAS ROTAS DE USUÁRIO](/routes/dashboard)
- [DIRETÓRIO DAS ROTAS DA HOMEPAGE](/routes/home)

- [DIRETÓRIO DOS CONSTROLLERS](app/controllers)
- [DIRETÓRIO DAS INTERFACES](app/interfaces)
- [DIRETÓRIO DOS MODELS](app/middleware)
- [DIRETÓRIO DAS CLASSES MIDDLEWARE](app/middleware)
- [DIRETÓRIO DO  BANCO DE DADOS](app/database)

- [DIRETÓRIO DAS FUNÇÕES GLOBAIS](/functions)
- [DIRETÓRIO DOS IMPORTS DO COMPOSER](/vendor)


## 🔏 Modificação no .HTACCES para forçar HTTPS 
- RewriteCond %{HTTPS} off 
- RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]


## 🚪 Aviso Final

QUALQUER DÚVIDA ENTRAR EM CONTATO!

- VITOR HUGO BRANDÃO SANTANA
- RIO DE JANEIRO - RJ
- PROGRAMADOR BACK-END - PLENO
- COLÉGIO PEDRO II 
- vto.hugo67@gmail.com

