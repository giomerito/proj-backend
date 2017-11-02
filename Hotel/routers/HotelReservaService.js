var express = require('express');
var router = express.Router();
var http = require('http');
var request = require('request');
var unirest = require('unirest');
var requestify = require('requestify');


var axios = require('axios');
var url = "http://localhost:8000/api/reserva";

//consulta todas as reservas
router.get('/reservas', function (req, res) {
    var dados = axios.get(url).then(response => {
        res.json(response.data);
    });
    return dados;
});

router.get('/reserva/:id', function (req, res) {
    var id = req.params.id;

    var dados = axios.get(url + "/" + id).then((resposta) => {
        res.json(resposta.data);
    });
    return dados;
});

router.post('/reserva', function (req, res) {

    var cliente = req.params.cliente_id;
    var quarto = req.params.quarto_id;
    var entrada = req.params.data_entrada;
    var saida = req.params.data_saida;
    var options = {
        method: "POST",
        url: url,
        json: true,
        form: {
            cliente, quarto, entrada, saida
        },
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    };

    request(options, function (err, response, body) {
        if (!err && response.statusCode === 200) {
            res.json({Cadastro: body});
        } else {
            res.json({
                Mensagem: 'Erro na gravação!',
                Status: response.statusCode
            });
        }
    });


});

module.exports = router;