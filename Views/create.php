<?php
     require_once("assets/head.php");
?>


<div class="container">
        <div class="row vh-40 justify-content-center align-item-center">
            <div class="mt-5 mb-5 col-auto p-5 card"  style="display:flex; height:100%; padding-bottom:-20px; background-Color:rgb(173, 216, 230)">
                <form action="../Controllers/LibroController.php?requestBook=insert" method="POST" >
                    <fieldset class="" >
                        <legend>Registrar</legend>
                            <div class="row-cols-sm-1 mb-3 input-group">
                                <label class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nameBook">
                            </div>
        
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Volumen</label>
                                <select id="disabledSelect" class="form-select" name="volumen">
                                    <option>Volumen</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Etiqueta</label>
                                <input type="text" class="form-control" name="etiqueta">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Autor</label>
                                <input type="text" class="form-control" name="autor">
                            </div>

                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Estatus</label>
                                <select id="disabledSelect" class="form-select" name="estatus">
                                    <option>Estatus</option>
                                    <option value="1">Activo</option>
                                    <option value="0">Desactivar</option>
                                </select>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>


<?php
    require_once("assets/footer.php");
?>