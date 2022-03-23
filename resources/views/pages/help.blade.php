@extends('layouts.default')


{{-- @push('css')
    <link rel="stylesheet" href="css/default.css">
@endpush --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
@endsection

@section('content')
<div class=container-help>
    <div class=container-categorias>
        <!-- <div id="divBusca">
            <form action="" method="post">
                <tr id="pesquisa">
                    <td><input placeholder="Como podemos lhe ajudar?" type="text" name=Buscar class=buscar></td>
                    <td><button type="submit" class=button>BUSCAR</button></td>
                </tr>
            </form>
        </div> -->

        <div>
            <h1 class=titulo-options>Precisa de ajuda com o quê?</h1>
        </div>

        <div class=options>
            <a class=links-ajuda href="#glpi">
                <img src="images/glpi.png" alt="GLPI" class=option>
            </a>

            <a class=links-ajuda href="#sei">
                <img src="images/sei.png" alt="SEI" class=option>
            </a>

            <a class=links-ajuda href="#minha-conta">
                <img src="images/minha-conta.png" alt="MINHA-CONTA" class=option>
            </a>

            <a class=links-ajuda href="#internet">
                <img src="images/internet.png" alt="INTERNET" class=option>
            </a> 
        </div>

        <div class=topicos>
            <ul class=titulo id="glpi">GLPI</ul>
                <li class=subtitulo>Como fazer um chamado?</li> 
                    <p class=text>Clique na aba <b>"Suporte"</b>.</p>
                    <video autoplay="true" muted loop src="video/suporte.mp4" class="mp4"></video>
                    <p class=text>Faça o login com o seu usuário e senha (Os mesmos utilizados para logar no computador).</p>
                    <video autoplay="true" muted loop src="video/suporte2.mp4" class=mp4></video>
                    <p class=text>Clique em <b>"Cria um chamado +"</b>.</p>
                    <video autoplay="true" muted loop src="video/suporte3.mp4" class=mp4></video>
                    <ul class=text>Preencha com as seguintes informações:</ul>
                        <li class=text>No <b>"Tipo"</b> selecione se é <b>"incidente"</b> ou <b>"requisição"</b>: <br> &emsp;&emsp;&emsp; <b>-Incidente:</b> algum problema no seu equipamento. <br> &emsp;&emsp;&emsp; <b>-Requisição:</b> para solicitar algum equipamento novo.</li>
                        <li class=text>A <b>"Categoria"</b> do problema (Internet, computador, telefone, etc);</li>
                        <li class=text>Sua <b>"Localização/setor"</b>;</li>
                        <li class=text>Na parte de <b>"Observadores"</b>, coloque o seu nome;</li>
                        <li class=text>Ponha um <b>"Título"</b> que condiza com o problema;</li>
                        <li class=text>Faça uma breve <b>"Descrição"</b> do problema que está passando;</li>
                    <video autoplay="true" muted loop src="video/suporte4.mp4" class=mp4></video>
                        <p class=text>Por fim, clique em <b>"Enviar mensagem"</b>.</p>
                <li class=subtitulo>Fiz o chamado e agora?</li> 
                    <p class=text>Um técnico de ti irá te atender assim que possivel.</p>

            <ul class=titulo id="sei">SEI</ul>
                <li class=subtitulo>Como usar o SEI?</li> 
                <p class=text>O própio SEI disponibiliza um site para <b>"Treinamento"</b> e um para <b>"Suporte"</b>. <br>Para acessar basta <a href="http://sei.ac.gov.br">clicar aqui</a>.</p>

            <ul class=titulo id="minha-conta">MINHA CONTA</ul>
                <li class=subtitulo>Como alterar a senha da internet?</li>
                <p class=text>Vá na aba <b>"Links"</b> e selecione a opção <b>"Minha Conta"</b>.</p>
                <video autoplay="true" muted loop src="video/minhaconta.mp4" class="mp4"></video>
                <p class=text>Faça o login com o seu usuário e senha (o mesmo usado para logar na internet).</p>
                <video autoplay="true" muted loop src="video/minhaconta2.mp4" class="mp4"></video>
                <p class=text>Clique em <b>"Alterar senha"</b>.</p>
                <video autoplay="true" muted loop src="video/minhaconta3.mp4" class="mp4"></video>
                <ul class=text>Preencha com as seguintes informações:</ul>
                    <li class=text>A usa senha antiga;</li>
                    <li class=text>A sua senha nova;</li>
                    <li class=text>E confirme sua senha nova;</li>
                <video autoplay="true" muted loop src="video/minhaconta4.mp4" class="mp4"></video>
                <p class=text>Pronto, sua senha será alterada.</p>

                <li class=subtitulo>Como alterar o meu e-mail alternativo?</li>
                <p class=text>Siga o mesmo processo dito acima, mas clique em <b>"Alterar e-mail alternativo"</b>.</p>
                <video autoplay="true" muted loop src="video/minhaemail.mp4" class="mp4"></video>
                <ul class=text>Preencha com as seguintes informações:</ul>
                    <li class=text>O seu e-mail alternativo;</li>
                    <li class=text>Confirme o seu e-mail alternativo;</li>
                    <li class=text>E coloque sua senha para confirmar;</li>
                <video autoplay="true" muted loop src="video/minhaemail2.mp4" class="mp4"></video>
                <p class=text>Pronto, agora é só trocar seu e-mail.</p>

            <ul class=titulo id="internet">INTERNET</ul>
                <li class=subtitulo>Como faço para conectar na internet?</li>
                <p class=text>Clique na aba <b>"Acessar a internet"</b>.</p>
                <video autoplay="true" muted loop src="video/internet.mp4" class="mp4"></video>
                <p class=text>Faça o login com o seu usuario e senha e clique em <b>"Continue"</b>.</p>
                <video autoplay="true" muted loop src="video/internet2.mp4" class="mp4 autoplay"></video>
                <p class=text>Pronto, agora você está conectado a internet. Aconselhamos a não fechar a aba para que consiga desconectar a sua conta posteriomente.</p>
                <li class=subtitulo>Como faço para deslogar da internet?</li>
                <p class=text>Você pode clicar na aba <b>"Acessar a internet"</b> que será feito o logout da usa conta na internet. <br>Se quiser você pode digitar o link "(<a href="http://10.1.1.254:1000/logout?"><b>10.1.1.254:1000/logout?</b></a>)"" que também será feito o logout.</p>
        </div>
    </div>
</div>
@endsection