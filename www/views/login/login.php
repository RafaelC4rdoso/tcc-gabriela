<div class="wrapper fadeInDown">
    <div class="wrapper-form">
        <h1 class="wrapper-title">Login no sistema</h1>
        <form class="form" action="?controller=login&action=validateLogin" method="POST" name="loginForm" id="loginForm">
            <div class="form-item">
                <input type="text" class="fadeIn second" name="email" placeholder="Digite o email">
            </div>
            <div class="form-item">
                <input type="text" class="fadeIn third" name="password" placeholder="Digite sua senha">
            </div>
            <input class="fadeIn fourth" type="submit" name="Enviar" value="Fazer Login">
        </form>
        <div id="formFooter">
            <span>Não possui conta? </span><a class="underlineHover" href="?controller=login&action=registerForm">Cadastre-se</a>
        </div>
    </div>
</div> 