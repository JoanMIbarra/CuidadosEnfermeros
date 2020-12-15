
var express = require('express');
var router = express.Router();

var bd=require('./bd');

//inicio
router.get('/index', function(req, res, next) {
    res.render('index');
  });


 

//valoracion
router.get('/valoracion', function(req, res, next) {
    res.render('form');
  });
  
  
  router.post('/valoracion', function(req, res, next) {
        var registro={
            NumHistoria:req.body.NumHistoria,
            Antecedentes:req.body.Antecedentes
          };
        

          
        bd.query('insert into p1percepcion set ?',registro, function (error,resultado){
            if (error){
                console.log(error);
                return;
            }
        });    
        res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});
  });



//percepcion1
router.get('/alta', function(req, res, next) {
    res.render('percepcion1');
  });
  
  
  router.post('/alta', function(req, res, next) {
  
          for (var Antecedentes in req.body.Antecedentes) {
            if (req.body.Antecedentes) {
              items = req.body.Antecedentes;
              Antecedentes= JSON.stringify(items).replace(/]|[[]|"/g, '',)
              console.log(items);
            }
          }
          var registro={
            NumHistoria:req.body.NumHistoria,
            Antecedentes:Antecedentes
          };
          
        bd.query('insert into p1percepcion set ?',registro, function (error,resultado){
            if (error){
                console.log(error);
                return;
            }
        });    
        res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});
  });

  
//actividad2
router.get('/actividad', function(req, res, next) {
  res.render('actividad2');
});


router.post('/actividad', function(req, res, next) {
      var registro={
          nombre:req.body.nombre,
          apellido:req.body.apellido,
          curso:req.body.curso,
          division:req.body.division,
          FechaNac:req.body.FechaNac,
          turno:req.body.turno,
          email:req.body.email,
          cod_postal:req.body.cod_postal
        };
      bd.query('insert into alumnos set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });    
});

//nutricional3
router.get('/nutricional', function(req, res, next) {
  res.render('nutricional3');
});


router.post('/nutricional', function(req, res, next) {
      var registro={
          nombre:req.body.nombre,
          apellido:req.body.apellido,
          curso:req.body.curso,
          division:req.body.division,
          FechaNac:req.body.FechaNac,
          turno:req.body.turno,
          email:req.body.email,
          cod_postal:req.body.cod_postal
        };
      bd.query('insert into alumnos set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });    
});

//eliminacion4
router.get('/eliminacion', function(req, res, next) {
  res.render('eliminacion4');
});


router.post('/eliminacion', function(req, res, next) {
      var registro={
          nombre:req.body.nombre,
          apellido:req.body.apellido,
          curso:req.body.curso,
          division:req.body.division,
          FechaNac:req.body.FechaNac,
          turno:req.body.turno,
          email:req.body.email,
          cod_postal:req.body.cod_postal
        };
      bd.query('insert into alumnos set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });    
});

//sueño5
router.get('/descanso', function(req, res, next) {
  res.render('suenio5');
});


router.post('/descanso', function(req, res, next) {
      var registro={
          nombre:req.body.nombre,
          apellido:req.body.apellido,
          curso:req.body.curso,
          division:req.body.division,
          FechaNac:req.body.FechaNac,
          turno:req.body.turno,
          email:req.body.email,
          cod_postal:req.body.cod_postal
        };
      bd.query('insert into alumnos set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });    
});

//cognitivo6
router.get('/cognitivo-perceptivo', function(req, res, next) {
  res.render('cognitivo6');
});


router.post('/cognitivo-perceptivo', function(req, res, next) {
      var registro={
          nombre:req.body.nombre,
          apellido:req.body.apellido,
          curso:req.body.curso,
          division:req.body.division,
          FechaNac:req.body.FechaNac,
          turno:req.body.turno,
          email:req.body.email,
          cod_postal:req.body.cod_postal
        };
      bd.query('insert into alumnos set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });    
});




  module.exports = router;