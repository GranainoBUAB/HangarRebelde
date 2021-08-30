const getHomeLink = document.querySelector('.home-link');
const getCalendarLink = document.querySelector('.calendar-link');
const getTrophyLink = document.querySelector('.trophy-link');
const getNewsLink = document.querySelector('.news-link');
const getShopLink = document.querySelector('.shop-link');
const getAboutUsLink = document.querySelector('.aboutUs-link');

const getSectionHome = document.querySelector('.home');
const getSectionCalendar = document.querySelector('.calendar');
const getSectionTrophy = document.querySelector('.trophy');
const getSectionNews = document.querySelector('.news');
const getSectionShop = document.querySelector('.shop');
const getSectionAboutUs = document.querySelector('.aboutUs');

getHomeLink.addEventListener('click', showHome);
getCalendarLink.addEventListener('click', showCalendar);
getTrophyLink.addEventListener('click', showTrophy);
getNewsLink.addEventListener('click', showNews);
getShopLink.addEventListener('click', showShop);
getAboutUsLink.addEventListener('click', showAboutUs);

function showHome() {
    getSectionHome.classList.remove('hide');
    getSectionCalendar.classList.add('hide');
    getSectionTrophy.classList.add('hide');
    getSectionNews.classList.add('hide');
    getSectionShop.classList.add('hide');
    getSectionAboutUs.classList.add('hide');
}

function showCalendar() {
    getSectionHome.classList.add('hide');
    getSectionCalendar.classList.remove('hide');
    getSectionTrophy.classList.add('hide');
    getSectionNews.classList.add('hide');
    getSectionShop.classList.add('hide');
    getSectionAboutUs.classList.add('hide');
}

function showTrophy() {
    getSectionHome.classList.add('hide');
    getSectionCalendar.classList.add('hide');
    getSectionTrophy.classList.remove('hide');
    getSectionNews.classList.add('hide');
    getSectionShop.classList.add('hide');
    getSectionAboutUs.classList.add('hide');
}

function showNews() {
    getSectionHome.classList.add('hide');
    getSectionCalendar.classList.add('hide');
    getSectionTrophy.classList.add('hide');
    getSectionNews.classList.remove('hide');
    getSectionShop.classList.add('hide');
    getSectionAboutUs.classList.add('hide');
}

function showShop() {
    getSectionHome.classList.add('hide');
    getSectionCalendar.classList.add('hide');
    getSectionTrophy.classList.add('hide');
    getSectionNews.classList.add('hide');
    getSectionShop.classList.remove('hide');
    getSectionAboutUs.classList.add('hide');
}

function showAboutUs() {
    getSectionHome.classList.add('hide');
    getSectionCalendar.classList.add('hide');
    getSectionTrophy.classList.add('hide');
    getSectionNews.classList.add('hide');
    getSectionShop.classList.add('hide');
    getSectionAboutUs.classList.remove('hide');
}
