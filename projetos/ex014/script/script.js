carregar()
   function carregar() {
        var msg = window.document.getElementById('msg');
        var image = window.document.getElementById('img');

        var data = new Date()
        var hora = data.getHours()
        var minuto = data.getMinutes()

        if (minuto < 10) {
            minuto = '0' + minuto
        }

        msg.innerHTML = `Agora são ${hora}:${minuto} horas`

        if (hora >= 12 && hora < 18) {
            // tarde
            image.src = "./img/tarde.png"
            document.body.style.background = '#fe5b00'
        } else if ((hora >= 18 && hora <= 23) || (hora < 6)) {
            // noite
            image.src = "./img/noite.png"
            document.body.style.background = '#a7749a'
        } else {
            //manha
            document.body.style.background = '#4d6322'
        }
    }
