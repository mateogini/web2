{include file="header.tpl"}


<table class="table table-dark table-striped">
<thead>
<th>N°</th>
<th>Listado de categorias </th>
<th>Ver Por: </th>
{if isset($smarty.session.USER_EMAIL)}
<th>Borrar </th>
<th>Editar</th>
{/if}

<tbody> {foreach from=$tipos item=$tipo}
        <tr>
        <td scope="col">{$tipo->id_envase}</td>
        <td>{$tipo->envase_name}</td>
        <td><a type="button" href="list/{$tipo->id_envase}" value="{$tipo->id_envase}">{$tipo->envase_name}</a></td>
        {if isset($smarty.session.USER_EMAIL)}
            <td><a href="deletecat/{$tipo->id_envase}" type="button" class="btn btn-outline-danger"value="{$tipo->id_envase}">Borrar </a></td>
            <td><a href="editcat/{$tipo->id_envase}" type="button" value="{$tipo->id_envase}" class="btn btn-info">Editar</td> </a>

        {/if}
        </tr> 
    </tbody>    
{/foreach}

    </table>
<table class="table">
<thead>
<tr class="table-danger">
    <th scope='col'> Coca Cola </th>
    <th scope='col'> Envase</th>
     <th scope='col'> Detalle</th>
     {if isset($smarty.session.USER_EMAIL)}
     <th>Borrar</th>
     <th>Editar</th>
    {/if}
</tr>
</thead>
<tbody>
    {foreach from=$cocacola item=$coca}
        <tr>
        <td>{$coca->tipo_coca}</td>
        <td>{$coca->envase}</td> 
        <td><a href="detalle/{$coca->id_stock}" type="button" class="btn btn-outline-dark"{$coca->id_stock}>Detalle</td> </a>
        {if isset($smarty.session.USER_EMAIL)}
        <td><a href="delete/{$coca->id_stock}" type="button" class="btn btn-outline-danger"{$coca->id_stock}>Borrar </td> </a>
        <td><a href="formedit/{$coca->id_stock}" type="button" class="btn btn-info">Editar</td> </a>
        {/if}
        </tr> 
    {/foreach}
    </tbody>

</table>

{include file="footer.tpl"}