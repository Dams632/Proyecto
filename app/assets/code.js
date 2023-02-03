const app = new (function () {
    this.tbody = document.getElementById("tbody");
    this.cod_cancha = document.getElementById("cod_cancha");
    this.nombre = document.getElementById("nombre");
    this.capacidad = document.getElementById("capacidad");

    this.listar_cancha = () => {
      fetch("../controllers/listar_cancha.php")
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
app.listar_cancha();