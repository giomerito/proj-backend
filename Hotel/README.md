# Projeto Hotel

## Para rodar o sistema
é preciso ter o node instalado na maquina caso já tenha execute o comando abaixo:
 
- npm install

caso não tenho segue o link para o node que já vem com o npm instalado, depois é só rodar o comando

- Link => <a href="https://nodejs.org/dist/v8.9.0/node-v8.9.0-x86.msi">Node</a>

ai o npm istalará todas as dependências do sistema que estará no arquivo package.json

É preciso instalar o MongoDB Link -> <a href="https://baixar.freedownloadmanager.org/Windows-PC/MongoDB/GRATUITO-3.2.7.html">mongodb</a>

Depois de feito é só executar no terminal o comando

- npm run dev

Depois disto seu sistema já esta apto é só fazer as requisições

Segue a URL do sistema para as requisições "GET", "POST", "PUT" e "DELETE"

- Http://localhost:1586/quarto

E para acessar o Microserviço da Reserva em outra API que é a de HotelReserva implementada em PHP 
URL
- Http://localhost:1586/hotel/reserva para consultar todas as reservas
- Http://localhost:1586/hotel/reserva/id para consultar apenas uma reserva

Só que para obter estes dados é preciso rodar a outra aplicação em PHP
que esta descrito no Outro projeto na mesma pasta do proj-backend com o nome de HotelReserva
