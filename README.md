# AvFinal

 Faça um fork desse respositório<br>
 Atenda as solicitações na issue Avaliação

 # Instalação
 Laravel<br> (1,0)
 Mysql<br> (1,0)
 breeze -opcional<br> (0,5)

 #Crie um layout

 Uma blade principal com a configuração do HTML/CSS/Javascript<br> (1,0)
 uma blade secundária com formulário para cadastrar um evento com um formulário (incluindo a principal como base)<br>(1,5)
 uma blade para mostrar o comprovante do cadastro no evento<br>(1,5)

 # AvFinal

# Fluxo

Rota
Controller
Blade
# Configuração Laravel Localmente
https://getcomposer.org/download/<br>

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"<br>
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"<br>
php composer-setup.php <br>
php -r "unlink('composer-setup.php');" <br>


php composer.phar install


#criar migrations
php artisan make:model Produto -mrc
#criar Blade com o Form



public function teste()
{
  $eu = [
   'nome' => 'ana',
   'idade' => 23
  ];
  return view('pessoa', compact('eu'));
}