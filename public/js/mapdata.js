var simplemaps_countrymap_mapdata = {
    main_settings: {
        //General settings
        width: "responsive", //or 'responsive'
        background_color: "#FFFFFF",
        background_transparent: "yes",
        border_color: "#ffffff",

        //State defaults
        state_description: "Departamento",
        state_color: "#88A4BC",
        state_hover_color: "#3B729F",
        state_url: "",
        border_size: 1.5,
        all_states_inactive: "no",
        all_states_zoomable: "yes",

        //Location defaults
        location_description: "Location description",
        location_url: "",
        location_color: "#FF0067",
        location_opacity: 0.8,
        location_hover_opacity: 1,
        location_size: 25,
        location_type: "square",
        location_image_source: "frog.png",
        location_border_color: "#FFFFFF",
        location_border: 2,
        location_hover_border: 2.5,
        all_locations_inactive: "no",
        all_locations_hidden: "no",

        //Label defaults
        label_color: "#d5ddec",
        label_hover_color: "#d5ddec",
        label_size: "30",
        label_font: "Arial",
        hide_labels: "no",
        hide_eastern_labels: "no",

        //Zoom settings
        zoom: "yes",
        manual_zoom: "yes",
        back_image: "no",
        initial_back: "no",
        initial_zoom: "-1",
        initial_zoom_solo: "YES",
        region_opacity: 1,
        region_hover_opacity: 0.6,
        zoom_out_incrementally: "yes",
        zoom_percentage: 0.99,
        zoom_time: 0.5,

        //Popup settings
        popup_color: "white",
        popup_opacity: 0.9,
        popup_shadow: 1,
        popup_corners: 5,
        popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
        popup_nocss: "no",

        //Advanced settings
        div: "map",
        auto_load: "yes",
        url_new_tab: "no",
        images_directory: "default",
        fade_time: 0.1,
        link_text: "View Website",
        popups: "detect",
        location_image_url: ""
    },
    state_specific: {
        COL1283: {
            name: "Amazonas",
            description: "default",
            color: "default",
            hover_color: "default",
            url: "default",
            hide: "default",
            inactive: "default",
            zoomable: "default"
        },
        COL1314: {
            name: "Antioquia"
        },
        COL1315: {
            name: "Boyacá"
        },
        COL1316: {
            name: "Córdoba"
        },
        COL1317: {
            name: "Santander"
        },
        COL1318: {
            name: "La Guajira"
        },
        COL1342: {
            name: "San Andrés y Providencia"
        },
        COL1397: {
            name: "Caldas"
        },
        COL1398: {
            name: "Cundinamarca",
            color: "#54b4f2",
            zoomable: "yes",
            hover_color: "green",
            description: '<img width="104" height="110" style="float:left; margin-right: 10px;" src="map_images/internet-pacho-cundinamarca-@x2.png"/>Simple comunicaciones brinda servicios en diferentes lugares del departamento de Cundinamarca.'

        },
        COL1399: {
            name: "Bogota"
        },
        COL1400: {
            name: "Quindío"
        },
        COL1401: {
            name: "Risaralda"
        },
        COL1402: {
            name: "Tolima"
        },
        COL1403: {
            name: "Caquetá"
        },
        COL1404: {
            name: "Cauca"
        },
        COL1405: {
            name: "Huila"
        },
        COL1406: {
            name: "Nariño"
        },
        COL1407: {
            name: "Putumayo"
        },
        COL1408: {
            name: "Valle del Cauca"
        },
        COL1412: {
            name: "Atlántico"
        },
        COL1413: {
            name: "Bolívar"
        },
        COL1414: {
            name: "Cesar"
        },
        COL1415: {
            name: "Chocó"
        },
        COL1416: {
            name: "Magdalena"
        },
        COL1417: {
            name: "Sucre"
        },
        COL1420: {
            name: "Arauca"
        },
        COL1421: {
            name: "Norte de Santander"
        },
        COL1422: {
            name: "Casanare"
        },
        COL1423: {
            name: "Guaviare"
        },
        COL1424: {
            name: "Guainía"
        },
        COL1425: {
            name: "Meta"
        },
        COL1426: {
            name: "Vaupés"
        },
        COL1427: {
            name: "Vichada"
        }
    },
    locations: {
        "0": {
            lat: "5.14994",
            lng: "-74.18067",
            name: "Pacho",
            color: "default",
            description: "Cll. 7 # 16-20 LOCAL 207 Centro Comercial Pacho Centro.",
            url: "/oficinas",
            size: "32",
            type: "circle",
            image_url: "",
            opacity: "default"
        },
        "1": {
            lat: "5.34644",
            lng: "-74.49147",
            name: "Caparrapí",
            description: "Cll. 10 # 3 - 14 Autoservicio Galymed (Isaias Galindo)",
            type: "circle",
            url: "/oficinas#Caparrapi",
            image_url: ""
        },
        "2": {
            lat: "5.3592",
            lng: "-74.39047",
            url: "oficinas#Palma",
            type: "circle",
            name: "La Palma",
            description: "Cll. 4 # 4 - 13 compra de café galería (Dario Soto)",
            image_url: ""
        },
        "3": {
            lat: "5.45948",
            lng: "-74.33823",
            description: "Cll. 9 # 3 - 55 Yacocell (Wilson Bolaños)",
            url: "/oficinas#Yacopi",
            type: "circle",
            image_url: "",
            name: "Yacopí"
        }
    },
    regions: {
        "0": {
            states: [],
            name: "Cundinamarca",
            zoomable: "yes"
        }
    }
};