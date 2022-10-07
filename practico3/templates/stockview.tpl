{include file="header.tpl"}
{include file="footer.tpl"}

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
        {else $coca->envase === 2}1 Litro</td>
        {/if}
        <td><a href="detalle/{$coca->id_stock}" type="button" class="btn btn-outline-dark"{$coca->id_stock}>Detalle</td> </a>
        </tr> 
    {/foreach}
    


</table>