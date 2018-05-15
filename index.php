<?php
    require_once 'header.php';
    require_once './clases/AlineacionBarcos.php';
    $nuevaAlineacion = new app\clases\AlineacionBarcos();
    $alineacionesPosibles = $nuevaAlineacion->getAlineacionesPosibles();
?>
            <div class="row">
                <div class="col-md-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Barco
                                </th>
                                <th>
                                    Coordenadas
                                </th>
                                <th>
                                    Orientacion
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    Barco 1
                                </td>
                                <td>
                                    <input name="nombredelacaja" size="2" type="text">
                                    <input name="nombredelacaja" size="2" type="text">
                                </td>
                                <td>
                                    <select name="OS">
                                        <?php
                                           foreach($alineacionesPosibles as $alineacion)
                                           {
                                            echo "<option>$alineacion</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    2
                                </td>
                                <td>
                                    Barco 2
                                </td>
                                <td>
                                    <input name="nombredelacaja" size="2" type="text">
                                    <input name="nombredelacaja" size="2" type="text">
                                </td>
                                <td>
                                    <select name="OS">
                                        <?php
                                           foreach($alineacionesPosibles as $alineacion)
                                           {
                                            echo "<option>$alineacion</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <td>
                                    3
                                </td>
                                <td>
                                    Barco 3
                                </td>
                                <td>
                                    <input name="nombredelacaja" size="2" type="text">
                                    <input name="nombredelacaja" size="2" type="text">
                                </td>
                                <td>
                                    <select name="OS">
                                        <?php
                                           foreach($alineacionesPosibles as $alineacion)
                                           {
                                            echo "<option>$alineacion</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-warning">
                                <td>
                                    4
                                </td>
                                <td>
                                    Barco 4
                                </td>
                                <td>
                                    <input name="nombredelacaja" size="2" type="text">
                                    <input name="nombredelacaja" size="2" type="text">
                                </td>
                                <td>
                                    <select name="OS">
                                        <?php
                                           foreach($alineacionesPosibles as $alineacion)
                                           {
                                            echo "<option>$alineacion</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr class="table-danger">
                                <td>
                                    5
                                </td>
                                <td>
                                    Barco 5
                                </td>
                                <td>
                                    <input name="nombredelacaja" size="2" type="text">
                                    <input name="nombredelacaja" size="2" type="text">
                                </td>
                                <td>
                                    <select name="OS">
                                        <?php
                                           foreach($alineacionesPosibles as $alineacion)
                                           {
                                            echo "<option>$alineacion</option>";
                                           }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <img alt="Bootstrap Image Preview" src="images\grilla.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form role="form">
                        <div class="form-group">

                            <label for="exampleInputEmail1">
                                Email address
                            </label>
                            <input class="form-control" id="exampleInputEmail1" type="email">
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="checkbox">
                        </div> 
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="col-md-6">
                </div>
            </div>
<?php 
    require 'footer.php';
?>