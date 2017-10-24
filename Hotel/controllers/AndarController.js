var Andar = require('../models/Andar');

exports.save = function(andar, qtd_quartos, callback){
    new Andar({
      'andar': '1',
      'qtd_quartos' : 12      
    }).save(function(error, andar){
        if(error){
            callback({error: 'Não foi possivel salvar'});
        }else{
            callback(andar);
        }
    });
}

exports.list = function(callback){
    Andar.find({}, function(error, andares){
        if(error){
            callback({error: 'Não foi possivel encontrar!'});
        }else{
            callback(andares);
        }
    });
}

exports.delete = function(id, callback){
    Andar.findById(id, function(error, andar){
        if(error){
            callback({error: 'Não foi possivel excluir'});
        }else{
            andar.remove(function(error){
                if(!error){
                    callback({resposta: 'Andar excluido com sucesso'});
                }
            });
        }
    });
}
