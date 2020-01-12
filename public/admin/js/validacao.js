function validar() {
    var usuario_nome = document.vform.nome;
    var usuario_apelido = document.vform.apelido;
    var usuario_email = document.vform.email;
    var usuario_senha = document.vform.senha;
    var usuario_trabalho = document.vform.trabalho;
    var usuario_cidade = document.vform.cidade;
    var usuario_celular = document.vform.celular;

    /*ERRO
    var nome_erro = document.getElementById('nome_erro');
    var apelido_erro = document.getElementById('apelido_erro');
    var email_erro = document.getElementById('email_erro');
    var senha_erro = document.getElementById('senha_erro');
    var trabalho_erro = document.getElementById('trabalho_erro');
    var cidade_erro = document.getElementById('cidade_erro');
    var celular_erro = document.getElementById('celular_erro');*/

    //validacao nome
    if(usuario_nome_validar(usuario_nome)) {
        //validacao apelido
        if (usuario_apelido_validar(usuario_apelido)){
            //validacao email
            if(usuario_email_validar(usuario_email)) {
                //validacao password
                if(usuario_senha_validar(usuario_senha,7,12)) {
                    //validacao empresa
                    if(usuario_trabalho_validar(usuario_trabalho)) {
                        //validacao cidade
                        if(usuario_cidade_validar(usuario_cidade)) {
                            //validacao celular
                            if(usuario_celular_validar(usuario_celular)) {

                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

function usuario_nome_validar(usuario_nome) {
    var letra_nome = /^[A-Za-z]+$/;
    if(usuario_nome.value.match(letra_nome)) {
        return true;
    }
    else {
        alert('O seu nome nao pode estar vazio / deve conter somente letras');
        usuario_nome.focus();
        return false;
    }
}

function usuario_apelido_validar(usuario_apelido) {
    var letra_apelido = /^[A-Za-z]+$/;
    if (usuario_apelido.value.match(letra_apelido)){
        return true;
    }
    else {
        alert("O seu apelido nao pode estar vazio / deve conter somente letras")
        usuario_apelido.focus();
        return false;
    }
}
function usuario_email_validar(usuario_email)
{
    var email_formato = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(usuario_email.value.match(email_formato)) {
        return true;
    }
    else {
        alert("O endereco de email nao pode estar vazio / voce introduziu um endereco de email invalido!");
        return false;
    }
}

function usuario_senha_validar(usuario_senha,mx,my) {
    var usuario_senha_tamanho = usuario_senha.value.length;
    if (usuario_senha_tamanho == 0 ||usuario_senha_tamanho >= my || usuario_senha_tamanho < mx) {
        alert("Senha nao pode estar vazio / Tamanho deve ter "+mx+" ha "+my);
        usuario_senha.focus();
        return false;
    }
    return true;
}

function usuario_trabalho_validar(usuario_tabalho) {
    var letra_tabalho = /^[A-Za-z]+$/;
    if(usuario_tabalho.value.match(letra_tabalho)) {
        return true;
    }
    else {
        alert('O seu local de trabalho nao pode estar vazio / deve conter somente letras');
        usuario_tabalho.focus();
        return false;
    }
}
function usuario_cidade_validar(usuario_cidade) {
    if(usuario_cidade.value == "Default") {
        alert("Seleciona a sua cidade na lista");
        usuario_cidade.focus();
        return false;
    }
    else {
        return true;
    }
}

function usuario_celular_validar(usuario_celular) {
    var numeros = /^[0-9]+$/;
    if(usuario_celular.value.match(numeros)) {
        window.location();
        return true;
    }
    else {
        alert('O numero de celular nao pode estar vazio / tem que ter somente caracteres numericos');
        usuario_celular.focus();
        return false;

    }
}

