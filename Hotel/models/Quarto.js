var restful = require('node-restful');
var mongoose = restful.mongoose;
var Schema = mongoose.Schema;

var QuartoSchema = new Schema({
    quarto: {type: String, required: true},
    descricao: {type: String, required: true},
    andar: {type: Number, required: true},
    status: {type: String} 
});

module.exports = restful.model('Quarto', QuartoSchema);
