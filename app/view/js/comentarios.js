document.addEventListener("DOMContentLoaded",function(){
    //VUE
    let app = new Vue({
        el: '#vueComentarios',
        data:{
            comentarios: []
        }
    });



    let id = window.location.href.split("/");
    id = id[id.length-1];
    getComentarios(id);



    try {
        document.querySelector('#comentariosForm').addEventListener('submit', e => {
            e.preventDefault();
            insertarComentario();
        });  
    } catch (error) {
        console.log(error);
    }

    function asignarEvent(){
        try {
            let botones =  document.querySelectorAll(".btnDelete");
            for (let i = 0; i < botones.length; i++) {
                botones[i].addEventListener("click",e =>{
                    e.preventDefault();
                    document.querySelectorAll(".btnDelete")
                    let id =document.querySelectorAll(".btnDelete")[i].getAttribute("data-id-comentario");
                    console.log(id)
                    borrarComentario(id);
                });
            }
        } catch (error) {
            console.log(error); 
        }
    }

    


    //funciones AB
    function getComentarios(id){
        fetch('api/comentarios/'+id)
        .then(response => response.json())
        .then(comentarios => app.comentarios =comentarios)
        .catch(error => console.log(error));
        setTimeout(function() {
            asignarEvent();
     }, 100);
    }
    
    function insertarComentario(){
        let json = {
            "contenido": document.querySelector("#contenido").value,
            "puntuacion": document.querySelector("#puntuacion").value,
            "id_user": document.querySelector("#id_user").innerHTML,
            "id_pelicula": id
        };
        fetch('api/comentarios',{
            method: "POST",
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify(json)
        })
        .then(response => response.json())
        .then(comentario => app.comentarios.push(comentario))
        .catch(error => console.log(error));
        
    }
    
    function borrarComentario(id_comentario){
        fetch('api/comentarios/'+id_comentario,{
            method: "DELETE"
        })
        .then(response => response.json())
        .then(getComentarios(id))
        .catch(error => console.log(error));
    }
});
