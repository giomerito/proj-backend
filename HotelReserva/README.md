# Projeto HotelReserva

## Para rodar este projeto 

É preciso ter na maquina o PHP instalado, caso não tenho segue link abaixo 

- Link => <a href="http://windows.php.net/download#php-7.1">PHP</a> para Windows

Junto com o PHP é preciso também ter a instalação do Composer segue link

- Link => <a href="https://getcomposer.org/Composer-Setup.exe">Composer</a> para Windows

Com ambos instalados agora pode por para rodar o comando abaixo

- composer install

que ele instalará o restante das dependecias

Mais ainda tem uma instalação importante, que é um servidor apache segue link abaixo

- Link => <a href="https://www.apachefriends.org/xampp-files/5.6.31/xampp-win32-5.6.31-0-VC11-installer.exe">Xampp 32Bits</a>

Inicia o apache com o banco Mysql

Depois do Mysql iniciado é preciso criar uma base de dados com o nome de "hotel" desta forma

Depois que tiver tudo finalizado é só colocar o comando:

- php artisan migrate

que é para a criação das tabelas
depois disto e por ultimo o comando:

- php artisan serve

Para rodar o sistema, se tudo der certo estará rodando na porta 8000

- Http:localhost:8000/api/reserva para controlar as reservas
- Http:localhost:8000/api/cliente para controlar os clientes
