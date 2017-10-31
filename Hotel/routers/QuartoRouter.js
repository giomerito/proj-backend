var express = require('express');
var router = express.Router();
var QuartoController = require('../controllers/QuartoController');


router.get('', function (req, res) {
    QuartoController.list(function (resp) {
        res.json(resp);
    });
});

router.post('', function (req, res) {
    var quarto = req.body.quarto;
    var descricao = req.body.descricao;
    var andar = req.body.andar;
    var status = req.body.status;

    QuartoController.save(quarto, descricao, andar, status, function (resp) {
        res.json(resp);
    });
});

router.delete('/:id', function (req, res) {
    var id = req.params.id;

    QuartoController.delete(id, function (resp) {
        res.json(resp);
    });
});

module.exports = router;
