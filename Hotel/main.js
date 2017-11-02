var app          = require('./config/app-config');
var db           = require('./config/db-config');
var user         = require('./models/Quarto');
var quarto       = require('./routers/QuartoRouter');
var andar        = require('./routers/AndarRouter');
var HotelReserva = require('./routers/HotelReservaService');

app.get('', function(req, res){
    res.end('Bem vindo a API de Hotel');
});

//Rotas dos quartos
app.use('/quarto', quarto);
app.use('/andar', andar);
app.use('/hotel', HotelReserva);
