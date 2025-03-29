class Botao {

    constructor(elemento) {
        this.elemento = elemento;
    }

    Aparecer() {
        this.elemento.setAttribute('disabled', false)
    }
    Desaparecer() {
        this.elemento.setAttribute('disabled', true)
    }
}

    let submit = new Botao(document.getElementById('submit'))
    
class Cadastro {

    AtualizaDados() {
        this.nome = document.querySelector('#usuario').value
        this.aniversario = document.querySelector('#nascimento').value
        this.email = document.querySelector('#email').value
        this.senha1 = document.querySelector('#senha').value
        this.senha2 = document.querySelector('#confirmaSenha').value
        this.ConferirRequisitos();
    }

    ConferirRequisitos() {
        if ((this.ConfereData()) && (this.ConfereSenha())) {
            submit.Aparecer();
        } else {
            submit.Desaparecer();
        }
    }

    ConfereData() {
        let idade = this.CalcularIdade().anos;

        if ((idade <= 13) || (idade > 100)) {
            return false;
        } else {
            return true;
        }
        
    }

    CalcularIdade() {
        let dataArray = this.aniversario.split('-');
        let ano = parseInt(dataArray[0]);
        let mes = parseInt(dataArray[1]);
        let dia = parseInt(dataArray[2]);

        let hoje = new Date();
        let anoAtual = hoje.getFullYear();
        let mesAtual = hoje.getMonth() + 1;
        let diaAtual = hoje.getDate();

        let anos = anoAtual - ano;
        let meses = mesAtual - mes;

        if (meses < 0 || (meses === 0 && diaAtual < dia)) {
            anos--;
            meses += 12;
        }

        if (diaAtual < dia) {
            meses--;
        }

        return { anos, meses };
    }

    ConfereSenha() {
        if (this.senha1 != '' && this.senha2 != '') {
            if (this.senha1 == this.senha2) {
                return true
            } else {
                return false
            }
        } else {
            return false
        }
    }
}

    let formDeCadastro = new Cadastro();
