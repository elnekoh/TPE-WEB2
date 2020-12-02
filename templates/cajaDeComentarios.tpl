{if $rol eq "admin"}
    {include file="vue/comentariosAdmin.vue"}    
{else}
    {include file="vue/comentarios.vue"}
{/if}