
  function calcular() {
        // info
        var data = new Date()
        var anoatual = data.getFullYear()
        var mesatual = data.getUTCMonth() + 1
        var diaatual = data.getDate()

        // calculo idade
        var nascimentostring = document.getElementById('nascimento').value
        var arraynascimento = nascimentostring.split('-')
        var anonascimneto = arraynascimento[0]
        var mesnascimneto = arraynascimento[1]
        var dianascimneto = arraynascimento[2]
        
        var idade = anoatual - anonascimneto
        
        if ((mesatual < mesnascimneto) || ( mesatual == mesnascimneto  && diaatual < dianascimneto)) {
            idade--
        }

        // verficação
        if (anonascimneto.lenght == 0 || anonascimneto > anoatual || idade > 120)  {
            window.alert('Vefique os dados e tente novamente!')
        } else {
            // sexo
            var sexo = document.getElementsByName('sexo')
            if (sexo[0].checked) {
                sexo = "Masculino"
            } else if (sexo[1].checked) {
                sexo = "Feminino"
            }

            
            // imagem
            var img = document.createElement('img')
            img.setAttribute('id', 'foto')
            
            if (sexo == "Masculino") {
                if (idade < 16) {
                    img.setAttribute('src', './img/crianca-m.png')  
                } else if (idade < 25) {
                    img.setAttribute('src', './img/adolescente-m.png')  
                } else if (idade < 60) {
                    img.setAttribute('src', './img/adulto-m.png')  
                } else (
                    img.setAttribute('src', './img/idoso-m.png')  
                )
            } else {
                if (idade < 16) {
                    img.setAttribute('src', './img/crianca-f.png')  
                } else if (idade < 25) {
                    img.setAttribute('src', './img/adolescente-f.png')  
                } else if (idade < 60) {
                    img.setAttribute('src', './img/adulto-f.png')  
                } else (
                    img.setAttribute('src', './img/idoso-f.png')  
                )
            }
            
            // mensagem
            var msg = document.querySelector('div#msg')
            msg.style.textAlign = 'center'
            msg.innerHTML = `Detectamos ${sexo} com ${idade} anos.`
            
            var divimg = document.querySelector('div#img')
            divimg.style.textAlign = 'center'
            divimg.appendChild(img)
        }
    }  