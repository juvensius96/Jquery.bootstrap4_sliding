<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#button-flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel{
  padding: 5px;
  text-align: center;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
  text-align: center;
}
</style>
</head>
<body>

<div>
<button type="button" class="btn btn-outline-primary" id="button-flip">View/Hide</button>
</div>
<div id="panel">Ini adalah contoh slider menggunakan jquery, bisa upslide dan downslide hanya menggunakan 1 tombol saja.</div>

</body>
</html>
