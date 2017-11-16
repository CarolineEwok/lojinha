            <?php

                require_once __DIR__."/../conexao/Conexao.php";

                class Produto
                {

                    public $codigo;
                    public $titulo;
                    public $preco;
                    public $categoria;

                    public function __construct($titulo, $preco, $categoria)
                    {

                        $this->titulo = $titulo;
                        $this->preco = $preco;
                        $this->categoria = $categoria;


                    }

                }

                //teste

//                $jabuticaba = new Produto("jabuticaba", 2.30, "frutinha");
//                $jabuticaba->cadastrar();
//
//                $lista = Produto::getProdutos();
//
//                print_r($lista);
//









