/*const request = require ("request");

request('http://localhost:8000/api/reserva', function(error, response, body){
    console.log('error:', error);
    console.log('response:', response && response.statusCode);
    console.log('body:', body);
});


module.exports = request;
*/

var express = require('express');
var router = express.Router();

//acesso a api HotelReserva com axios
var axios = require('axios');

router.get('/reservas', function(){
  axios.get("http://localhost:8000/api/reserva").then(function(resposta){
      console.log(resposta.data);
  });
});

router.get('/cliente', function(){
  axios.get("http://localhost:8000/api/cliente").then(function(resposta){
      console.log(resposta.data);
  });
});


module.exports = router;
