# MoveFit - Projeto Full Stack Jr

Este projeto foi desenvolvido como parte de um desafio técnico para uma vaga de Desenvolvedor Full Stack Jr 2. Ele simula um site institucional com uma landing page responsiva e um painel administrativo para cadastro e gestão de depoimentos de clientes.

---

## 📂 Estrutura do Projeto

```
movefit/
├── admin/                # Painel administrativo
│   ├── excluir.php       # Excluir depoimento
│   ├── index.php         # Interface do painel admin
│   └── inserir.php       # Inserir/editar depoimentos 
├── assets/               # Arquivos estáticos
│   ├── css/              # Estilos (landing page e admin)
│   ├── js/               # Scripts (landing page e admin)
│   ├── img/              # Imagens usadas na landing page
│   └── icons/            # Ícones decorativos
├── inc/                  # Scripts auxiliares
│   ├── conn.php          # Conexão com banco de dados
│   └── depoimentos.php   # Consulta de depoimentos
└── public/               # Landing Page principal
    ├── index.php         # Página inicial montada por includes
    └── inc/
        ├── header.php    # Bloco: cabeçalho
        ├── main.php      # Bloco: conteúdo principal
        └── footer.php    # Bloco: rodapé
```

---

## 🌐 Tecnologias Utilizadas

- **Back-end:** PHP (sem frameworks)
- **Front-end:** HTML, CSS, JavaScript puro
- **Banco de dados:** MySQL (via XAMPP)

---

## 🔧 Como Executar o Projeto

1. **Clone ou extraia o repositório** no diretório `htdocs` do seu XAMPP:

```bash
movefit/
```

2. **Importe o banco de dados**

Crie o banco com o nome `movefit` no phpMyAdmin e execute a importação do arquivo movefit.sql que esta no repositorio:


3. **No arquivo. inc/conn.php**

Você pode editar a constante "senha" conforme seu ambiente, ou deixar o padrão caso seja o ambiente xammp virgem, para a conexão correta ao banco de dados.


4. **Configure o XAMPP e acesse no navegador:**

```
http://localhost/movefit/public/index.php       # Landing Page
http://localhost/movefit/admin/index.php        # Painel Administrativo
```

---

## 📄 Funcionalidades

### Landing Page
- Responsiva
- Dividida em componentes (header, main, footer)
- Design simples e coerente

### Painel Administrativo
- Formulário para cadastro de depoimentos
- Listagem de depoimentos
- Ações de **editar** e **excluir**
- Interface leve e funcional

---

## ✅ Diferenciais

- Modularização dos arquivos PHP simulando componentização
- Uso de varias formas de CRUD no projeto
- Separacão clara entre lógica, estilo e conteúdo

---

Qualquer duvida entrar em contato:
email:  jesuinodeoliveira97@gmail.com

