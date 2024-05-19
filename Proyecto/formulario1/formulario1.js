//(funcion)(){
var formulario1 = document.getElementById("formulario1"),
  nombre = formulario1.nombre,
  apellido = formulario1.apellido,
  correo = formulario1.correo,
  contraseña = formulario1.contraseña,
  direccion = formulario1.direccion,
  telefono = formulario1.telefono,
  ciudad = formulario1.ciudad,
  sexo = formulario1.sexo,
  terminos = formulario1.terminos,
  error = document.getElementById("error");
function validarNombre(e) {
  if (nombre.value == "" || nombre == null) {
    console.log("Completa el nombre");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Un Nombre</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarApellido(e) {
  if (apellido.value == "" || apellido == null) {
    console.log("Completa el apellido");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Un apellido</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}

function validarCorreo(e) {
  if (correo.value == "" || correo == null) {
    console.log("Completa el correo");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Un Email</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarContraseña(e) {
  if (contraseña.value == "" || contraseña == null) {
    console.log("Completa el contraseña");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Una Contraseña</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarDireccion(e) {
  if (direccion.value == "" || direccion == null) {
    console.log("Completa el direccion");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Una Direccion</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarTelefono(e) {
  if (telefono.value == "" || telefono == null) {
    console.log("Completa el telefono");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Un Telefono</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarCiudad(e) {
  if (ciudad.value == "" || ciudad == null) {
    console.log("Completa el ciudad");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Ingresa Un Ciudad</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarSexo(e) {
  if (sexo.value == "" || sexo.value == null) {
    console.log("Selecciona Un Sexo");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Selecciona Un Sexo</li>";
    e.preventDefault();
  } else {
    error.style.display = "none";
  }
}
function validarTerminos(e) {
  if (terminos.checked == false) {
    console.log("Acepta Los Terminos");
    error.style.display = "block";
    error.innerHTML = error.innerHTML + "<li>Acepta Los Terminos</li>";
    e.preventDefault();
  } else if (
    nombre.value == "" ||
    nombre == null ||
    apellido.value == "" ||
    apellido == null ||
    correo.value == "" ||
    correo == null ||
    contraseña.value == "" ||
    contraseña == null ||
    direccion.value == "" ||
    direccion == null ||
    telefono.value == "" ||
    telefono == null ||
    ciudad.value == "" ||
    ciudad == null ||
    sexo.value == "" ||
    sexo.value == null
  ) {
    error.style.display = "block";
  }
}

function validarForm(e) {
  error.innerHTML = "";
  error.style.display = "block";
  validarNombre(e);
  validarApellido(e);
  validarCorreo(e);
  validarContraseña(e);
  validarDireccion(e);
  validarTelefono(e);
  validarCiudad(e);
  validarSexo(e);
  validarTerminos(e);
}

formulario1.addEventListener("submit", validarForm);

//}())
