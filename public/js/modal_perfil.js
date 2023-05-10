


// $mod = document.getElementById('model')
// $ban = false;
// document.getElementById('bt_model').addEventListener('click', e => {
//     if($ban){
//         console.log('click xd ');
//         console.log($mod);
//         $mod.classList.add("hidden");
//         // document.getElementById('svg_model').setAttribute("aria-hidden", false);
//         console.log($mod);
//         $ban = false;
//     }else{
//         $mod.classList.remove("hidden");
//         $ban = true;
//         // document.getElementById('svg_model').setAttribute("aria-hidden", true);
//     }
// });
$model_perfil = document.getElementById('model_perfil')
document.getElementById('div_model_perfil').addEventListener('mouseover', e => {
        $model_perfil.classList.remove("hidden");
});

document.getElementById('div_model_perfil').addEventListener('mouseout', e => {
        $model_perfil.classList.add("hidden");
});


$mod = document.getElementById('model_dir')
$div_dir = document.getElementById('div_direccines')
$ban = false;
document.getElementById('bt_model_dir').addEventListener('click', e => {
    if($ban){
        $mod.classList.add("hidden");
        $ban = false;
    }else{
        $mod.classList.remove("hidden");
        $ban = true;
    }
});

document.addEventListener('click', function(event) {
    // Comprueba si el clic se ha hecho dentro del div o fuera
    if (!$div_dir.contains(event.target)) {
        if($ban){
            $mod.classList.add("hidden");
            $ban = false;
        }
        // console.log('afuera')
    }else{
        // console.log('adentro')
    }
});

