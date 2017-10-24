var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var AndarSchema = new Schema({
    andar: String,
    qtd_quartos: Number,             
});

module.exports = mongoose.model('Andar', AndarSchema);