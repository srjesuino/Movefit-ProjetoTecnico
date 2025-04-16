//admin.js
// Este arquivo contém o código JavaScript para a página de administração de depoimentos
// O código é responsável por adicionar eventos de clique aos botões de editar e salvar depoimentos
// e por enviar os dados atualizados para o servidor via AJAX.
// O código é executado quando o DOM está completamente carregado

document.addEventListener("DOMContentLoaded", () => {
    // Adiciona um evento de clique a todos os botões com a classe "editar"
    document.querySelectorAll(".editar").forEach(btn => {
        btn.addEventListener("click", editarDepoimento);
    });
});

function editarDepoimento(event) {
    // Obtém o ID do depoimento a partir do atributo "data-id" do botão clicado
    id = event.currentTarget.getAttribute("data-id");

    // Obtém os elementos do DOM relacionados ao depoimento
    nome = document.getElementById("nome-" + id);
    comentario = document.getElementById("comentario-" + id);
    nota = document.getElementById("nota-" + id);
    btns = document.getElementById("actions-" + id);

    nomeAtual = nome.textContent;
    comentarioAtual = comentario.textContent;
    notaAtual = nota.textContent;

    // Limpa o conteúdo dos elementos para substituí-los por inputs
    [nome, comentario, nota, btns].forEach(el => el.textContent = "");

    // Substitui o conteúdo do nome por um campo de input
    nome.innerHTML = `<input type="text" style= "width: 100%" id="nome-input-${id}" value="${nomeAtual}">`;

    // Substitui o conteúdo do comentário por um campo de input
    comentario.innerHTML = `<input type="text" style= "width: 100%" id="comentario-input-${id}" value="${comentarioAtual}"></textarea>`;

    // Substitui o conteúdo da nota por um campo de seleção
    nota.innerHTML = `
    <select id="nota-input-${id}">
      ${[1, 2, 3, 4, 5].map(n => `
        <option value="${n}" ${n == notaAtual ? 'selected' : ''}>${n}</option>
      `).join('')}
    </select>`;

    // Substitui os botões de ação por um botão de salvar
    btns.innerHTML = `<button class="btn btn-primary" id="salvar-${id}">Salvar</button>`;

    // Adiciona um evento de clique ao botão de salvar
    document.getElementById("salvar-" + id).addEventListener("click", () => salvarDepoimento(id));
}

function salvarDepoimento(id) {
    // Obtém os valores dos inputs preenchidos pelo usuário
    const nome = document.getElementById("nome-input-" + id).value;
    const comentario = document.getElementById("comentario-input-" + id).value;
    const nota = document.getElementById("nota-input-" + id).value;

    // Cria um objeto FormData para enviar os dados via requisição
    const formData = new FormData();
    formData.append("id", id);
    formData.append("nome", nome);
    formData.append("comentario", comentario);
    formData.append("nota", nota);

    // Envia os dados para o servidor usando fetch
    fetch("../admin/inserir.php", {
        method: "POST",
        body: formData,
        headers: {
            "X-Requested-With": "XMLHttpRequest" // Indica que é uma requisição AJAX
        }
    })
        .then(response => response.json()) // Converte a resposta para JSON
        .then(data => {
            if (data.status) {
                // Recarrega a página
                window.location.reload();
            } else {
                // Exibe uma mensagem de erro no console caso a atualização falhe para depuração
                console.error("Erro ao atualizar depoimento:", data.error);
            }
        })
        .catch(error => {
            // Exibe uma mensagem de erro caso a requisição falhe
            console.error("Erro na requisição:", error);
        });
}
