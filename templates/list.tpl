{include file="templates/header.tpl" }
{foreach from=$libros item=$libro}
 <div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="{$libro->imagen}"  >
        <div class="card-body">
            <h4 class="card-title">{$libro->nombre}</h4>
            {if isset($smarty.session.IS_LOGGED) }
            <a type="submit"class="btn btn-primary" href="Agregaralcarrito/{$libro->id_libro}" >Agregar </a>
        {/if}
        {if isset($smarty.session.IS_ADMIN)}
        <a class="btn btn-primary" href="form/{$libro->id_libro}">Modificar</a>
        {/if}
        </div>
    </div>  
</div>   
{/foreach}


{include file="templates/footer.tpl"}