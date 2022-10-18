{include file="header.tpl"}
<form action="{BASE_URL}/editcategory" method= "POST">
<h2>Editar Categoria</h2>
<input type="hidden" value="{$tipos->id_envase}" name="id_envase">
<input type="text" class="form-control" id="exampleFormControlInput1" name="envase_name">
  <button type="submit" class="btn btn-outline-primary">Editar</button>
  </form>
  {include file="footer.tpl"}