{include file="header.tpl"}
<h2>En este envase, poseemos</h2>
{foreach from=$category item=$categoria}
<ul>
<li>{$categoria->tipo_coca}</li>
</ul>
{/foreach}