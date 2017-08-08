<?php include 'header.php'?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="col s12 m12 l12 title-advanced-search">
                <div class="row ">
                    <h1>Busca Avançada</h1>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="col s12 m12 l4 title-tipo-vehicle-advanced-search">
                        <p>Tipo</p>
                        <form action="#">
                            <p class="col s12 m12 l2 div-single-option">
                                <input type="checkbox" id="test1" />
                                <label for="test1">Carro</label>
                            </p>
                            <p class="col s12 m12 l2 div-single-option">
                                <input type="checkbox" id="test2" />
                                <label for="test2">Moto</label>
                            </p>
                        </form>
                    </div>
                    <div class="col s12 m12 l6 title-tipo-vehicle-advanced-search">
                        <p>Estado de Conservação</p>
                        <form action="#">
                            <p class="col s12 m12 l2 div-single-option">
                                <input type="checkbox" id="test3" />
                                <label for="test3">Novo</label>
                            </p>
                            <p class="col s12 m12 l2 div-single-option">
                                <input type="checkbox" id="test4" />
                                <label for="test4">Seminovo</label>
                            </p>
                            <p class="col s12 m12 l2 div-single-option">
                                <input type="checkbox" id="test5" />
                                <label for="test5">Usado</label>
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <!--Cards-->
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="col s12 m12 l3">
                        <div class="card z-depth-2 card-options-advanced-search">
                            <div class="card-content black-text">
                                <select multiple>
                                    <option value="" disabled selected>Marca</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card z-depth-2 card-options-advanced-search">
                            <div class="card-content black-text">
                                <select multiple>
                                    <option value="" disabled selected>Modelo</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card z-depth-2 card-options-advanced-search">
                            <div class="card-content black-text">
                                <select>
                                    <option value="" disabled selected>Ano De:</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m12 l3">
                        <div class="card z-depth-2 card-options-advanced-search">
                            <div class="card-content black-text">
                                <select>
                                    <option value="" disabled selected>Ano Até:</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'?>
