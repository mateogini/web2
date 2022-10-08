{include file="header.tpl"}
<h2> {$cocacolas[0]->tipo_coca} </h2>
<p class="text-decoration-underline"> Este sabor, lo contemos en envase de tipo {if $cocacolas[0]->envase === 1} Lata y poseemos de stock, {$cocacolas[0]->stock} packs de 6  unidades {else $cocacolas[0]->envase === 2} 1 Litro y poseemos de stock, {$cocacolas[0]->stock} packs de 6 unidades</p>
  {/if}

