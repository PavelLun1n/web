<?php

declare(strict_types=1);

// Функция автозагрузки
spl_autoload_register(function ($class) {
    $prefix = 'MyProject\\';
    $base_dir = __DIR__ . '/MyProject/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

// Создание обычных пользователей
$user1 = new User("Some1", "Some2", "Some3");
$user2 = new User("Some12", "Some114", "Some12t436");
$user3 = new User("Some111", "Some1325211", "Some134747458");

// Создание привилегированного пользователя
$superUser = new SuperUser("Some1jhh", "Some1352", "adminpass", "Some1");

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Классы и интерфейсы</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Подключение шрифта Roboto -->

</head>
<body>
    <div class="container">
        <h1>Система управления пользователями</h1>
        <h2>Обычные пользователи</h2>
        <?php
        $regularUsers = [$user1, $user2, $user3];
        foreach ($regularUsers as $user) {
            echo '<div class="user-card">';
            echo '<div class="user-info"><strong>Имя:</strong> ' . htmlspecialchars($user->name) . '</div>';
            echo '<div class="user-info"><strong>Логин:</strong> ' . htmlspecialchars($user->login) . '</div>';
            echo '</div>';
        }
        ?>

        <h2>Привилегированный пользователь</h2>
        <div class="user-card super-user-card">
            <?php
            $superUserInfo = $superUser->getInfo();
            foreach ($superUserInfo as $key => $value) {
                $labels = [
                    'name' => 'Имя',
                    'login' => 'Логин',
                    'role' => 'Роль'
                ];
                $label = $labels[$key] ?? ucfirst($key);
                echo '<div class="user-info"><strong>' . $label . ':</strong> ' . htmlspecialchars($value) . '</div>';
            }
            ?>
        </div>

        <div class="stats">
            <h2>Статистика</h2>
            <p>Всего обычных пользователей: <?php echo User::getUserCount(); ?></p>
            <p>Всего привилегированных пользователей: <?php echo SuperUser::getSuperUserCount(); ?></p>
        </div>
    </div>
<a href="https://img.plantuml.biz/plantuml/png/hLHDRe905DxFAMQfgLw0cCQaAnTT6NTk44PBWZDc6Eh2abZRdQRTTjShgAqfncglyEP6VO0G4UsYCO4mx-_xUG7gdZAbylik8PPhUXvjUKmsk6AoQrgCZWYbLtHaTZmbJKi5b9jzPb2C7DuxhhcYv_1pnG623uMqpzKjmV7eMwfqI579WrOACELZ7EzE31kyAqfbWzuBnoR1eREzeOABelJJUd5Roh42wYFMZV2vCgZ3LLpB30Zv7mi5tJ6VpLBCWARdKZclfSTKAvKJJKU2CjDDVy3a1PnBuRBJg_1IXaljev8Z-sCxQ3pDtPg3MdC_dJol2qjgveGUR2h_ojSUgjNuNOdpIPYD4iA5ObI90HNT_BTYK7Y3hPx0Ie_rCwnWhHyfNh20ENp13fPw2jyGjZdCzKIF8OI5ViB-UPIby8Cj6prBMgCMXDZeruIm8vGI_OWpau9yxp7A4kyDDdz0Y74y35jKCeNrETHPcqVAFZ4PDs1_c9RmlCF960f3_K98dN4RVn6_" target="_blank">Просмотреть диаграмму классов</a>
    </div>

    <?php
    // Удаление пользователей
    echo '<div class="container" style="margin-top: 20px;">';
    echo '<h2>Удаление пользователей</h2>';
    echo '<div class="user-card">';
    
    // Начинаем буферизацию вывода
    
    
    // Сначала очищаем массив обычных пользователей
    unset($regularUsers);
    
    // Теперь удаляем отдельные переменные пользователей
    unset($user3);
    unset($user2);
    unset($user1);
    
    // В конце удаляем привилегированного пользователя
    unset($superUser);
    
    // Получаем содержимое буфера и очищаем его
    
    
    // Выводим все сообщения внутри блока

    ?>
</body>
</html> 
