// Получаем элементы
const burger = document.getElementById('burger');
const menuOverlay = document.getElementById('menuOverlay');

// Функция переключения меню
function toggleMenu() {
    burger.classList.toggle('active');
    menuOverlay.classList.toggle('active');
}

// Открытие/закрытие меню по клику на кнопку
burger.addEventListener('click', (event) => {
    event.stopPropagation(); // Предотвращаем всплытие события, чтобы клик по кнопке не закрыл меню
    toggleMenu();
});

// Закрытие меню при клике на любой элемент вне меню
document.addEventListener('click', (event) => {
    // Проверяем, активно ли меню и клик не произошёл внутри меню
    if (
        menuOverlay.classList.contains('active') && 
        !menuOverlay.contains(event.target) && 
        event.target !== burger
    ) {
        burger.classList.remove('active');
        menuOverlay.classList.remove('active');
    }
});