var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var QuartoSchema = new Schema({
    quarto: String,
    descricao: String,
    andar: Number
});

module.exports = mongoose.model('Quarto', QuartoSchema);
