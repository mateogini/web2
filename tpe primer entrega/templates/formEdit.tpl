{include file="header.tpl"}
  <form action="{BASE_URL}/edit" method= "POST">
   <div class="mb-3">
   <input type="hidden" value="{$cocacolas->id_stock}" name="id_stock">
  <select class="form-select" maria-label="Default select example" value="{$cocacolas->tipo_coca}" name="tipo_coca">
    <option name="tipo_coca">Sabor Original</option>
    <option   name="tipo_coca">Light</option>
    <option   name="tipo_coca">Zero azúcar</option>
    <option   name="tipo_coca">Zero Cherry</option>
    <option  name="tipo_coca">Light sin cafeína</option>
    <option   name="tipo_coca">Energy</option>
    <option   name="tipo_coca">Energy sin azúcares</option>
    <option   name="tipo_coca">Energy Cherry</option>
  </select>
<select class="form-select" value="{$cocacolas->envase}" maria-label="Default select example" name="envase">
  {foreach from=$tipo item=$tipos}
    <option value="{$tipos->id_envase}" name="envase">{$tipos->envase_name}</option>
  {/foreach}
<input type="number"  value="{$cocacolas->stock}" class="form-control" id="exampleFormControlInput1" name="stock" placeholder="stock en packs de 6">
  <button type="submit" class="btn btn-outline-primary">Editar</button>
</div>
  </form>
  {include file="footer.tpl"}
