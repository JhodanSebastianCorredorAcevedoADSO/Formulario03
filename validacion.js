const formulario = document.getElementById('formulario');
const numero1 = document.getElementById('numero1');
const numero2 = document.getElementById('numero2');
const numero3 = document.getElementById('numero3');
const operacion = document.getElementsByName('calculos');
const btnEnviar = document.getElementById('btn-enviar');

const soloNumeros = (e) => {
    if ((e.keyCode < 48 || e.keyCode > 57) && e.keyCode) {
        e.preventDefault()
    }
}

const campo_vacio = (e) =>{
    for(let i = 0; i < operacion.length; i++){
        if(operacion[i].checked){
            return true
        }
    }
}

let enviarFormulario = formulario => {
    formulario.submit()
}

const validacion = (e) => {
    e.preventDefault()

    if (numero1.value == "") {
        alert("Debe ingresar un primer numero")
        numero1.focus()
        return false
    }

    if (numero2.value == "") {
        alert("Debe ingresar un segundo numero")
        numero2.focus()
        return false
    }

    if (numero3.value == "") {
        alert("Debe ingresar un tercer numero")
        numero3.focus()
        return false
    }

    if(!campo_vacio()){
        alert("selecciona como desea calcular")
        return false
    }

    enviarFormulario(formulario)

}

numero1.addEventListener('keypress', soloNumeros)
numero2.addEventListener('keypress', soloNumeros)
numero3.addEventListener('keypress', soloNumeros)

btnEnviar.addEventListener('click', validacion)