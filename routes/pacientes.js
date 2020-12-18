
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

    for (var MotivoIngreso in req.body.MotivoIngreso) {
      if (req.body.MotivoIngreso) {
        items = req.body.MotivoIngreso;
        MotivoIngreso= JSON.stringify(items).replace(/]|[[]|"/g, '',)
        console.log(items);
      }
    }
        var registro={
            nombre:req.body.nombre,
            apellido:req.body.apellido,
            genero:req.body.genero,
            NumHistoria:req.body.NumHistoria,
            residencia:req.body.residencia,
            lugarActual:req.body.lugarActual,
            FechaIngreso:req.body.FechaIngreso,
            FechaValoracion:req.body.FechaValoracion,
            MotivoIngreso:MotivoIngreso,
            ComentarioAdc:req.body.ComentarioAdc
          };
        

          
        bd.query('insert into datosgenerales set ?',registro, function (error,resultado){
            if (error){
                console.log(error);
                return;
            }
        });    
        res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});
  });



//percepcion1
router.get('/percepcion', function(req, res, next) {
    res.render('percepcion1');
  });
  
  
  router.post('/percepcion', function(req, res, next) {
  
          for (var Antecedentes in req.body.Antecedentes) {
            if (req.body.Antecedentes) {
              items = req.body.Antecedentes;
              Antecedentes= JSON.stringify(items).replace(/]|[[]|"/g, '',)
              console.log(items);
            }
          }
          for (var Drogas in req.body.Drogas) {
            if (req.body.Drogas) {
              items = req.body.Drogas;
              Drogas= JSON.stringify(items).replace(/]|[[]|"/g, '',)
              console.log(items);
            }
          }
          for (var MedCual in req.body.MedCual) {
            if (req.body.MedCual) {
              items = req.body.MedCual;
              MedCual= JSON.stringify(items).replace(/]|[[]|"/g, '',)
              console.log(items);
            }
          }
          
          var registro={
            NumHistoria:req.body.NumHistoria,
            Antecedentes:Antecedentes,
            Historial:req.body.Historial,
            FrecuenciaAnio:req.body.FrecuenciaAnio,
            Tabaquismo:req.body.Tabaquismo,
            TabxDia:req.body.TabxDia,
            TabCantAnio:req.body.TabCantAnio,
            Alcohol:req.body.Alcohol,
            AlcxDia:req.body.AlcxDia,
            AlcCantAnio:req.body.AlcCantAnio,
            Drogas:Drogas,
            DroFrecuencia:req.body.DroFrecuencia,
            DroCantAnio:req.body.DroCantAnio,
            Medicacion:req.body.Medicacion,
            MedCual:MedCual,
            ComentarioAdc:req.body.ComentarioAdc

          
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
        Deambulacion:req.body.Deambulacion,
        ActFisica:req.body.ActFisica,
        ActRecreativa:req.body.ActRecreativa,
        Caidas:req.body.Caidas,
        Fr:req.body.FR,
        RitmoFR:req.body.RitmoFR,
        AmplitudFR:req.body.AmplitudFR,
        SimetriaFR:req.body.SimetriaFR,
        FC:req.body.FC,
        RitmoFC:req.body.RitmoFC,
        IntensidadFC:req.body.IntensidadFC,
        TensionFC:req.body.TensionFC,
        AmplitudFC:req.body.AmplitudFC,
        TAsa:req.body.TAsa,
        TAda:req.body.TAda,
        TAss:req.body.TAss,
        TAds:req.body.TAds,
        Alimentacion:req.body.Alimentacion,
        Eliminacion:req.body.Eliminacion,
        Aseo:req.body.Aseo,
        Vestido:req.body.Vestido,
        Movilidad:req.body.Movilidad,
        ComentarioAdc:req.body.ComentarioAdc,
        

        };
      bd.query('insert into p2actividad set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });  
      res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});  
});

//nutricional3
router.get('/nutricional', function(req, res, next) {
  res.render('nutricional3');
});


router.post('/nutricional', function(req, res, next) {
  for (var Calidad in req.body.Calidad) {
    if (req.body.Calidad) {
      items = req.body.Calidad;
      Calidad= JSON.stringify(items).replace(/]|[[]|"/g, '',)
      console.log(items);
    }
  }
  for (var AQue in req.body.AQue) {
    if (req.body.AQue) {
      items = req.body.AQue;
      AQue= JSON.stringify(items).replace(/]|[[]|"/g, '',)
      console.log(items);
    }
  }
  for (var Presencia in req.body.Presencia) {
    if (req.body.Presencia) {
      items = req.body.Presencia;
      Presencia= JSON.stringify(items).replace(/]|[[]|"/g, '',)
      console.log(items);
    }
  }
  for (var CualDieta in req.body.CualDieta) {
    if (req.body.CualDieta) {
      items = req.body.CualDieta;
      CualDieta= JSON.stringify(items).replace(/]|[[]|"/g, '',)
      console.log(items);
    }
  }
  for (var Donde in req.body.Donde) {
    if (req.body.Donde) {
      items = req.body.Donde;
      Donde= JSON.stringify(items).replace(/]|[[]|"/g, '',)
      console.log(items);
    }
  }
      var registro={
          Horarios:req.body.Horarios,
          Liquido:req.body.Liquido,
          Calidad:Calidad,
          Dietas:req.body.Dietas,
          CualDieta:CualDieta,
          Intolerancia:req.body.Intolerancia,
          AQue:AQue,
          CambioPeso:req.body.CambioPeso,
          CuantoPeso:req.body.CuantoPeso,
          Talla:req.body.Talla,
          Peso:req.body.Peso,
          IMC:req.body.IMC,
          Presencia:Presencia,
          HigieneBucal:req.body.HigieneBucal,
          ProblemasBucales:req.body.ProblemasBucales,
          HigienePiel:req.body.HigienePiel,
          Piel:req.body.Piel,
          UPP1:req.body.UPP1,
          Extension1:req.body.Extension1,
          Estadio1:req.body.Estadio1,
          UPP2:req.body.UPP2,
          Extension2:req.body.Extension2,
          Estadio2:req.body.Estadio2,
          UPP3:req.body.UPP3,
          Extension3:req.body.Extension3,
          Estadio3:req.body.Estadio3,
          OtraLesion:req.body.OtraLesion,
          Localizacion:req.body.Localizacion,
          Prurito:req.body.Prurito,
          Edemas:req.body.Edemas,
          Donde:Donde,
          Grado:req.body.Grado,
          Temperatura:req.body.Temperatura,
          ComentarioAdc:req.body.ComentarioAdc

        };
      bd.query('insert into p3nutricional set ?',registro, function (error,resultado){
          if (error){
              console.log(error);
              return;
          }
      });  
      res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});    
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
      res.render('pacientesmensaje',{mensaje:'La tabla se creo correctamente.'});  
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