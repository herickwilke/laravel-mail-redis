<html>
    <body>
    <h4>Seja bem vindo(a), {{$nome}}.</h4>

        <p>Você acabou de acessar o sistema utilizando o seu e-mail: {{$email}}.</p>

        <p>Data/Hora de acesso: {{$datahora}}</p>

        <div>
            <img width="10%" height="10%" src="{{ $message->embed( public_path() . '/img/logo.png') }}">
        </div>
    </body>
</html>