<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторные работы по PHP</title>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #34495e;
            --accent-color: #2980b9;
            --text-color: #222;
            --light-bg: #ecf0f1;
            --border-color: #ccc;
            --shadow-color: rgba(0, 0, 0, 0.05);
        }
        body {
            margin: 0;
            padding: 10px 20px; 
            background-color: #f5f5f5;
            color: var(--text-color);
            line-height: 1.6;
        }


        header {
            text-align: center;
            margin-bottom: 60px;
        }

        h1 {
            color: var(--primary-color);
            font-size: 3rem;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .subtitle {
            font-size: 1.1rem;
            color: var(--secondary-color);
        }

     .main-container {
    display: flex;
    flex-wrap: nowrap;
    gap: 24px;
    overflow-x: auto;
    padding: 0 12px 10px 12px; 
    scrollbar-width: thin;
    scrollbar-color: var(--accent-color) transparent;
}

.lab-card {
    flex: 0 0 340px; 
    background-color: white;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    box-shadow: 0 6px 12px var(--shadow-color);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

        .lab-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 24px var(--shadow-color);
        }

        .lab-header {
            background-color: var(--primary-color);
            color: white;
            padding: 18px 20px;
            font-size: 1.3rem;
            font-weight: 600;
            text-align: center;
        }

        .lab-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .lab-description p {
            margin: 10px 0;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .lab-link {
            margin-top: 15px;
            display: inline-block;
            padding: 10px 18px;
            background-color: var(--accent-color);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .lab-link:hover {
            background-color: #1c6ea4;
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 30px;
            border-top: 1px solid var(--border-color);
            color: #888;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Лабораторные работы по PHP</h1>
        <div class="subtitle">Учебный проект по программированию на языке PHP</div>
    </header>

    <div class="main-container">
        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №1</div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Система управления пользователями. Реализация классов User и SuperUser с использованием ООП в PHP.</p>
                    <p>Демонстрация создания, вывода информации и удаления пользователей.</p>
                </div>
                <a href="lab1.php" class="lab-link">Открыть работу</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №2</div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Паттерны проектирования в PHP: порождающие, структурные и поведенческие.</p>
                    <p>Практические примеры реализации.</p>
                </div>
                <a href="lab2.php" class="lab-link">Открыть работу</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №3</div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Реализация MVC, Singleton и Factory Method. Создание диаграмм с PlantUML.</p>
                </div>
                <a href="lab3.php" class="lab-link">Открыть работу</a>
            </div>
        </div>

        <div class="lab-card">
            <div class="lab-header">Лабораторная работа №4</div>
            <div class="lab-content">
                <div class="lab-description">
                    <p>Работа с файлами и сессиями. Хранение пользовательских настроек между запросами.</p>
                </div>
                <a href="lab4.php" class="lab-link">Открыть работу</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>PHP Student Project &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
    </div>
</body>
</html>
