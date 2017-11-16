    <?php

    require_once __DIR__. "/../conexao/Conexao.php";

    class CrudProdutos
    {
        private $conexao;
        private $produto;

        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }

        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO tb_produtos (titulo, preco, categoria) VALUES ('$produto>titulo', $produto->preco, '$produto->categoria')";


            $this->conexao->exec($sql);
        }

        public  function getProdutos()
        {




            $consulta =  $this->conexao->query("SELECT * FROM tb_produtos");
            $resultado = $consulta->fetchall(PDO::FETCH_ASSOC);
            return $resultado; //retornará uma lista de produtos

        }

    }

    $cur = new CrudProdutos();
    $cur->getProdutos();