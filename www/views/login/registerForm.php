<div class="wrapper fadeInDown">
    <div class="wrapper-form">
        <h1 class="wrapper-title">Cadastro de Usuário</h1>
        <form class="form" action="?controller=login&action=register" method="POST" name="loginForm" id="loginForm">
            <div class="form-item">
                <input type="text" class="fadeIn second" name="name" placeholder="Digite seu nome">
            </div>
            <div class="form-item">
                <input type="text" class="fadeIn third" name="email" placeholder="Digite seu email">
            </div>
            <div class="form-item">
                <input type="text" class="fadeIn third" name="password" placeholder="Digite sua senha">
            </div>
            <input class="fadeIn fourth" type="submit" name="Enviar" value="Cadastrar">
        </form>
        <div id="formFooter">
            <span>Já possui conta? </span><a class="underlineHover" href="?controller=login&action=login">Faça login</a>
        </div>
    </div>
</div> 