# Asterisk Rooms

Интерфейс для мониторинга конференц-комнат в **Asterisk**.

## Возможности

- Удаление всех пользователей из конференции.
- Удаление определённого пользователя из конференции.
- Поддержка светлого и тёмного интерфейсов.
- Поддержка интернационализации.

### Светлый режим

![UI Light](ui.light.png)

### Тёмный режим

![UI Dark](ui.dark.png)

## Особенности

Кнопки управления конференцией имеют блокировку в 5 секунд после нажатия. Это сделано для того, чтобы позволить Asterisk'у выполнить задачу и обновить у себя информацию по участникам конференции.

## Установка

- Скопировать файлы в директорию на сервере.
- Настроить **Apache** или **Nginx** на выполнение **PHP** в этой директории.
- Закрыть доступ к директории паролем. В файле [`htaccess.txt`](htaccess.txt) находится пример конфигурации для Apache.
