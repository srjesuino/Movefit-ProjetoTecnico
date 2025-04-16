# MoveFit - Projeto Full Stack Jr

Este projeto foi desenvolvido como parte de um desafio técnico para uma vaga de Desenvolvedor Full Stack Jr 2. Ele simula um site institucional com uma landing page responsiva e um painel administrativo para cadastro e gestão de depoimentos de clientes.

---

## 📂 Estrutura do Projeto

```
movefit/
├── admin/                # Painel administrativo
│   ├── excluir.php       # Excluir depoimento
│   ├── index.php         # Interface do painel admin
│   └── inserir.php       # Inserir/editar depoimentos (via AJAX)
├── assets/               # Arquivos estáticos
│   ├── css/              # Estilos (landing page e admin)
│   ├── js/               # Scripts (landing page e admin)
│   ├── img/              # Imagens usadas na landing page
│   └── icons/            # Ícones decorativos
├── inc/                  # Scripts auxiliares
│   ├── conn.php          # Conexão com banco de dados
│   └── depoimentos.php   # Consulta de depoimentos (JSON)
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
- **Outros:** AJAX para inserção dinâmica de depoimentos

---

## 🔧 Como Executar o Projeto

1. **Clone ou extraia o repositório** no diretório `htdocs` do seu XAMPP:

```bash
movefit/
```

2. **Importe o banco de dados**

Crie o banco com o nome `movefit` no phpMyAdmin e execute o script abaixo:

```sql
CREATE TABLE depoimentos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    comentario TEXT NOT NULL,
    nota INT NOT NULL
);
```

3. **Configure o XAMPP e acesse no navegador:**

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
- Listagem de depoimentos em tempo real
- Ações de **editar** e **excluir**
- Interface leve e funcional

---

## ✅ Diferenciais

- Uso de AJAX para envio de formulário sem recarregar a página
- Modularização dos arquivos PHP simulando componentização
- Separacão clara entre lógica, estilo e conteúdo

---

## ✨ Melhorias Futuras

- Tela de login protegendo o painel administrativo
- Validação mais robusta dos formulários
- Feedback visual com toasts (ex: Bootstrap ou bibliotecas JS)
- Paginação dos depoimentos

---

## ✉ Contato

Para mais informações sobre o projeto ou sobre mim:

- **Nome:** [Seu Nome Aqui]
- **Email:** [seu.email@exemplo.com]
- **LinkedIn:** [linkedin.com/in/seu-perfil](https://linkedin.com/in/seu-perfil)

---

Agradeço a oportunidade e me coloco à disposição para conversar mais sobre o projeto!

