// Controla los componentes iniciales y/o globales de la app

$(document).ready(async function () {
    const data = await fetch('https://www.datos.gov.co/api/id/xdk5-pm3f.json?$query=select%20*%2C%20%3Aid')
    const dataToSelect = await data.json()

    const select = $('select[name="cmbLocation"]')
    dataToSelect.forEach((element, index) => {
        const option = document.createElement('option')
        option.value = index
        option.text = element.municipio
        select.append(option)
    })

    select.selectize({
        create: false,
        sortField: {
            field: 'text',
            direction: 'asc'
        }
    })
})

$(document).on("click", "[alt='Tarjeta1']", function () {
    $(this).attr("src", "assets/images/tarjeta1x2.png")
})
