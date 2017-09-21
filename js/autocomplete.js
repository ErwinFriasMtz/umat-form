$(document).ready(function() {
    $('select').material_select();
    // Inicializa el autocompletado del input
    $('input.autocomplete').autocomplete({data: {
        "Ciencias de la Comunicación": null,
        "Criminalística": null,
        "Criminología": null,
        "Derecho": null,
        "Desarrollo Organizacional": null,
        "Educación Especial": null,
        "Estomatología": null,
        "Gastronomía": null,
        "Innovación y Gestión Empresarial": null,
        "Ing. en Mecánica y Electrónica Automotriz": null,
        "Psicología Organizacional": null
      },
      limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    });
});
