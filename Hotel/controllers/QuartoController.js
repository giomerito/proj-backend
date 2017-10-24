var Quarto = require('../models/Quarto');

exports.save = function(quarto, descricao, andar_id, callback){
    new Quarto({
      'quarto': quarto,
      'descricao' : descricao,
      'andar_id': andar_id
    }).save(function(error, quarto){
        if(error){
            callback({error: 'Não foi possivel salvar'});
        }else{
            callback(quarto);
        }
    });
}

exports.list = function(callback){
    Quarto.find({}, function(error, quartos){
        if(error){
            callback({error: 'Não foi possivel encontrar!'});
        }else{
            callback(quartos);
        }
    });
}

exports.delete = function(id, callback){
    Quarto.findById(id, function(error, quarto){
        if(error){
            callback({error: 'Não foi possivel excluir'});
        }else{
            quarto.remove(function(error){
                if(!error){
                    callback({resposta: 'Quarto excluido com sucesso'});
                }
            });
        }
    });
}
