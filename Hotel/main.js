var app = require('./config/app-config');
var db = require('./config/db-config');
var user = require('./models/Quarto');
var quarto = require('./routers/QuartoRouter');
var andar = require('./routers/AndarRouter');

app.get('', function(req, res){
    res.end('Bem vindo a API de Hotel');
});

//Rotas dos quartos
app.use('/quartos', quarto);
app.use('/andares', andar);
