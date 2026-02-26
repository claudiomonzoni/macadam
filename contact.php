<?php
if (file_exists(__DIR__ . '/config.local.php')) {
    include(__DIR__ . '/config.local.php');
} else {
    $GOOGLE_MAPS_API_KEY = '';
}
$titulo = "Macadam accueil | Auto ecole Sierre Crans-Montana Contact ";
$activo = "contact";
include("header.php");
?>

<div class="contenedor">
    <div class="auto">

    </div>
    <div id="flex">
        
        
        <div id="izq">
            
            <section  class="menosMarUp">
                <h1>Contact</h1>
                <h2>Bonjour, contactez-moi et nous commencerons votre formation.</h2>

                <form id="formContactoWhatsApp" class="form-contacto">
                    <div class="form-group">
                        <label for="nom">Nom et Prénom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required placeholder="Votre nom complet">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required placeholder="Votre numéro de téléphone">
                    </div>
                    <div class="form-group">
                        <label for="typeCours">Type de cours</label>
                        <select class="form-control" id="typeCours" name="typeCours" required>
                            <option value="">-- Sélectionnez --</option>
                            <option value="Voiture">Voiture</option>
                            <option value="Moto">Moto</option>
                            <option value="Sensibilisation">Sensibilisation</option>
                            <option value="Théorie">Théorie</option>
                            <option value="L2">L2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Votre message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-default btn-contacto">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>Contactez-moi
                    </button>
                </form>
            </section>

        </div>

        <div id="der">

            <section>
            

                <div class="row liconta">
                    <div >
                        <li><i class="fa fa-phone" aria-hidden="true"></i> +41 79 448 67 60</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> blaisebetrisey@gmail.com</li>
                    </div>
                    <div >
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Avenue du Marché 1<br>
                            3960 Sierre/VS

                        </li>
                    </div>

                </div>
            </section>





            <section class="container-fluid sinMargen masMargeUp">

                <div>

                    <script type="text/javascript">
                        var map;

                        function initMap() {
                            map = new google.maps.Map(document.getElementById('mapa'), {
                                center: {
                                    lat: 46.291771,
                                    lng: 7.527395
                                },
                                scrollwheel: false,
                                draggable: true,
                                zoom: 11,
                                mapTypeId: google.maps.MapTypeId.ROADMAP,
                                styles: [{
                                        "featureType": "administrative",
                                        "elementType": "geometry.fill",
                                        "stylers": [{
                                            "saturation": "0"
                                        }]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "labels.text.fill",
                                        "stylers": [{
                                            "color": "#a41f35"
                                        }]
                                    },

                                    {
                                        "featureType": "administrative",
                                        "elementType": "labels.text.stroke",
                                        "stylers": [{
                                                "color": "#121212"
                                            },
                                            {
                                                "weight": 1
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "landscape",
                                        "elementType": "all",
                                        "stylers": [{
                                            "color": "#969696"
                                        }]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "all",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "road",
                                        "elementType": "all",
                                        "stylers": [{
                                                "visibility": "on"
                                            },
                                            {
                                                "lightness": 0
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "all",
                                        "stylers": [{
                                                "visibility": "simplified"
                                            },
                                            {
                                                "lightness": -10
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "labels.icon",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "transit",
                                        "elementType": "all",
                                        "stylers": [{
                                            "visibility": "off"
                                        }]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "all",
                                        "stylers": [{
                                                "color": "#78a6ac"
                                            },
                                            {
                                                "visibility": "on"
                                            }
                                        ]
                                    }
                                ]
                            });


                            var marker = new google.maps.Marker({
                                position: {
                                    lat: 46.291771,
                                    lng: 7.527395
                                },
                                title: 'L Safer Drive',
                                icon: 'imas/marker_l-safer-drive.png'
                            });
                            marker.setMap(map);

                        }
                    </script>
                    <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=<?php echo htmlspecialchars($GOOGLE_MAPS_API_KEY); ?>&callback=initMap">
                    </script>
                    <div id="mapa"></div>
                </div>


            </section>
        </div>


    </div>



</div>

<script>
    (function() {
        var form = document.getElementById('formContactoWhatsApp');
        var whatsappPhone = '41794486760';

        function esMovil() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || window.innerWidth <= 768;
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var nom = document.getElementById('nom').value.trim();
            var telephone = document.getElementById('telephone').value.trim();
            var typeCours = document.getElementById('typeCours').value;
            var message = document.getElementById('message').value.trim();

            var texto = 'Bonjour, je vous contacte depuis www.macadam-auto-ecole.ch\n\n';
            texto += 'Nom et Prénom: ' + nom + '\n';
            texto += 'Téléphone: ' + telephone + '\n';
            texto += 'Type de cours: ' + typeCours + '\n';
            texto += 'Message: ' + message;

            var baseUrl = esMovil() ? 'https://api.whatsapp.com/send' : 'https://web.whatsapp.com/send';
            var url = baseUrl + '?phone=' + whatsappPhone + '&text=' + encodeURIComponent(texto);

            window.open(url, '_blank', 'noopener,noreferrer');
        });
    })();
</script>

<?php
include("footer.php");
?>