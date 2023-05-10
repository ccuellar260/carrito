
//------- Pa las cargar Fotos del explorar de archivos --------
let file_foto = document.getElementById('file_foto_ventas');
let bt_subir_foto = document.getElementById('button_subir_foto');
let imagen = document.getElementById('img_fotoventas');


//llamar al exploradoro de archivos
bt_subir_foto.addEventListener('click',(e)=>{
    e.preventDefault();
    file_foto.click();
});

//lpara mostrar la imagen qeu se esta cargano
file_foto.addEventListener('change',()=>{
    let url_foto = URL.createObjectURL(file_foto.files[0]);
    imagen.src = url_foto;
});


//dar click a los input selector
function selectInput(num) {
    console.log('hola entre al clip '+'option '+num)
    input = document.getElementById('option'+num)
    console.log(input)
    input.checked = !input.checked;
}






// document.getElementById('ModalCreateCat').showModal();
  //---------------- modals para crear opciones -------------------
  let bt_abrir_modal = document.getElementById('bt_crear_op');
bt_abrir_modal.addEventListener('click', e => {
    //prevenir el evnto que viene por efauld
    e.preventDefault();
    console.warn('entreeeal boton abrir modal!');
   document.getElementById('ModalCreateCat').showModal();
});

let bt_cerrar_modal = document.getElementById('bt_cerrar-modal');
bt_cerrar_modal.addEventListener('click', e => {
    //prevenir el evnto que viene por efauld
    e.preventDefault();
    console.warn('entreeeal boton cerrar  modal!');
    document.getElementById('ModalCreateCat').close();
});

let bt_guardar_modal = document.getElementById('crearOP');
bt_guardar_modal.addEventListener('click', e => {
    //prevenir el evnto que viene por efauld
    e.preventDefault();
    // console.warn('entreeeal boton cerrar  modal!');
    document.getElementById('ModalCreateCat').close();
    console.log('le di claip ')
    $ip= document.querySelectorAll('input[name="opcinesSelect"]');
    opciones = []
    $ip.forEach(e => {
      opciones.push(e.value)
      console.log(e.value)
   });
   //llamar al metodo
   Livewire.emit('actualizarOpciones', opciones);
}); //emd modal crear opciones --------------------------------




  //---------------- modals para Seleccionar opciones -------------------











// document.getElementById('bt_cancelarM_proveedor').addEventListener('click', e => {
//     //prevenir el evnto que viene por efauld
//     e.preventDefault();
//     console.warn('entreeeal boton cerrar  modal!');
//     document.getElementById('myModal_productos').close();
//



//-------------------- Poner por defecto el proveedore seleccionado
/*
let bt_guardar = document.getElementById('bt_guardar_proveedoreM');
    bt_guardar.addEventListener('click', e => {
        e.preventDefault();
        let selecct  =document.getElementById('select_proveedor');
        console.log('entre al boton guardar');
        //console.log(selecct);
        let opt = document.createElement('option');
        opt.selected ='selected';
        opt.value = document.getElementById('nit_buscar').value;
        opt.textContent = document.getElementById('empresa_provee').value;
        selecct.appendChild(opt);


        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let formulario = new FormData();

        console.warn('llegue a form');
        console.log(document.getElementById('persona_contacto_provee').value);
                formulario.append("nit",document.getElementById('nit_buscar').value );
                formulario.append("empresa", document.getElementById('empresa_provee').value);
                formulario.append("direccion", document.getElementById('direccion_provee').value );
                formulario.append("telefono", document.getElementById('telefono_provee').value );
                formulario.append("correo", document.getElementById('correo_provee').value );
                formulario.append("contacto", document.getElementById('persona_contacto_provee').value );
                formulario.append("tipo", document.getElementById('tipo_provee').value );
                fetch("/ProveedorStore", {
                headers: {
                    "X-CSRF-TOKEN": token,
                },
                method: "post",
                body: formulario,
            })  .then((dataxd) => dataxd.json())
                .then((data) => {
                    console.log('ya guarde el proveedor')
                    console.log(data);

                })
                .catch(function (error) {
                        console.error("Error: ", error);

                });
            bt_cerrar_modal.click();
    });

    */


//opcoines, aniade una nueva caja en las opciones que tendra un select
document.getElementById('agregar_opc').addEventListener('click', e => {
    e.preventDefault();
    $inp_opc = document.createElement('input');
    $inp_opc.className = 'outline-none border border-blue-500 w-full rounded focus:border-blue-700 px-2 ';
    $inp_opc.type = 'text';
    $inp_opc.name = 'opcinesSelect';
    document.getElementById('div_opciones').append($inp_opc);
});


































