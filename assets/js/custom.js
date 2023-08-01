// Burger navigation

const burger = document.querySelector(".js-navigation__burger");

const navSlide = () => {
    const nav = document.querySelector(".navigation__links__container");
    nav.classList.toggle("nav-active");
    burger.classList.toggle("toggle");
}

burger.addEventListener("click", navSlide);

// FAQ accordion

let questions = document.querySelectorAll(".js-faq__bar__question");

questions.forEach(question => {
    question.addEventListener("click", () => {
        question.classList.toggle("color");
        question.nextElementSibling.classList.toggle("show");
    })
})

// Vehicle serach on the fly

const mainImage = document.querySelector(".js-rental__fleet__block__image");
const vehicleGride = document.querySelector(".js-rental__fleet__block__chart");
let vehicleClicked = document.querySelectorAll(".js-vehicle-selected");

let vehicleToSearch = "audi"

const fetchVehicles = (vehicleToSearch) => {

    // fetch(`http://car-rental.local/wp-json/wp/v2/vehicle?search=${vehicleToSearch}`)
    fetch(`http://car-rental.local/wp-json/wp/v2/vehicle?search=${vehicleToSearch}`)
        .then((response) => response.json())
        .then((data) => {

                mainImage.innerHTML = `
            ${data.map(item => `<img class="rental__fleet__car mt-2 mb-2" src="${item.acf.home_page_search_image.url}" /> `)} `;

                vehicleGride.innerHTML = `
                ${data.map(item => `<h4 class="rental__fleet__chart__heading pb-1 pt-1"><span>£${item.acf.cost}</span> / rent per day</h4>

                <div class="rental__fleet__chart">
                    <span> Model </span>
                    <span> ${item.acf.model} </span>
                </div>

                <div class="rental__fleet__chart">
                    <span class="mt-1"> Manufacturer </span>
                    <span class="mt-1">${item.acf.manufacturer}</span>
                </div>

                <div class="rental__fleet__chart">
                    <span class="mt-1"> Fuel </span>
                    <span class="mt-1">${item.acf.fuel}</span>
                </div>

                <div class="rental__fleet__chart">
                    <span class="mt-1"> Seats </span>
                    <span class="mt-1">${item.acf.seats}</span>
                </div>

                <div class="rental__fleet__chart">
                    <span class="mt-1"> Transmition </span>
                    <span class="mt-1">${item.acf.transmition}</span>
                </div>

                <div class="rental__fleet__chart">
                    <span class="mt-1"> Stars </span>
                    <span class="mt-1">${item.acf.stars}</span>
                </div>
             `
                )}`;
            }
        );
};

fetchVehicles(vehicleToSearch);


vehicleClicked.forEach(item => {
    item.addEventListener("click", () =>{
        document.querySelector(".list__item__active")?.classList.remove("list__item__active");
        item.classList.add("list__item__active");
        vehicleToSearch = item.innerHTML;
        fetchVehicles(vehicleToSearch);
    })
})
