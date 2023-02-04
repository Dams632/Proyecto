const app1=new(function(){
    this.tbody=document.getElementById("tbody");
    this.listado=()=>{
        fetch("../controller/crudControlador.php")
        .then((res)=>res.json( ))
        .then((data)=>{
            this.tbody.innerHTML="";
            data.forEach(item=>{
                this.tbody.innerHTML+=
                <tr>
                    <td>${item.user}</td>
                    <td>${item.tipo}</td>
                    <td>${item.nombre}</td>
                    <td>
                        <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</a>
                        <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.editar(${item.id})">Eliminar</a>
                    </td>
                </tr>
                
            })
        })
        .catch((error)=>condole.log(error));
    }
})();
app1.listado();
