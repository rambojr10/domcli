    // Controla los componentes iniciales y/o globales de la app
    
    $(document).ready(async function() {
        const locations = [];
        const data = await fetch('https://www.datos.gov.co/api/id/xdk5-pm3f.json?$query=select%20*%2C%20%3Aid');
        const dataToSelect = await data.json();
        dataToSelect.forEach((element, index) => {
            locations.push({
                id: index,
                text: element.municipio
            });
        });
        $('.js-example-basic-single').select2({
            data: locations
        });
        console.table(locations);
    });

    $(document).on("click", "[alt='Tarjeta1']", function () {
        $(this).attr("src", "assets/images/tarjeta1x2.png")
    });
