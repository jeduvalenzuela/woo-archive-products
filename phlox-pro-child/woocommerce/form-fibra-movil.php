<?php ?>
        <form method="post" action="" name="filtros-fibra" action="">
            <h4>Conectividad</h4>
            <fieldset> 
                <input value="fibra-movil" name="conectividad" type="radio">Todos los planes<br>
                <input value="hasta-100-mb" name="conectividad" type="radio">Hasta 100MB<br>
                <input value="hasta-300-mb" name="conectividad" type="radio">Hasta 300MB<br>
                <input value="hasta-600-mb" name="conectividad" type="radio">Hasta 600MB<br>
                <input value="hasta-1000-mb" name="conectividad" type="radio">Hasta 1000MB<br>
            </fieldset> 
            <h4>Cobertura</h4>
            <fieldset onchange="this.form.submit">
                <input value="red-masmovil" name="masmovil" type="checkbox">Red Mas Movil<br>
                <input value="red-movistar" name="movistar" type="checkbox">Red Movistar<br>
                <input value="red-netllar" name="netllar" type="checkbox">Red Netllar<br>
                <input value="red-orange" name="orange" type="checkbox">Red Orange<br>
            </fieldset>
        </form>