Tutorial

Baixar projeto

Configurar no arquivo .env, banco de dados e chave de acesso, pode ser criado aqui `https://console.developers.google.com/project`

```

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nome-banco
DB_USERNAME=nome-usuario
DB_PASSWORD=senha


GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=

```

Executar `php artisan migrate`

Executar `php artisan serve`

No navegador acessar

`localhost:8000/youtube/auth`

para permitir o acesso do youtube.

Para realizar Envio/Atualizacao/Delete de video

Enviar um **POST**

Para as rotas

```

Route::post("teste", "TesteController@primeiro"); # enviar, com o body parametro video, arquivo do video.
Route::post("teste2", "TesteController@segundo"); # atualizar, alterar ID do vídeo
Route::post("teste3", "TesteController@terceiro"); # deletar, alterar ID do vídeo

```

Pacote

https://github.com/JoeDawson/youtube
