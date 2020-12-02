{literal}
<div id="vueComentarios">
    <h2 class="titulo">caja de comentarios</h2>
    <ul class="cajaDeComentarios">
        <li v-for="comentario in comentarios" class="comentario">
            <div class="comentario">
                <h5 class="usuario">{{ comentario.nombre }}</h2>
                <h6>PUNTUACION: {{ comentario.puntuacion }}</h6>
                <p>{{ comentario.contenido }}</p>
                <button type="button" class="btn btn-danger btnDelete" :data-id-comentario="comentario.id_comentario">borrar</button>
            </div>
        </li>
    </ul>
</div>
{/literal}