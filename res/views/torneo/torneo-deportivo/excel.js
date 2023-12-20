/*
Documentacion:
    Lectura de archivo
        https://developer.mozilla.org/en-US/docs/Web/API/FileReader
        https://developer.mozilla.org/en-US/docs/Web/API/FileReader/readAsArrayBuffer
        https://developer.mozilla.org/en-US/docs/Web/API/FileReader/error_event
        https://developer.mozilla.org/en-US/docs/Web/API/FileReader/load_event
        https://developer.mozilla.org/en_US/docs/Web/API/FileReader/result
    
    Funcion asincrona
        https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/async_function
    
    Target
        https://developer.mozilla.org/en-US/docs/Web/API/EventTarget
        https://developer.mozilla.org/en-US/docs/Web/API/EventTarget#constructor
    
    Promesas
        https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/Promise


    XSLX
        https://docs.sheetjs.com/docs/
        https://docs.sheetjs.com/docs/solutions/processing
        https://docs.sheetjs.com/docs/solutions/input
        
En gran parte de la documentacion utiliza el operador =>
Para evitar el uso de dicho operador usamos funciones anonimas
*/


// Por definicion todas las funciones son procedimientos ya que no devuelven informacion
// Excepto leerExcel, que devuelve la promesa

window.addEventListener('DOMContentLoaded', manejoArchivo);

// Función asíncrona para manejar el archivo
async function manejoArchivo() {
    const inputFile = './Libro1.xlsx';
    try {
        let datos = await leerExcel(inputFile);
        console.log('Datos del archivo Excel:', datos);
        crearTabla(datos);
    } catch (error) {
        console.error('Error al leer el archivo Excel:', error);
    }
}

// Función para leer el archivo Excel
function leerExcel(archivo) {
    return new Promise(async function (resolver, rechazar) {
        try {
            let respuesta = await fetch(archivo);
            let arrayBuffer = await respuesta.arrayBuffer();
            let libro = XLSX.read(arrayBuffer, { type: 'array' });
            let nombreHoja = libro.SheetNames[0];
            let hoja = libro.Sheets[nombreHoja];
            let datos = XLSX.utils.sheet_to_json(hoja, { header: 1 });
            resolver(datos);
        } catch (error) {
            rechazar(error);
        }
    });
}

// Resto del código (crearTabla) permanece igual


// Función para crear la tabla HTML
function crearTabla(data) {
    // Obtener el contenedor de la tabla
    let tableContainer = document.getElementById('table-container');

    // Constantes para crear elementos de tabla
    const table = document.createElement('table');
    const thead = document.createElement('thead');
    const tbody = document.createElement('tbody');

    // Asumir que la primera fila contiene encabezados
    let headers = data[0];

    // Crear encabezados de tabla
    let headerRow = document.createElement('tr');
    headers.forEach(function (header) {
        const th = document.createElement('th');
        th.textContent = header;
        headerRow.appendChild(th);
    });
    thead.appendChild(headerRow);
    table.appendChild(thead);

    // Crear filas de datos
    for (let i = 1; i < data.length; i++) {
        let rowData = data[i];
        const row = document.createElement('tr');

        // Crear celdas para cada fila
        rowData.forEach(function (cell) {
            const td = document.createElement('td');
            td.textContent = cell;
            row.appendChild(td);
        });

        tbody.appendChild(row);
    }

    table.appendChild(tbody);

    //  Limpiar el contenedor previo y agregar la nueva tabla
    tableContainer.innerHTML = ''; //opcional, de momento
    tableContainer.appendChild(table);
}
