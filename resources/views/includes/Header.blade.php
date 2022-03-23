@stack('css')

<div class="navbar">
    <div class="seinfra-logo">
        <img src="/logos/seinfra-logo.png" alt="Seinfra-logo">
    </div>

    <div class="menu-bar">
        <div class="blue-bar">
            <a class="menu-itens" href="/home">
                <p class="menu">Início</p>
                <div class="sublime"></div>
            </a>
            <a class="menu-itens" href="http://suporte.infraestrutura.ac.gov.br" target="_blank">
                <p class="menu">Suporte</p>
                <div class="sublime"></div>
            </a>
            <a class="menu-itens" href="http://webmail.ac.gov.br" target="_blank">
                <p class="menu">Webmail</p>
                <div class="sublime"></div>
            </a>
            <a class="menu-itens" href="http://app.sei.ac.gov.br" target="_blank">
                <p class="menu">SEI</p>
                <div class="sublime"></div>
            </a>
            <a class="menu-itens menu-itens-ramais" href="/ramais">
                <p class="menu">Ramais</p>
                <div class="sublime"></div>
            </a>
            <div class="dropdown">
                <button class="dropbtn">
                    <p>
                        Links <img src="images/arrow.svg" alt="arrow-down" class="arrow-down">
                        {{-- <span class="arrow-down"></span> --}}
                    </p> 
                    <div class="sublime"></div>
                </button>

                <div class="dropdown-content">
                    <a href="http://www.diario.ac.gov.br" target="_blank">Diário Oficial</a>
                    <a href="https://contracheque.ac.gov.br/login" target="_blank">Contracheque</a>
                    <a href="http://minhaconta.ac.gov.br/" target="_blank">Minha Conta</a>
                </div>

            </div>
            <a class="menu-itens" href="http://10.1.1.254:1000/logout?" target="_blank">
                <p class="menu">Acessar a internet</p>
                <div class="sublime"></div>
            </a>
            <a class="menu-itens" href="/ajuda">
                <p class="menu">Ajuda</p>
                <div class="sublime">

                </div>
            </a>
        </div>
    </div>
</div>