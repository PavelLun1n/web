<?php
// Lab 3 - Design Patterns Implementation
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №3 - Паттерны проектирования</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            margin: 0 auto;
            padding: 20px;
            max-width: 1000px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            color: #555;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #003366;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .pattern-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .pattern-card {
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            padding: 15px;
        }

        .pattern-header {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .pattern-description p {
            margin: 5px 0;
        }

        .pattern-links {
            margin-top: 15px;
        }

        .pattern-link {
            display: inline-block;
            margin-right: 10px;
            padding: 6px 12px;
            background-color: #003366;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
        }

        .pattern-link:hover {
            background-color: #005599;
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding-top: 10px;
            font-size: 13px;
            color: #888;
            border-top: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="back-link">← Вернуться на главную</a>
        <h1>Лабораторная работа №3</h1>
        <div class="subtitle">Паттерны проектирования: Singleton, Factory Method, MVC</div>
    </header>

    <div class="pattern-container">
        <div class="pattern-card">
            <div class="pattern-header">
                Одиночка (Singleton)
            </div>
            <div class="pattern-content">
                <div class="pattern-description">
                    <p>Паттерн Одиночка (Singleton) гарантирует, что у класса есть только один экземпляр, и предоставляет к нему глобальную точку доступа.</p>
                    <p>В данной реализации создан класс Settings, который может иметь только один экземпляр и хранит различные настройки приложения.</p>
                </div>
                <div class="pattern-links">
                    <a href="lab3/patterns/singleton/settings_use.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Фабричный метод (Factory Method)
            </div>
            <div class="pattern-content">
                <div class="pattern-description">
                    <p>Паттерн Фабричный метод (Factory Method) определяет интерфейс для создания объектов, но позволяет подклассам решать, экземпляры каких классов создавать.</p>
                    <p>В реализации создан абстрактный фабричный класс для создания различных типов пользователей: администраторов, обычных пользователей и менеджеров.</p>
                </div>
                <div class="pattern-links">
                    <a href="lab3/patterns/factory-method/factory_use.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab3/patterns/factory-method/factory-method.html" class="pattern-link" target="_blank">Диаграмма классов</a>
                </div>
            </div>
        </div>

        <div class="pattern-card">
            <div class="pattern-header">
                Модель-Представление-Контроллер (MVC)
            </div>
            <div class="pattern-content">
                <div class="pattern-description">
                    <p>Паттерн MVC (Model-View-Controller) разделяет приложение на три основных компонента: Модель, Представление и Контроллер.</p>
                    <p>Реализация включает различные представления (HTML, JSON, Text, Markdown) для отображения данных пользователей, контроллер для управления данными и взаимодействия с представлениями.</p>
                </div>
                <div class="pattern-links">
                    <a href="lab3/patterns/mvc/mvc_use.php" class="pattern-link" target="_blank">Посмотреть демонстрацию</a>
                    <a href="lab3/patterns/mvc/mvc-pattern.html" class="pattern-link" target="_blank">Диаграмма классов</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>PHP Student Project &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
    </div>
</body>
</html> 
