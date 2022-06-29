function ConsumAPI(){
    let nombre = [];
    let patrimonio = [];
    let IngrOpera = [];

    let url = "http://demo4776065.mockable.io/";
    fetch(url)
    .then(data_obtanined => data_obtanined.json())
    .then(function (data_obtanined){
        data_obtanined.forEach(function agregar(data_obtanined) {

            nombre.push(data_obtanined.RAZON_SOCIAL);
            patrimonio.push(data_obtanined.PATRIMONIO);
            IngrOpera.push(data_obtanined.ING_OPERACIONES);
            
        });
        var trace = {
            type: "pie",
            values: patrimonio,
            labels: nombre,
            hoverinfo: 'label',
            textinfo: 'none',
            name: 'Patrimonio de las empresas de moda en manizales',
            textposition: 'top center',
            title: "Patrimonio de las empresas de moda en Manizales",
            legend: {
                y: 0.5,
                yref: 'paper',
                font: {
                    family: 'Arial, sans-serif',
                    size: 20,
                    color: 'grey',
                }
            },
            textfont: {
                family: 'Raleway, sans-serif'
            },
            marker: { size: 12 }
          };
        var data = [trace];
        Plotly.newPlot('grafo', data);

    });  
}

function ConsumAPI2(){
    let nombre = [];
    let IngrOpera = [];

    let url = "http://demo4776065.mockable.io/";
    fetch(url)
    .then(data_obtanined => data_obtanined.json())
    .then(function (data_obtanined){
        data_obtanined.forEach(function agregar(data_obtanined) {

            nombre.push(data_obtanined.RAZON_SOCIAL);
            IngrOpera.push(data_obtanined.ING_OPERACIONES);
            
        });
        var trace = {
            type: "pie",
            values: IngrOpera,
            labels: nombre,
            hoverinfo: 'label',
            textinfo: 'none',
            name: 'Patrimonio de las empresas de moda en manizales',
            textposition: 'top center',
            title: "Ingresos Operacionales de las empresas de moda en Manizales",
            legend: {
                y: 0.5,
                yref: 'paper',
                font: {
                    family: 'Arial, sans-serif',
                    size: 20,
                    color: 'grey',
                }
            },
            textfont: {
                family: 'Raleway, sans-serif'
            },
            marker: { size: 12 }
          };
        var data = [trace];
        Plotly.newPlot('grafo2', data);

    });  
}