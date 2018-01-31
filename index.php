<!DOCTYPE html>
<html>
<head>
    <title>Clima</title>
</head>
<form method= "POST" class="form-horizontal" action= "guardar.php" >
<div class='form-group'>
<label for='inputName' class='control-label col-xs-2'>Seleccione Ciudad</label>
      <div class="col-xs-10">
        <select name="ciudad" required  class="form-control miselect">
  
      <?php
      
      require_once("collectorCiudad.php");
      $obUsua= new CiudadCollector();
      foreach ($obUsua->showCiudades() as $usuario) {
        
       echo  "<option value='".$usuario->getId()."'>".$usuario->getNombre()." </option>";
      
      }
      ?>
        </select>
      
    </div>
</div>     
   
     <div class="form-group">
         <label >Hora:</label>
         <div >
             <input name = "hora" type="text" id= "Ciudad" class="form-control" placeholder="Ciudad" autofocus required/>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Dia:</label>
         <div class="col-xs-10 misopciones">
             <input name = "dia" type="text" id= "Ciudad" class="form-control" placeholder="Ciudad" autofocus required/>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Mes:</label>
         <div class="col-xs-10 misopciones">
             <input name = "mes" type="text" id= "Ciudad" class="form-control" placeholder="Ciudad" autofocus required/>
         </div>
     </div>
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Temperatura:</label>
         <div class="col-xs-10 misopciones">
             <input name = "temperatura" type="text" id= "Ciudad" class="form-control" placeholder="Ciudad" autofocus required/>
         </div>
     </div>
     

     <div class="form-group">
    
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary">Guardar</button>
         </div>
     </div>
</form>
<a href="ver.php">Ver</a>
<body>

</body>
</html>
