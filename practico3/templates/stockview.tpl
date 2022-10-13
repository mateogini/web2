{include file="header.tpl"}
{include file="footer.tpl"}
<div>
    <p class="fw-bold"> Listado de Categorias: </p>
    <table class="table">  
     {foreach from=$tipos item=$tipo}
            <tr>
              <td value="{$tipo->id_envase}">{$tipo->envase}</td>
            </td>
            {{/foreach}} 
    </table>   
</div>   

<div>
    <p class="fw-bold">Filtrar por:</p>
    <select class="form-select" name="type_option">
        <option selected>ver todas</option>
        {foreach from=$tipos item=$tipo}
            <option value="{$tipo->id_envase}">{$tipo->tipo}</option>
        {/foreach}    
    </select>
</div>
<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
     <th scope='col'> Envase</th>
     <th scope='col'> Detalle</th>
</tr>
</thead>
    {foreach from=$cocacola item=$coca}
        <tr>
        <td> {$coca->tipo_coca}</td>
        <td> {if $coca->envase === 1}Lata
        {elseif $coca->envase === 2}1 Litro</td>
        {else $coca->envase === 3}3 Litro</td>
        {/if}
        <td><a href="detalle/{$coca->id_stock}" type="button" class="btn btn-outline-dark"{$coca->id_stock}>Detalle</td> </a>
        </tr> 
    {/foreach}

</table>