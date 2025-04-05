var title_tab = document.querySelector('h2#title_tab')
title_tab.style.display = 'none'

var tab = document.querySelector('select#tab')
tab.style.display = 'none'

    function calcular() {
        
        let num = document.querySelector('input#num').value
        let limit = document.querySelector('input#limit').value
        

         if (num === '' || limit === '' || limit == 0) {
             title_tab.innerHTML = `Impossível calcular.`
             title_tab.style.display = 'block'
            tab.style.display = 'none'
         }  else if (num == 0) {
            title_tab.innerHTML = `O resultado de toda tabuada de 0 é 0`
            title_tab.style.display = 'block'
            tab.style.display = 'none'
         } else {
            title_tab.style.display = 'block'
            tab.style.display = 'block'
            title_tab.innerText = `Tabuada de ${num}: `

            for (let i = 1; i <= limit; i++) {
                // Cria o elemento option
                let item = document.createElement('option')

                let result = num * i
                item.text = `${num} x ${i} = ${result}`
                tab.appendChild(item)
            }
         }
    } 