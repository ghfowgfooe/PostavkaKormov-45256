 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = "pomorov60@mail.ru";
        $subject = "Заявка с сайта: " . $_POST['name'];
        
        $message = "
        <html>
        <head>
            <title>Новая заявка с сайта</title>
        </head>
        <body>
            <h2>🎯 Новая заявка с сайта</h2>
            <p><strong>👤 Имя:</strong> " . $_POST['name'] . "</p>
            <p><strong>📱 Телефон:</strong> " . $_POST['phone'] . "</p>
            <p><strong>📧 Email:</strong> " . ($_POST['email'] ?: 'не указан') . "</p>
            <p><strong>🛒 Продукция:</strong> " . $_POST['product'] . "</p>
            <p><strong>📝 Сообщение:</strong> " . ($_POST['message'] ?: 'нет') . "</p>
            <p><strong>📅 Дата:</strong> " . date('d.m.Y H:i:s') . "</p>
        </body>
        </html>
        ";
        
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: сайт <noreply@ваш-домен.ru>" . "\r\n";
        
        if (mail($to, $subject, $message, $headers)) {
            echo json_encode(['success' => true, 'message' => 'Заявка отправлена']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Ошибка отправки']);
        }
    }
    ?>
    -->
</body>
</html>