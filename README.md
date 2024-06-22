# AvFinal

1 - clone  -configura chrome como navegador padrão <br>
2 - git do VSCODE  clonar github <br>
3 - clonar do github<br>
4 - instalar o composer.phar comando em https://getcomposer.org/download/ <br>
php composer.phar install <br>
php artisan serv e<br>

# Vamos usar a tabela produto como exemplo

# Criar BD 

php artisan make:model -mrc Nome              - Cria o Model, Controller, Migration      <br>

# Configurar o Model

Na raiz do projeto encontre a pasta app/ model, e em seguida o arquivo Produto.php <br>
Informar no Model quais campos podem ser preenchidos/editados por nosso código <br>

protected $fillable = ['nome', 'fornecedor']; <br>
# Criar formulario Blade (resources/views ) <br>

 criar.blade.php.<br>

html 5.0

form action="{{route('cadastrar_produto')"<br>
@crfs	<br>
label	<br>
input	<br>
button	<br>

#  app\Http\Controllers - ProdutosController.php

* use model produto
  
*função create<br>
return view ('layouts.criar')

*função store<br>
dd($request->all());   	         testar dd  -debug,die

Produto::create([
'nome'-> $ request->nome,
...]);
return "Produto criado";


# Criar Rota
 Route:: get('layouts/criar', [ProdutoController::class, 'criar']);  <br>
Route:: post('layouts/criar', [ProdutoController::class, 'store'])-> name('cadastrar_produto); <br>




# LEITURA DE UM REGISTRO

# Criar Rota
 Route:: get('layouts/ver/{id}', [ProdutoController::class, 'show']);  <br>


 #  app\Http\Controllers - ProdutosController.php

 *funcao show ($id)

$produto= Produto::findOrFail($id); <br>
return view('layouts.show, ['produto =>$produto]);<br>


#BLADE

mostrar.blade.php
label <br>
input type text name value="{{$produto->nome}}"



# ATUALIZANDO os dados

#ROTA
Route:: get('layouts/editar/{id}', [ProdutoController::class, 'edit']);  <br>
Route:: post('layouts/editar/{id}', [ProdutoController::class, 'update']) ->name(alterar_produto);  <br>

# Controller
funcao edit ($id)
$produto= Produto::findOrFail($id); <br>

return view('layouts.editar',['produto'=>$produto]);


# BLADE
 editar.blade.php
 form  {{route ('alterar_produto, ['id'=>$produto->id])}}


# Controller
funcao update ($request, $id)

$produto= Produto::findOrFail($id); <br>

Produto::update([
'nome'-> $ request->nome,
...]);

return "Produto atualizado";<br>



# Deletar um registro
#ROTA
Route:: get('layouts/excluir/{id}', [ProdutoController::class, 'delete']);  <br>
Route:: post('layouts/excluir/{id}', [ProdutoController::class, 'destroy'])->name('excluir_produto');  <br>


# Controller

funcao delete($id)
$produto= Produto::findOrFail($id); <br>
return view('layouts.deletar',['produto'=>$produto]);


# BLADE
 deletar.blade.php
 
 form  {{route ('excluir_produto, ['id'=>$produto->id])}}
 @csrf
 label . tem certeza?
 input value="{{produto->nome}}"
 button  sim

 # .env

 APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:8sjgQ3/9ab1wfuBVqLW5jhqUlsglfZ25S6WCm+hSDlA=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=escola

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"