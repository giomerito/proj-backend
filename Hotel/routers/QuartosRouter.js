var express = require('express');
var router = express.Router();
var QuartoController = require('../controllers/QuartoController');


router.get('/', function(req, res){
    QuartoController.list(function(resp){
        res.json(resp);
    });
});

router.post('/quarto', function(req, res){
    var quarto = req.body.quarto;
    var descricao = req.body.descricao;;
    var andar_id = req.body.andar_id;

    QuartoController.save(quarto, descricao, valor, function(resp){
        res.json(resp);
    });
});

router.delete('/quarto/:id', function(req, res){
    var id = req.params.id;

    QuartoController.delete(id, function(resp){
        res.json(resp);
    });
  });

module.exports = router;
