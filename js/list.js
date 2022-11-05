"use strict";

const URL = "http://localhost/TP/tp/api/libros/";
//obtiene todos los libros
async function getAll() {
 // try {
    let response = await fetch(URL);
    // if (!response.ok) {
    //     throw new Error("no existe");
    // }
    let libros = await response.json();

    showbooks(libros);
  } //catch (e) {
    //console.log(e);
  //}
//}
function showbooks(libros) {
  let col = document.querySelector("#cards-list");
  col.innerHTML = "";
  for (let libro of libros) {

     let html = `<div class="col-md-3">
     <div class="card">
     <img class="card-img-top" src="${libro.imagen}">
     <div class="card-body">
     <h4 class="card-title"> ${libro.nombre}</h4>
      <p class="card-title">${libro.precio}</p>
      <a type="submit "class="btn btn-primary">Agregar</a>
      <a type="submit "class="btn btn-primary" href="${libro.id}">modificar</a>
     <a type="submit "class="btn btn-primary">eliminar</a>
      </div>
      </div>
      </div> `;
    col.innerHTML += html;
    }
}
getAll();
