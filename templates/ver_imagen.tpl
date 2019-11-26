{include file="header.tpl"}

<div class="text-center">
    {foreach from=$lista_imagen item=imagen}
            <img src="{$imagen->img}">
    {/foreach}
</div>
{include file="footer.tpl"}



 