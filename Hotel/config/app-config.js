var express = require('express');
var bodyParser = require('body-parser');
const porta = process.env.PORT || 1586;

var app = module.exports = express();

app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());

//cors - para uso externo da API
app.use(function(req, res, next){
    res.setHeader('Access-Control-Allow-Origin','*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE');
    res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type, Authorization');
    next();
});

app.listen(porta, function(){
    console.log('Servidor rodando na porta: %s', porta);
});