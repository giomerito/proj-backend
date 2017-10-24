var express = require('express');
var router = express.Router();
var AndarController = require('../controllers/AndarController');


router.get('/lista', function(req, res){
    AndarController.list(function(resp){
        res.json(resp);
    });
});

router.post('/incluir', function(req, res){
    var andar = req.body.andar;
    var qtd_quartos = req.body.qtd_quartos;    

    AndarController.save(andar, qtd_quartos, function(resp){
        res.json(resp);
    });
});

router.delete('/delete/:id', function(req, res){
    var id = req.params.id;

    AndarController.delete(id, function(resp){
        res.json(resp);
    });
  });

module.exports = router;
