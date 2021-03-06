<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bikelivery</title>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Style -->
    <link rel="stylesheet" href="./src/assets/style/home.css" />

    <!-- Google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="flex items-center place-content-around">
            <div>
                <h3>LOGO</h3>
            </div>
            <div>
                <ul class="flex items-center justify-center gap-x-16 py-12 text-gray-500">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="flex items-center justify-center">
                        <a href="#">Serviços</a>
                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                                <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" 
                                    />
                                </svg>
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-1 py-2 w-48 bg-white rounded-md shadow-lg z-20 border border-gray-100">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                    Seja um entregador
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                    Seja uma empresa parceira
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Quem somos</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center justify-center rounded-full text-white w-28 h-10 bg-primary">
                <a href="./src/screens/login.php">Login</a>
            </div>
        </nav>
    </header>

    <div class="relative">
        <img src="./src/assets/img/poligonos.png" alt="" class="poligonos-image">
    </div>

    <div class="container mx-auto pt-10">
        <div class="flex flex-wrap items-start justify-center ">
            <div class="flex flex-wrap pt-28 w-2/4">
                <div>
                    <h2 class="font-bold text-7xl text-gray-800">
                        Estamos prontos para entregar sua mercadoria
                    </h2>
                    <p class="font-light text-gray-400 text-lg pt-4">
                        Encontre o entregador mais próximo de você
                    </p>
                </div>

                <div class="flex flex-wrap items-center pt-8">
                    <div class="flex items-center justify-center rounded-full text-white w-36 h-12 bg-primary">
                        <span class="material-symbols-rounded text-white text-lg pr-2">search</span>
                        <a href="">
                            Localizar
                        </a>
                    </div>
                    <div class="flex items-center justify-center pl-6">
                        <a class="font-semibold color-primary" href="">
                            Quero ser um entregador
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-2/4 flex flex-wrap items-center justify-center">
                <div class="flex justify-center">
                    <img src="./src/assets/img/delivery-man-bike.png" alt="Entregador" class="main-image">
                </div>
            </div>
        </div>

        <div class="relative">
            <div class="absolute flex items-center gap-x-6 -top-10">
                <div>
                    <p class="text-gray-500">Serviço de entrega sustentável</p>
                </div>
                <div class="bg-primary h-2 w-52 rounded-full"></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto pt-4 pb-20">
        <div class="flex items-center justify-center ">
            <div class="w-2/4">
                <div class="flex flex-wrap mt-6">
                    <h2 class="font-bold text-7xl text-gray-800">
                        Encontre o entregador perfeito
                    </h2>
                    <p class="font-medium text-gray-400 text-xl pt-7">
                        Informe o seu endreço e o local de coleta
                    </p>
                    <p class="font-light text-gray-400 text-lg pt-4 w-8/12">
                        Essas informações serão necessárias para que possamos localizar o entregador mais próximo a você
                    </p>
                </div>

                <div class="bg-primary h-2 mt-12 w-52 rounded-full"></div>

                <div class="flex flex-col pt-2">
                    <form action="" method="POST">
                        <div class="py-8">
                            <div class="relative flex w-full flex-wrap items-stretch">
                                <span
                                    class="material-symbols-rounded z-10 h-full leading-snug absolute text-center text-gray-300 absolute bg-transparent rounded text-lg items-center justify-center w-8 pl-4 pr-4 py-3">
                                    navigation
                                </span>
                                <input type="text"
                                    class="appearance-none border-2 border-bg-neutral-400 rounded-lg w-9/12 py-3 px-10 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-800"
                                    placeholder="Minha localização atual">
                            </div>
                        </div>
                        <div>
                            <div class="relative flex w-full flex-wrap items-stretch">
                                <span
                                    class="material-symbols-rounded z-10 h-full leading-snug absolute text-center text-gray-300 absolute bg-transparent rounded text-lg items-center justify-center w-8 pl-4 pr-4 py-3">
                                    navigation
                                </span>
                                <input type="text"
                                    class="appearance-none border-2 border-bg-neutral-400 rounded-lg w-9/12  py-3 px-10 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-teal-800"
                                    placeholder="Local para coleta da minha mercadoria">
                            </div>
                        </div>
                        <div class="pt-8">
                            <button type="submit">
                                <a class="bg-primary flex items-center justify-center rounded-lg w-56 h-12 text-white">
                                    Localizar entregador
                                </a>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="relative top-32">
                    <img src="./src/assets/img/vertical-decoration.png" alt="">
                </div>
            </div>

            <div class="w-2/4 pt-48">
                <img src="./src/assets/img/delivery-man-bike-phone.png" alt="" class="main-image">
            </div>
        </div>
    </div>

    <div class="relative flex items-start justify-center h-screen overflow-hidden ">
        <div class="relative z-30 flex items-start justify-center pt-24">
            <div class="w-5/12 px-16 mx-24">
                <div>
                    <h2 class="font-bold text-5xl color-primary">
                        Entenda um pouco mais sobre nossos objetivos
                    </h2>
                    <p class="font-light text-gray-600 text-lg pt-12 w-8/12">
                        Conheça um pouco dos nossos objetivos e ajude os nossos <strong
                            class="font-bold">heróis</strong> a combater
                        o nosso inimigo em comum!
                    </p>
                </div>
            </div>
            <div class="w-5/12 text-white text-gray-600 text-lg pr-64">
                <div>
                    <p class="py-6">
                        Nem todo <strong class="font-bold">herói</strong> usa capa, às vezes eles usam bicicletas! Essa
                        é a filosofia da <strong class="font-bold">Bikelivery</strong>, uma
                        empresa com o objetivo de realizar entregas para os nossos clientes, gerar empregos e
                        principalmente ajudar o nosso meio ambiente.
                    </p>
                    <p class="py-6">
                        Nossa missão é juntamente com os nossos poderosos <strong class="font-bold">bike
                            messengers</strong> realizar as entregas
                        solicitadas pelos nossos clientes e poder salvar o ar que respiramos.
                    </p>
                    <p class="py-6">
                        Essa <strong class="font-bold">missão díaria</strong> conta com algumas ajudas que fazem toda a
                        diferença: Gastos
                        consideravelmente menores com manutenções, sem a necessidade de portar uma CNH,
                        facilidade no transporte e sem custos com combustivel.
                    </p>
                    <p class="py-6">
                        O melhor de tudo isso é que você já possui algo em comum com nossos entregadores.
                        Os <strong class="font-bold">herói</strong>! Nos ajude a combater a poluição no ar, poluição
                        sonora, emissão de carbono
                        e etc. <strong class="font-bold">Seja um herói</strong> também e nos ajude a salvar o nosso
                        planeta!
                    </p>
                </div>

                <div class="pt-8">
                    <img src="./src/assets/img/footer-bike.png" alt="">
                </div>
            </div>
        </div>
        <video autoplay loop muted class="absolute z-10 w-auto opacity-10">
            <source src="./src/assets/img/video-background.mp4" type="video/mp4" />
            Seu navegador não suporta a tag de vídeo.
        </video>
        </d>
    </div>

    <div>
        <img src="./src/assets/img/bike.png" alt="" class="bike-image relative">
    </div>

    <div class="contact-content">
        <div class="relative">
            <img src="./src/assets/img/poligonos.png" alt="" class="poligonos-image-footer">
        </div>
        <div class="container mx-auto flex items-center justify-center">
            <div class="w-2/4">
                <div>
                    <h2 class="font-bold text-5xl color-primary">
                        Se interessou pela nossa causa e gostaria de se juntar a nós?
                    </h2>
                    <p class="font-light text-gray-600 text-lg pt-12 w-8/12">
                        Caso tenha se interessado pela nossa causa, você pode se juntar a nós como uma
                        <strong class="font-bold">empresa parceira</strong> ou se tornando um
                        <strong class="font-bold">entregador</strong>.
                    </p>
                </div>
                <div class="pt-12">
                    <div>
                        <div class="flex items-center">
                            <div class="bg-secondary w-2 h-10 mr-4 rounded-full"></div>
                            <h2 class="font-semibold text-2xl text-gray-500">Seja um entregador</h2>
                        </div>
                        <p class="font-light text-gray-600 text-lg pt-4 w-8/12">
                            Ao passar pelo processo para se tornar um entregador, você terá acesso a uma
                            dashboard personalizada com todos os pedidos disponiveis próximo a você.
                        </p>
                    </div>
                </div>
                <div class="pt-12">
                    <div>
                        <div class="flex items-center">
                            <div class="bg-secondary w-2 h-10 mr-4 rounded-full"></div>
                            <h2 class="font-semibold text-2xl text-gray-500">Seja uma empresa parceira</h2>
                        </div>

                        <p class="font-light text-gray-600 text-lg pt-4 w-8/12">
                            Ao se tornar uma empresa parceira você terá acesso aos nossos
                            entregadores e disponibilidade para envios com beneficios especiais!
                        </p>
                    </div>
                </div>
                <div class="pt-12">
                    <button type="submit">
                        <a
                            class="font-medium bg-primary flex items-center justify-center rounded-lg w-56 h-12 text-white">
                            Gostaria de me juntar
                        </a>
                    </button>
                </div>
            </div>

            <div class="w-2/4">
                <img src="./src/assets/img/delivery-main-bike-footer.png" alt="" class="main-image">
            </div>
        </div>
    </div>

</body>

</html>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>