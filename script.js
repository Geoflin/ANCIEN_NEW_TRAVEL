//affichage hotel

const hotel1 = document.getElementById('newYorkHotel')
const hotel2 = document.getElementById('ParisHotel')
const hotel3 = document.getElementById('TunisHotel')
const hotel4 = document.getElementById('PekinHotel')
const hotel5 = document.getElementById('SydneyHotel')
const openhotel = document.getElementById('openhotel')
const closehotel = document.getElementById('closehotel')

const openHotel = () => {
    hotel1.style.display = "flex"
    openNewYorkHotel.style.display= "none"
    closeNewYorkHotel.style.display= "flex"

    hotel2.style.display = "flex"
    openParisHotel.style.display= "none"
    closeParisHotel.style.display= "flex"

    hotel3.style.display = "flex"
    openTunisHotel.style.display= "none"
    closeTunisHotel.style.display= "flex"

    hotel4.style.display = "flex"
    openPekinHotel.style.display= "none"
    closePekinHotel.style.display= "flex"

    hotel5.style.display = "flex"
    openSydneyHotel.style.display= "none"
    closeSydneyHotel.style.display= "flex"

    openhotel.style.display= "none"
    closehotel.style.display= "flex"
  }

const closeHotel = () => {
    hotel1.style.display = "none"
    openNewYorkHotel.style.display= "flex"
    closeNewYorkHotel.style.display= "none"

    hotel2.style.display = "none"
    openParisHotel.style.display= "flex"
    closeParisHotel.style.display= "none"

    hotel3.style.display = "none"
    openTunisHotel.style.display= "flex"
    closeTunisHotel.style.display= "none"

    hotel4.style.display = "none"
    openPekinHotel.style.display= "flex"
    closePekinHotel.style.display= "none"

    hotel5.style.display = "none"
    openSydneyHotel.style.display= "flex"
    closeSydneyHotel.style.display= "none"

    openhotel.style.display= "none"
    closehotel.style.display= "flex"

    openhotel.style.display= "flex"
    closehotel.style.display= "none"
}

openhotel.addEventListener('click', openHotel)
closehotel.addEventListener('click', closeHotel)


//affichage Hotel
//affichage newYorkHotel

const newYorkHotel = document.getElementById('newYorkHotel')
const openNewYorkHotel = document.getElementById('openNewYorkHotel')
const closeNewYorkHotel = document.getElementById('closeNewYorkHotel')

const openNewYorkhotel = () => {
    newYorkHotel.style.display = "block"
    openNewYorkHotel.style.display= "none"
    closeNewYorkHotel.style.display= "flex"
  }

const closeNewYorkhotel = () => {
    newYorkHotel.style.display = "none"
    openNewYorkHotel.style.display= "flex"
    closeNewYorkHotel.style.display= "none"
}

openNewYorkHotel.addEventListener('click', openNewYorkhotel)
closeNewYorkHotel.addEventListener('click', closeNewYorkhotel)

//affichage ParisHotel

const ParisHotel = document.getElementById('ParisHotel')
const openParisHotel = document.getElementById('openParisHotel')
const closeParisHotel = document.getElementById('closeParisHotel')

const openParishotel = () => {
    ParisHotel.style.display = "block"
    openParisHotel.style.display= "none"
    closeParisHotel.style.display= "flex"
  }

const closeParishotel = () => {
    ParisHotel.style.display = "none"
    openParisHotel.style.display= "flex"
    closeParisHotel.style.display= "none"
}

openParisHotel.addEventListener('click', openParishotel)
closeParisHotel.addEventListener('click', closeParishotel)

//affichage TunisHotel

const TunisHotel = document.getElementById('TunisHotel')
const openTunisHotel = document.getElementById('openTunisHotel')
const closeTunisHotel = document.getElementById('closeTunisHotel')

const openTunishotel = () => {
    TunisHotel.style.display = "block"
    openTunisHotel.style.display= "none"
    closeTunisHotel.style.display= "flex"
  }

const closeTunishotel = () => {
    TunisHotel.style.display = "none"
    openTunisHotel.style.display= "flex"
    closeTunisHotel.style.display= "none"
}

openTunisHotel.addEventListener('click', openTunishotel)
closeTunisHotel.addEventListener('click', closeTunishotel)

//affichage PekinHotel

const PekinHotel = document.getElementById('PekinHotel')
const openPekinHotel = document.getElementById('openPekinHotel')
const closePekinHotel = document.getElementById('closePekinHotel')

const openPekinhotel = () => {
    PekinHotel.style.display = "block"
    openPekinHotel.style.display= "none"
    closePekinHotel.style.display= "flex"
  }

const closePekinhotel = () => {
    PekinHotel.style.display = "none"
    openPekinHotel.style.display= "flex"
    closePekinHotel.style.display= "none"
}

openPekinHotel.addEventListener('click', openPekinhotel)
closePekinHotel.addEventListener('click', closePekinhotel)

//affichage SydneyHotel

const SydneyHotel = document.getElementById('SydneyHotel')
const openSydneyHotel = document.getElementById('openSydneyHotel')
const closeSydneyHotel = document.getElementById('closeSydneyHotel')

const openSydneyhotel = () => {
    SydneyHotel.style.display = "block"
    openSydneyHotel.style.display= "none"
    closeSydneyHotel.style.display= "flex"
  }

const closeSydneyhotel = () => {
    SydneyHotel.style.display = "none"
    openSydneyHotel.style.display= "flex"
    closeSydneyHotel.style.display= "none"
}

openSydneyHotel.addEventListener('click', openSydneyhotel)
closeSydneyHotel.addEventListener('click', closeSydneyhotel)


//systeme favoris
//affichage newYorkHotel

const noFavorite1 = document.getElementById('noFavorite1')
const Favorite1 = document.getElementById('Favorite1')
const favoris1 = document.getElementById('favoris1')
let favoris10 = 0

const nofavorite1 = () => {
    noFavorite1.style.display= "none"
    Favorite1.style.display= "flex"
    }

const favorite1 = () => {
    noFavorite1.style.display= "flex"
    Favorite1.style.display= "none"
}

noFavorite1.addEventListener('click', nofavorite1)
Favorite1.addEventListener('click', favorite1)