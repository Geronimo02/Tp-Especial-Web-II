{include file="templates/header.tpl" }
<h1>Carrito de compras </h1>
<ul class="list-group">
    {foreach from=$libros item=$libro}
   <li class="list-group-item">
<p >{$libro->nombre_libro} | $ {$libro->Total}</p> 
<a class="btn btn-danger" href="delete/{$libro->id_libro}">Borrar</a>
<a class="btn btn-primary" href="add/{$libro->id_libro}">Añadir</a>
</li>
    {/foreach}
</ul>
<button type="submit" class="btn btn-lg btn-primary" href="finalize/{$libro->id_libro}">Finalizar Compra</button>


