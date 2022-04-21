<?php
// autoload.php
// [rebuilded] 20/02/2022
// esta funcion elimina el hecho de estar agregando los modelos manualmente
// by edoxxlts

function lb_autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}

spl_autoload_register("lb_autoload");

?>