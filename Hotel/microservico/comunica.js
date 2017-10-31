var express = require('express');
var router = express.Router();

var http = require('http');
const URL = require('url');
var cheerio = require('cheerio');
var fs = require('fs');
var request = require('request');

//acesso a api HotelReserva com axios
var axios = require('axios');


var res_url = "http://localhost:8000/api/reserva";
var cli_url = "http://localhost:8000/api/cliente";



router.get('/reservas', function () {
    axios.get(res_url).then(function (resposta) {
        console.log(resposta.data);
    });

});

router.get('/cliente', function () {
    axios.get(cli_url).then(function (resposta) {
        console.log(resposta.data);
    });
});




/*
//chamando dados de outro site usando seletores
router.get('/dados', function (req, res) {
    //url = 'http://www.portaldatransparencia.gov.br/PortalComprasDiretasOEOrgaoSuperior.asp?Ano=2015&Valor=86726995548647&Pagina=1';
    request(res_url, function (error, response, html) {
        if (!error) {
            var $ = cheerio.load(html);

            // Objeto que irá armazenar a tabela
            var resultado = [];

            // Passo 3
            // Manipulando o seletor específico para montar nossa estrutura
            // Escolhi não selecionar a primeira linha porque faz parte do header da tabela
            $('#listagem tr:not(:first-child)').each(function (i) {
                // Obtendo as propriedades da tabela.
                // O método .trim() garante que irá remover espaço em branco
                var codigo = $(this).find('td').eq(0).text().trim(),
                        orgao = $(this).find('td').eq(1).text().trim(),
                        valorTotal = $(this).find('td').eq(2).text().trim();

                // Inserindo os dados obtidos no nosso objeto
                resultado.push({
                    codigo: codigo,
                    orgao: orgao,
                    total: valorTotal
                });
                fs.writeFile('resultado.json', JSON.stringify(resultado, null, 4), function (err) {
                    console.log('JSON escrito com sucesso! O arquivo está na raiz do projeto.');
                });
            });
        }
    });
});

*/
/*
 router.get('/teste', function () {


 http.get(res_url, (res) => {
 const {statusCode} = res;
 const contentType = res.headers['content-type'];

 let error;
 if (statusCode !== 200) {
 error = new Error('Request Failed.\n' +
 `Status Code: ${statusCode}`);
 } else if (!/^application\/json/.test(contentType)) {
 error = new Error('Invalid content-type.\n' +
 `Expected application/json but received ${contentType}`);
 }
 if (error) {
 console.error(error.message);
 // consume response data to free up memory
 res.resume();
 return;
 }

 res.setEncoding('utf8');
 let rawData = '';
 res.on('data', (chunk) => {
 rawData += chunk;
 });
 res.on('end', (res) => {
 try {
 const parsedData = JSON.parse(rawData);
 console.log(parsedData);
 } catch (e) {
 console.error(e.message);
 }
 });
 }).on('error', (e) => {
 console.error(`Got error: ${e.message}`);
 });

 });
 */
module.exports = router;
