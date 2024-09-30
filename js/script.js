const cardsPerPage = 4;
let currentPage = 1;
const cards = document.querySelectorAll('.card');
const totalPages = Math.ceil(cards.length / cardsPerPage);

function showPage(page) {

    cards.forEach((card, index) => {
        card.style.display = 'none';
        if (index >= (page - 1) * cardsPerPage && index < page * cardsPerPage) {
            card.style.display = 'block';
        }
    });
    updatePagination();
}

function updatePagination() {
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';
    for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement('button');
        pageButton.innerText = i;
        pageButton.onclick = () => {
            currentPage = i;
            showPage(currentPage);
        };
        pagination.appendChild(pageButton);
    }
}

showPage(currentPage);
document.getElementById("yourButton").addEventListener("click", function() {

    const iframe = document.getElementById("yourIframe").contentWindow;
    iframe.document.getElementById("yourInput").focus();
});

function handleSearch(event) {
    event.preventDefault();

    const searchValue = event.target.search.value;
    const propertyType = event.target.property_type.value;


    console.log("Recherche effectuée :", searchValue, propertyType);

}