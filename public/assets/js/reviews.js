

const extendBtn = document.querySelector('.js-extend-btn');
const collapseBtn = document.querySelector('.js-collapse-btn');
const reviewListStarContainer = document.querySelector('.js-review-list-star-container');
// console.log(reviewListStarContainer);
// console.log(extendBtn);

function showListStar() {
    reviewListStarContainer.classList.add("active");
    extendBtn.style.display = "none";
    collapseBtn.style.display = "block";
}
function hideListStar() {
    reviewListStarContainer.classList.remove("active");
    collapseBtn.style.display = "none";
    extendBtn.style.display = "block";
}

extendBtn.addEventListener("click", showListStar);
collapseBtn.addEventListener("click", hideListStar);



reviewListStarContainer.addEventListener("click", function (event) {
    event.stopPropagation();

});

const sliderBtn = document.querySelector('.js-sliders-btn');
const sortListContainer = document.querySelector('.js-sort-list-container');

function showSortList() {
    if (sortListContainer.style.display === 'none') {
        sortListContainer.style.display = 'block';
    } else {
        sortListContainer.style.display = 'none';
    }
}

sliderBtn.addEventListener("click", showSortList);


const showMoreBtn = document.querySelector('.js-show-more-btn');
const reviewDetailContainer = document.querySelector('.review-list-content');
var maxHeight = 1250;
if (reviewDetailContainer.offsetHeight >= maxHeight) {
    showMoreBtn.addEventListener('click', function () {
        reviewDetailContainer.style.maxHeight = `calc(${maxHeight}px + 500px)`;
        maxHeight += 500;
        console.log(maxHeight);
        if (maxHeight > reviewDetailContainer.offsetHeight) {

            showMoreBtn.style.display = 'none';
        }
    })

} else {
    showMoreBtn.style.display = 'none';

}