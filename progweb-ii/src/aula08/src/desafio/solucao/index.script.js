function toggleSenha() {
    const input = document.getElementById("senha");
    const btn = document.getElementById("toggleSenhaBtn");
    input.type = input.type === "password" ? "text" : "password";
    btn.textContent = input.type === "password" ? "Ver Senha" : "Esconder Senha";
}

function cadastrar() {
    const form = document.getElementById("formulario");
    const senhaUm = document.getElementById("senha");
    const senhaDois = document.getElementById("confSenha");
    if (senhaUm.value != senhaDois.value) {
        window.alert("As senhas são diferentes!");
        return;
    }
    form.submit();
}