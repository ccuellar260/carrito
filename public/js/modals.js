//necesito saber la cantidad cotara
console.log('Hola mundbo estamo en el modal xd xd !!!');
$cantidad_ventas = document.getElementById('cant_prod').value;

// document.getElementById('myModal2').showModal();
for (let i = 1; i <= $cantidad_ventas; i++) {
    console.warn('se creo un evetno para el model! '+i);
    let bt_abrir_modal = document.getElementById('bt_abrir_modal'+i);
    // console.log(document.getElementById('myModal'+i));
    bt_abrir_modal.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('entreeeal boton abrir modal! '+i);
       document.getElementById('myModal'+i).showModal();
    });


    let bt_cerrar_modal = document.getElementById('bt_cerrar_modal'+i);
    bt_cerrar_modal.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('entreeeal boton cerrar  modal! '+i);
        document.getElementById('myModal'+i).close();
    });

    let bt_cancel_modal = document.getElementById('bt_cancel_modal'+i);
    bt_cancel_modal.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('entreeeal boton cerrar  modal! '+i);
        document.getElementById('myModal'+i).close();
    });

    let bt_aniadir = document.getElementById('bt_aniadir'+i);
    bt_aniadir.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('entreeeal boton anidor acrrito, con el model!: '+i);
        document.getElementById('myModal'+i).close();
    });
}//end for




