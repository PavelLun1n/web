<?php
// Лабораторная работа №4 - Работа с файлами и сессиями
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №4 - Работа с файлами и сессиями</title>
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
        <h1>Лабораторная работа №4</h1>
        <div class="subtitle">Работа с файлами и сессиями</div>
    </header>

    <div class="section-container">
        <h2 class="section-title">Новостная система</h2>
        <div class="description">
            <p>В рамках данной лабораторной работы реализована система управления новостями с использованием базы данных SQLite.</p>
            <p>Реализован класс NewsDB, который позволяет работать с новостной системой через интерфейс INewsDB.</p>
            <p>Система размещена в каталоге <code>news/</code> и доступна по ссылке:</p>
        </div>
        <a href="./news/news.php" class="demo-link" target="_blank">Перейти к новостной системе</a>
    </div>

    

    <div class="footer">
        <p>PHP Student Project &copy; <?php echo date('Y'); ?>. Все права защищены.</p>
    </div>
</body>
</html> 
