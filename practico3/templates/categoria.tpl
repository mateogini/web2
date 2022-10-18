{include file="header.tpl"}
<h2>En este envase, poseemos</h2>
{foreach from=$category item=$categoria}
{if $categoria->tipo_coca!=""}
<ul>
<li>{$categoria->tipo_coca}</li>
</ul>
{else}
<h3>No poseemos stock</h3>
{/if}
{/foreach}

{include file="footer.tpl"}
