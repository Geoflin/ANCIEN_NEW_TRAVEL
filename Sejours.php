<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Séjours/destinations</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

    <nav>
        <div><i class="material-icons">home</i><a href="index.php">accueil</a></div>
        <div><i class="material-icons">info</i><a href="A propos.php">À propos</a></div>
        <div><i class="material-icons">airplanemode_active</i><a href="Sejours.php">Séjours/destinations</a></div>
        <div><i class="material-icons">phone_in_talk</i><a href="contact.php">Contact</a></div>
        <div><i class="material-icons">account_circle</i><a href="espace.php">Mon espace</a></div>
      </nav>

    <header>
        <h1><i class="material-icons">explore</i> New Travel</h1>
        <p>Votre agence, vos voyages, vos souvenir !</p>
    </header>

    <main>

        <h1>Séjours/destinations</h1>
        <h3>Choisissez vos destinations<i class="material-icons" id="openhotel">radio_button_unchecked</i><i class="material-icons" id="closehotel">check_circle_outline</i></h3>
        <section-ville id="destination">
            <div><img src="city-336708_1920.jpg" width=250 height=250></img>
                <div class="continent"> New-York <i class="material-icons" id="openNewYorkHotel">radio_button_unchecked</i><i class="material-icons" id="closeNewYorkHotel">check_circle_outline</i></div>
            </div>
            <div><img src="eiffel-tower-3349075_1920.jpg" width=250 height=250></img>
                <div class="continent"> Paris <i class="material-icons" id="openParisHotel">radio_button_unchecked</i><i class="material-icons" id="closeParisHotel">check_circle_outline</i></div>
            </div>
            <div><img src="tunisia-1429063_1920.jpg" width=250 height=250></img>
                <div class="continent"> Tunis <i class="material-icons" id="openTunisHotel">radio_button_unchecked</i><i class="material-icons" id="closeTunisHotel">check_circle_outline</i></div>
            </div>
            <div><img src="peking-1908167_1920.jpg" width=250 height=250></img>
                <div class="continent">Pékin <i class="material-icons" id="openPekinHotel">radio_button_unchecked</i><i class="material-icons" id="closePekinHotel">check_circle_outline</i></div>
            </div>
            <div><img src="australia-1281935_1920.jpg" width=250 height=250></img>
                <div class="continent">Sydney <i class="material-icons" id="openSydneyHotel">radio_button_unchecked</i><i class="material-icons" id="closeSydneyHotel">check_circle_outline</i></div>
            </div>
        </section-ville>

        <h2>Vos hôtels</h2>
        <h3>Choisissez vos hôtels favoris<i class="material-icons" id="noFavorite">favorite_border</i><i class="material-icons" id="Favorite">favorite</i></h3>
        <section-hotel id="hotel">

            <section-hotel-New-York id="newYorkHotel">
                <hotel-nav>
                    <div class="location"><i class="material-icons">location_on</i>New-York</div>
                    <i class="material-icons" id="noFavorite1">favorite_border</i><i class="material-icons" id="Favorite1">favorite</i>
                </hotel-nav>
                <h4>hotel le New-Yorkais</h4>
                <img src="architecture-2558734_1920.jpg" width=250 height=250></img>
                <hotel-header>
                    <i class="material-icons">star star star</i>
                    <div><i class="material-icons">info</i>Prix: 159€</div>
                </hotel-header>
                <h5>Les plus:</h5>
                <div class="list">
                    <ul>
                        <li>Vue sur la statue de la liberté</li>
                        <li>Proche des transports</li>
                        <li>Restauration incluse</li>
                    </ul>
                </div>
                <button>Voir les offres</button>
            </section-hotel-New-York>

            <section-hotel-Paris id="ParisHotel">
                <hotel-nav>
                    <div class="location"><i class="material-icons">location_on</i>Paris</div>
                    <i class="material-icons" id="noFavorite">favorite_border</i><i class="material-icons" id="Favorite">favorite</i>
                </hotel-nav>
                <h4>hotel le Parisien</h4>
                <img src="building-66789_1920.jpg" width=250 height=250></img>
                <hotel-header>
                    <i class="material-icons">star star star</i>
                    <div><i class="material-icons">info</i>Prix: 129€</div>
                </hotel-header>
                <h5>Les plus:</h5>
                <div class="list">
                    <ul>
                        <li>Proche du centre ville</li>
                        <li>Rue calme</li>
                        <li>parking gratuit</li>
                    </ul>
                </div>
                <button>Voir les offres</button>
            </section-hotel-Paris>

            <section-hotel-Tunis id="TunisHotel">
                <hotel-nav>
                    <div class="location"><i class="material-icons">location_on</i>Tunis</div>
                    <i class="material-icons" id="noFavorite">favorite_border</i><i class="material-icons" id="Favorite">favorite</i>
                </hotel-nav>
                <h4>hotel le Tunisien</h4>
                <img src="tunisia-188536_1920.jpg" width=250 height=250></img>
                <hotel-header>
                    <i class="material-icons">star star star</i>
                    <div><i class="material-icons">info</i>Prix: 109€</div>
                </hotel-header>
                <h5>Les plus:</h5>
                <div class="list">
                    <ul>
                        <li>Piscine spacieuse</li>
                        <li>Design ensoleillé</li>
                        <li>Buffet à volonté</li>
                    </ul>
                </div>
                <button>Voir les offres</button>
            </section-hotel-Tunis>

            <section-hotel-Pekin id="PekinHotel">
                <hotel-nav>
                    <div class="location"><i class="material-icons">location_on</i>Pékin</div>
                    <i class="material-icons" id="noFavorite">favorite_border</i><i class="material-icons" id="Favorite">favorite</i>
                </hotel-nav>
                <h4>hotel le mandarin</h4>
                <img src="hoian-1276675_1920.jpg" width=250 height=250></img>
                <hotel-header>
                    <i class="material-icons">star star star</i>
                    <div><i class="material-icons">info</i>Prix: 90€</div>
                </hotel-header>
                <h5>Les plus:</h5>
                <div class="list">
                    <ul>
                        <li>Gastronomie locale</li>
                        <li>Design traditionnel</li>
                        <li>Buffet à volonté</li>
                    </ul>
                </div>
                <button>Voir les offres</button>
            </section-hotel-Pekin>

            <section-hotel-Sydney id="SydneyHotel">
                <hotel-nav>
                    <div class="location"><i class="material-icons">location_on</i>Sydney</div>
                    <i class="material-icons" id="noFavorite">favorite_border</i><i class="material-icons" id="Favorite">favorite</i>
                </hotel-nav>
                <h4>hotel kangourou</h4>
                <img src="western-australia-172630_1920.jpg" width=250 height=250></img>
                <hotel-header>
                    <i class="material-icons">star star star</i>
                    <div><i class="material-icons">info</i>Prix: 140€</div>
                </hotel-header>
                <h5>Les plus:</h5>
                <div class="list">
                    <ul>
                        <li>Visite guidée</li>
                        <li>Piscine de l'hotel</li>
                        <li>Spectacle</li>
                    </ul>
                </div>
                <button>Voir les offres</button>
            </section-hotel-Sydney>

        </section-hotel>

    </main>
    <script src="script.js"></script>

</body>

</html>