<?php include 'header.php'; ?>
<?php include 'basic-search.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l4">
            <div class=" col s12 m12 l12 description-vehicle">
                <h1>Fiat Stilo Duologic 1.8 Attractive Flex 8v 5p </h1>
                <p><strong>R$ 30.000,00</strong></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">date_range</i><strong>Ano:</strong> 2017/2017</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">av_timer</i><strong>KM:</strong> 116000</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">color_lens</i><strong>Cor:</strong> Prata</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Portas:</strong> 4</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Combústivel:</strong> Flex</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Câmbio:</strong>Automático</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Conservação:</strong> Seminovo</p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Final Placa:</strong> 5</p>
            </div>

        </div>
        <div class="col s12 m12 l8">

            <div class="slider-vehicle-details img-slide-fancybox slider-for">
                <a href="img/car_01.jpg" data-fancybox="gallery">
                    <img src="img/car_01.jpg" class="responsive-img" alt="">
                </a>
                <a href="img/car_02.jpg" data-fancybox="gallery">
                    <img src="img/car_02.jpg" class="responsive-img" alt="">
                </a>
                <a href="img/car_03.jpg" data-fancybox="gallery">
                    <img src="img/car_03.jpg" class="responsive-img" alt="">
                </a>
                <a href="img/car_04.jpg" data-fancybox="gallery">
                    <img src="img/car_04.jpg" class="responsive-img" alt="">
                </a>
                <a href="img/car_05.jpeg" data-fancybox="gallery">
                    <img src="img/car_05.jpeg" class="responsive-img" alt="">
                </a>
            </div>
            <div class="slider-vehicle-details img-thumb-single slider-nav">
                <img src="img/car_01.jpg" class="responsive-img z-depth-4" alt="">
                <img src="img/car_02.jpg" class="responsive-img z-depth-4" alt="">
                <img src="img/car_03.jpg" class="responsive-img z-depth-4" alt="">
                <img src="img/car_04.jpg" class="responsive-img z-depth-4" alt="">
                <img src="img/car_05.jpeg" class="responsive-img z-depth-4" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <ul id="tabs-swipe-demo" class="tabs vehicle-details-tabs">
                <li class="tab col s3"><a href="#test-swipe-1">+ Informações</a></li>
                <li class="tab col s3"><a class="active" href="#test-swipe-2">Obs. Vendedor</a></li>
                <li class="tab col s3"><a href="#test-swipe-3">Dados do Vendedor</a></li>
            </ul>
            <div id="test-swipe-1" class="col s12 blue">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque dolores eos eveniet neque nostrum quidem quod ratione ullam ut. Accusantium alias consequatur, debitis fugiat ipsam magni odio quas quod saepe.</div>
            <div id="test-swipe-2" class="col s12 red">Test 2</div>
            <div id="test-swipe-3" class="col s12 green">Test 3</div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="col s12 m12 l6 red">
                <h5 class="title_fipe">Envia sua proposta</h5>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nome" type="text" class="validate">
                        <label for="nome">Nome Completo: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">markunread</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">E-mail: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefone" type="email" class="validate">
                        <label for="telefone">Telefone: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input id="telefone" type="email" class="validate">
                        <label for="telefone">Celular: </label>
                    </div>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m6 l12">
                                <i class="material-icons prefix">comment</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Detalhe sua Proposta</label>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="input-field col s12 m6 l6 btn_basic_search">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
            <div class="col s12 m12 l6 blue">
                <h5 class="title_fipe">Entre em contato</h5>

            </div>

        </div>

    </div>
</div>

<?php include 'footer.php'?>
