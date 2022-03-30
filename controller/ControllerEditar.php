<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $marca;
    private $quantidade;
    private $preco;
    private $data;
    private $flag;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaRelogio($id);
        $this->nome         =$row['nome'];
        $this->marca        =$row['marca'];
        $this->quantidade   =$row['quantidade'];
        $this->preco        =$row['preco'];
        $this->data         =$row['data'];
        $this->flag         =$row['flag'];

    }
    public function editarFormulario($nome,$marca,$quantidade,$preco,$data,$flag,$id){
        if($this->editar->updateRelogio($nome,$marca,$quantidade,$preco,$flag,$data,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getAutor(){
        return $this->marca;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getData(){
        return $this->data;
    }
    public function getFlag(){
        return $this->flag;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['marca'],$_POST['quantidade'],$_POST['preco'],$_POST['data'],$_POST['flag'],$_POST['id']);
}
?>
