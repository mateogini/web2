{include file="header.tpl"}
  <form action="edit" method= "POST">
   <div class="mb-3">
   <input type="hidden" value="{$cocacolas->id_stock}" name="id_stock">
  <select class="form-select" maria-label="Default select example" value="{$cocacolas->tipo_coca}" name="tipo_coca">
    <option value="Sabor Original" name="tipo_coca">Sabor Original</option>
    <option value="Light"  name="tipo_coca">Light</option>
    <option value="Zero Azucar"  name="tipo_coca">Zero azúcar</option>
    <option value="Zero Cherry"  name="tipo_coca">Zero Cherry</option>
    <option value="Light Not Cafeina"  name="tipo_coca">Light sin cafeína</option>
    <option value="Energy"  name="tipo_coca">Energy</option>
    <option value="Energy Not Azucar"  name="tipo_coca">Energy sin azúcares</option>
    <option value="Energy Cherry"  name="tipo_coca">Energy Cherry</option>
  </select>
<select class="form-select" value="{$cocacolas->envase}" maria-label="Default select example" name="envase">
  {foreach from=$tipo item=$tipos}
    <option value="{$tipos->id_envase}" name="envase">{$tipos->envase_name}</option>
  {/foreach}
<input type="text"  value="{$cocacolas->stock}" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" class="btn btn-outline-primary">Editar</button>
</div>
  </form>
  {include file="footer.tpl"}
