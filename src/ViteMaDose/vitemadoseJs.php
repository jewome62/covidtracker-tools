
<script>
(function () {
// DETECTION IFRAME
if (window!=window.top) {
    document.getElementsByTagName('html')[0].innerHTML = '';
    throw new Error ('iframe');
}
const LOADER = `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="shape-rendering: auto;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"> <circle cx="50" cy="50" fill="none" stroke="#2f80ed" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138"> <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform> </circle> <!-- [ldio] generated by https://loading.io/ --></svg>`
const LOGO = {
    Keldoc: "https://www.keldoc.com/keldoc-logo.nolqip.e7abaad88d1642c9c1f2.png",
    Maiia: "https://www.rmingenierie.net/wp-content/uploads/2019/12/logo-Maiia-vert.png",
    Doctolib: "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Logo_Doctolib.svg/1024px-Logo_Doctolib.svg.png",
    Autre: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAH0CAYAAADhUFPUAAAFxklEQVR42uzBAQEAAACAkP6v7ggCAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIDZgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYgwMBAAAAACD/10ZQVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVXYsWMbgKAAiqI/orCDaNnFGBKdWmFUMxjCYwU/0ZyT3OaN8ACAnzSpLQAAVNGnNe1pKgAAfH6u5nSmKy3vBgDAJ0Pa0pHGAgBAFd2T9woAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOBmDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVhDw4EAAAAAID8XxtBVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVVpDw4JAAAAAAT9f+0LEwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwCyuYE1Qq4nl4AAAAASUVORK5CYII=" // image vide
};
const TRADEMARK = {
  Doctolib: "Doctolib.fr",
  Keldoc: "Keldoc.com",
  Maiia: "Maiia.com"
}
main()

async function main() {
  const departements = await fetchDepartements()
  const departementsParNumero = departements.reduce((all, dep) => ({[dep.code_departement]: dep, ...all}), {})
  const doseFormEl = document.querySelector("form.doses")
  const departementSelectEl = doseFormEl.querySelector('select')
  for (const departement of departements) {
    const optionEl = document.createElement('OPTION')
    optionEl.value = departement.code_departement
    optionEl.innerText = `${departement.code_departement} - ${departement.nom_departement}`
    departementSelectEl.appendChild(optionEl)
  }
  const renduEl = doseFormEl.querySelector('#rdv')

  let départementHash = null
  if (location.hash && /^#dep-[AB0-9]+$/.test(location.hash)) {
    départementHash = location.hash.substr(5)
    if (departementsParNumero[départementHash]) {
      departementSelectEl.value = départementHash
      onDépartementSelectionné(départementHash)
    }
  }

  departementSelectEl.addEventListener('change', (e) => {
    onDépartementSelectionné(departementSelectEl.value)
  })


  function onDépartementSelectionné (codeDépartement) {
    const départementSélectionné = departementsParNumero[codeDépartement]
    if (départementSélectionné) {
      afficherLesSlotsPourDepartement(renduEl, départementSélectionné)
      location.hash = `dep-${codeDépartement}`
    }
  }
}

async function afficherLesSlotsPourDepartement(renduEl, départementSélectionné) {
  renduEl.className = "loading"
  renduEl.innerHTML = `<p>Chargement des données ${LOADER}</p>`
  const slots = await fetchSlotsForDepartement(départementSélectionné.code_departement)
  dernierScan = (new Date(slots.last_updated)).toLocaleString('fr-FR', {day: '2-digit',month: '2-digit', hour: '2-digit', minute: '2-digit'});

  const slotsDisponibles = renderSlotsDisponibles({
    centres: slots.centres_disponibles,
    départementSélectionné,
    dernierScan,
  })
  const slotsIndisponibles = renderSlotsIndisponibles({
    centres: slots.centres_indisponibles,
  })

  renduEl.className = 'loaded'
  renduEl.innerHTML = `
    ${slotsDisponibles}
    ${slotsIndisponibles}
  `
}


function renderSlotsDisponibles ({ dernierScan, centres, départementSélectionné }) {
  const nbCentres = centres.length
  if (nbCentres === 0) {
    return pasDeCentresDisponibles({ dernierScan, départementSélectionné })
  }
  const titre = `
    <div class="titre-results">
      <h3 class="dpt-selected">Résultats pour : ${départementSélectionné.nom_departement} (${départementSélectionné.code_departement})</h3>
      <p class="last-update-info" role="doc-subtitle">dernière vérification : <span>${dernierScan}</span></p>
    </div>

    <h3>✅ Rendez-vous trouvés</h3>
    <p>Nous avons trouvé ${nbCentres} centre(s) ayant des disponibilités sur Doctolib, Maiia ou Keldoc.</p>
  `
  return `
    <section class="results">
      ${titre}
      ${centres.map(renderCentreReservable).join('')}
    </section>
  `
}

function renderCentreReservable (centre) {
  const date = new Date(centre.prochain_rdv).toLocaleString('fr-FR', {weekday: 'long', day: '2-digit', month: 'long', hour: '2-digit', minute: '2-digit'})
  const trademark = TRADEMARK[centre.plateforme]
  const bookAvec = trademark ? `avec ${trademark}` : "sur internet"
  const logoUrl = LOGO[centre.plateforme]
  return `
    <a href="${centre.url}" target="_blank" class="linking-container">
      <card class="card">
        <span class="card__info-area">
            <div class="card__info card__date">${date}</div>
            <div class="card__info card__location">${centre.nom}</div>
        </span>
        <span class="card__booking-area">
            <input type="button" class="card__btn active-btn" value="prendre rendez-vous"></input>
            <p class="card__booking-engine">${bookAvec} <img src="${logoUrl}" class="logo" /></p>
        </span>
      </card>
    </a>
  `
}

function pasDeCentresDisponibles ({ dernierScan, départementSélectionné  }) {
  return `
  <section class="results">
    <h3>❌ Aucun rendez-vous trouvé pour le département ${départementSélectionné.nom_departement} (${départementSélectionné.code_departement})</h3>
    <p>Nous n'avons trouvé aucun centre ayant des disponibilités sur Doctolib, Maiia et Keldoc. Dernier scan : ${dernierScan}.</p>
    <p>
        <i>La recherche de Vite Ma Dose ! n'est pas exhaustive. Essayez de chercher manuellement via les plateformes de réservation (Doctolib, Maiia, Keldoc) ou en appelant les centres.</i>
    </p>
  </section>
  `
}


function renderSlotsIndisponibles ({ dernierScan, centres }) {
  const nbCentres = centres.length
  const titre = `
    <h3>Autres centres sans créneaux de vaccination détecté</h3>
  `
  return `
    <section class="results">
      ${titre}
      ${centres.map(renderCentreAVerifier).join('')}
    </section>
  `
}

function renderCentreAVerifier (centre) {
  const trademark = TRADEMARK[centre.plateforme]
  const verifierAvec = trademark ? `avec ${trademark}` : "sur internet"
  const motif = trademark ? "Aucun rendez-vous détecté" : "Plateforme non supportée"
  return `
    <a href="${centre.url}" class="linking-container">
      <card class="card inactive-center">
          <span class="card__info-area">
              <div class="card__info card__date">${motif}</div>
              <div class="card__info card__location">${centre.nom}</div>
          </span>
          <span class="card__booking-area">
              <input type="button" class="card__btn active-btn" value="vérifier ce centre"></input>
              <p class="card__booking-engine inactive-color">${verifierAvec}</p>
          </span>
      </card>
    </a>
  `
}


async function fetchDepartements () {
  const url = 'https://raw.githubusercontent.com/CovidTrackerFr/vitemadose/main/data/output/departements.json'
  const response = await fetch(url)
  if (!response.ok) {
    throw new Error("HTTP error " + response.status);
  }
  return await response.json()
}

async function fetchSlotsForDepartement(numeroDepartement) {
  const url = `https://raw.githubusercontent.com/CovidTrackerFr/vitemadose/data-auto/data/output/${numeroDepartement}.json`
  const response = await fetch(url, {cache: 'no-cache'})
  if (!response.ok) {
    throw new Error("HTTP error " + response.status);
  }
  return await response.json()
}


})()

  </script>
