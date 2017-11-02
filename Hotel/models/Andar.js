var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var AndarSchema = new Schema({
    andar: {type: String, required: true},
    qtd_quartos: {type: Number, required: true}             
});

module.exports = mongoose.model('Andar', AndarSchema);