{include file="header.tpl"}
<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
     <th scope='col'> Envasee</th>
</tr>
</thead>
    {foreach from=$cocacola item=$coca}
        <tr>
        <td> {$coca->tipo_coca}</td>
        <td> {if $coca->envase === 1}Lata</td>
        <td> {else $coca->envase === 2}1 Litro</td>
        {/if}
        </tr>
    {/foreach}
    
</table>
