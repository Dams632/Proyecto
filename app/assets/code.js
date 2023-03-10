const app = new (function () {
    this.tbody = document.getElementById("mostrar");
    this.cod_cancha = document.getElementById("cod_cancha");
    this.nombre = document.getElementById("nombre");
    this.capacidad = document.getElementById("capacidad");

    this.listar_cancha = () => {
      fetch("../controller/listar_cancha.php")
        .then((res) => res.json())
        .then((data) => {
          this.tbody.innerHTML = "";
          data.forEach((item) => {
            this.tbody.innerHTML += `
              <tr>
                <td>${item.cod_cancha}</td>
                <td>${item.nombre}</td>
                <td>${item.capacidad}</td>
                <td>
                  <a href="javascript:;" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">Editar</a>
                  <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">Eliminar</a>
                </td>
              </tr>
            `;
          });
        })
        .catch((error) => console.log(error));
    }
});
/*const app1=new(function(){
    this.tbody=document.getElementById("tbody");
    this.listado=()=>{
        fetch("../controller/listarUsuario.php")
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
})();*/
app.listado();
