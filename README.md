# DHT11 → MySQL Logger

A DHT sensor on an ESP8266 pushes temperature and humidity readings to a PHP endpoint, which writes them into MySQL.

## Pieces
- `DHT_SQL/DHT_SQL.ino` — ESP8266 + DHT22 sketch that reads the sensor and calls the PHP endpoint with the readings every 30 seconds.
- `dht11.php` — receives `temperature` and `humidity` as query params and inserts them into a MySQL table via `mysqli`.

## Use
1. Flash the `.ino` with your Wi-Fi credentials and server address.
2. Host `dht11.php` on a PHP + MySQL server reachable from the board, with a database matching the table/columns the script inserts into.

College project, 2019–2021.
