var express = require('express');
var router = express.Router();
var QuartoController = require('../controllers/QuartoController');


router.get('/lista', function(req, res){
    QuartoController.list(function(resp){
        res.json(resp);
    });
});

router.post('/incluir', function(req, res){
    var quarto = req.body.quarto;
    var descricao = req.body.descricao;;
    var andar_id = req.body.andar_id;

    QuartoController.save(quarto, descricao, andar_id, function(resp){
        res.json(resp);
    });
});

router.delete('/delete/:id', function(req, res){
    var id = req.params.id;

    QuartoController.delete(id, function(resp){
        res.json(resp);
    });
  });

module.exports = router;
