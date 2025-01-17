document.getElementById('loginForm').addEventListener('submit', async function (event) {
    event.preventDefault(); // Отменяем стандартное поведение формы

    // Собираем данные из формы
    const formData = new FormData(this);

    try {
        // Отправляем данные на сервер
        const response = await fetch('login.php', {
            method: 'POST',
            body: formData
        });

        // Обрабатываем ответ
        const result = await response.json();
        const messageDiv = document.getElementById('responseMessage');
        if (result.success) {
            messageDiv.textContent = 'Успешный вход!';
            messageDiv.style.color = 'green';
            // Перенаправление, если нужно
            window.location.href = 'admin.php';
        } else {
            messageDiv.textContent = 'Ошибка: ' + result.message;
            messageDiv.style.color = 'red';
        }
    } catch (error) {
        console.error('Ошибка запроса:', error);
        document.getElementById('responseMessage').textContent = 'Произошла ошибка при отправке данных.';
    }
});