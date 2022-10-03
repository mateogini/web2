{include file="header.tpl"}
<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
     <th scope='col'> Envaseee </th>
</tr>
</thead>
    {foreach from=$cocacola item=$coca}
        <tr>
        <td> {$coca->tipo_coca}</td>
        <td> {$coca->id_stock}</td>
        </tr>
    {/foreach}
    
</table>
