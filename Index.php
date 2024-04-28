<?php 
declare(strict_types=1);


//namespace clientes;
namespace funcionarios;

use funcionarios\Usuario;
use funcionarios\Funcionario;
use funcionarios\Cargo;
use funcionarios\FuncionarioInterface;

include 'funcionarios\FuncionarioInterface.php';
include 'funcionarios\Usuario.php';
include 'funcionarios\Funcionario.php';
include 'funcionarios\Cargo.php';

class Index{
    public function getUsuarioInterface(FuncionarioInterface $Usuario){
           $Usuario->setNome("Jackson");
           $Usuario->setIdade(32);
           $Usuario->setCidade("Ananindeua-PA");
           return "Nome: ".$Usuario->getNome()." - Idade: ".$Usuario->getIdade()." - Cidade: ".$Usuario->getCidade();
    }

    public function setNomeQualquer(FuncionarioInterface $Inf_setNome){
               $Inf_setNome->setNome("Jackson");
        return $Inf_setNome->getNome();
    }

    public function getNome(FuncionarioInterface $Inf_getNome){
        return  $Inf_getNome->getNome();
        //return "sem Funcionalidade";
    }

    public function GetUsuario(){
        $user = new Usuario("Roberto Lopes", 45, "Rio de Janeiro");
        /* $user->setNome("Roberto Lopes");
        $user->setIdade(45);
        $user->setCidade("Rio de Janai"); */
        return $user;
    }
    //Injeção de Depência
    public function InjDepUsuario(Usuario $user){
        return $user->getNome();
    }

}
$index = new Index();
echo "<pre>";
echo " -----------------------------[Instância e Interface]-----------------------------<br>";
echo $index->setNomeQualquer(new Usuario());
echo "</br>";
echo $index->setNomeQualquer(new Funcionario());
echo "</br>";
echo $index->setNomeQualquer(new Cargo());
echo "</br>";
echo "</br> Completo: ";
echo $index->getUsuarioInterface(new Usuario());
echo "<br>-----------------------------[Instância]-----------------------------<br>";
$obj = $index->GetUsuario();
print_r($obj);
echo "<br>-----------------------------[Injeção de Depência]-----------------------------<br>";
echo $index->InjDepUsuario(new Usuario("Silvo Santos",78,"São Paulo"));
//$user = new Usuario();
//echo Usuario::getCountry();
//echo "</br>";
//$user = new Usuario('Jackson',32);
//echo $user->getNome();
//echo "</br>";
//echo $user->getIdade();
//$index = new Index();
//$obj = $index->GetUsuario();
//$ObjList = [1,2,3];
//$obj = (array) $obj;

    //print_r($obj);
    //print_r($obj["funcionarios\Usuarionome"]);
echo "</pre>";




//$user.Usuario::getCountry();
//$user->setNome("Jackson Neves");
/* $rs = $user->getNome();
echo $rs; */

//phpinfo();

?>