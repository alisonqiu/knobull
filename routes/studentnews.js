var express = require('express');
var router = express.Router();
var app = express();

/* GET users listing. */
router.get('/', function(req, res) {
  res.render('studentnews');
});

module.exports = router;