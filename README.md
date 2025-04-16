
# MoveFit - Desafio Técnico Full Stack Jr 2

Projeto desenvolvido para o processo seletivo da vaga de Desenvolvedor Web Full Stack Jr 2. O sistema consiste em uma landing page institucional da empresa fictícia "MoveFit", com um painel administrativo para gerenciar depoimentos de usuários.

---

## 🚀 Tecnologias Utilizadas

- PHP (sem frameworks)
- HTML5 / CSS3
- JavaScript (puro)
- MySQL (via XAMPP)
- Bootstrap (somente para alguns componentes visuais)

---

## 📁 Estrutura de Pastas

```
/movefit
│
├── index.php                  # Página principal (Landing Page)
├── inc/
│   ├── conn.php               # Conexão com o banco de dados
│   ├── header.php             # Cabeçalho comum
│   ├── footer.php             # Rodapé comum
│   └── mensagens.php          # Mensagens de alerta (sessões)
├── blocos/                    # Blocos da landing page (modularizados)
│   ├── sobre.php
│   ├── beneficios.php
│   ├── planos.php
│   ├── depoimentos.php
│   └── contato.php
├── admin/
│   ├── index.php              # Painel administrativo
│   ├── inserir.php            # Inserção de novos depoimentos
│   ├── excluir.php            # Exclusão de depoimentos
│   └── editar.php             # Edição de depoimentos
├── assets/
│   ├── css/
│   │   └── style.css          # Estilo geral
│   │   └── admin.css          # Estilo do painel admin
│   └── js/
│       └── scripts.js         # JS principal
└── bd/
    └── movefit.sql            # Dump do banco de dados
```

---

## ⚙️ Como Rodar o Projeto

1. Clone ou extraia o repositório na pasta `htdocs` do seu XAMPP:
   ```
   C:\xampp\htdocs\movefit
   ```

2. Inicie o XAMPP e ative o **Apache** e o **MySQL**.

3. Acesse o **phpMyAdmin** (http://localhost/phpmyadmin) e:

   - Crie um banco de dados com o nome `movefit`
   - Importe o arquivo `bd/movefit.sql`

4. Acesse o sistema via navegador:
   ```
   http://localhost/movefit/index.php
   ```

5. Para o painel administrativo:
   ```
   http://localhost/movefit/admin/index.php
   ```

---

## 🔐 Acesso ao Painel Administrativo

Atualmente, **não há autenticação** implementada. Qualquer pessoa com o link pode acessar.  
Há planejamento para inclusão de login (como extra opcional).

---

## 📌 Funcionalidades Implementadas

### Landing Page:
- Layout institucional fictício
- Seções: Sobre, Benefícios, Planos, Depoimentos, Contato
- Exibição de depoimentos do banco em tempo real

### Painel Administrativo:
- Cadastro de novos depoimentos
- Listagem em tabela
- Edição e exclusão de depoimentos
- Alerta visual de sucesso ou falha nas ações

---

## 🧠 Considerações Técnicas

- O projeto é **inteiramente feito sem frameworks**, com o objetivo de demonstrar domínio de base.
- Utilizei `includes` para simular componentização da landing page (como o React).
- O painel administrativo funciona com requisições AJAX simples e sessões para mensagens.

---

## 💡 Extras planejados

- Tela de login protegendo o `/admin`
- Melhoria visual com Bootstrap Icons
- Animações leves com JavaScript

---

## 📞 Contato

Desenvolvido por [Seu Nome]  
[LinkedIn] | [GitHub] | [Email se quiser colocar]
