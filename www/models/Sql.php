<?php

class Sql{

    public function product( )
    {
        $conn = new mysqli('localhost', 'user', 'friday', 'pw');

        $sql = "SELECT * FROM products";
        $resultado = $conn->query($sql);

        $arrayProduct = array();
        if($resultado-> num_rows>0){
            while($linha = $resultado->fetch_assoc()) {
                array_push($arrayProduct, $linha);
            }
        }else {
            echo '0 results';
        }

        foreach($arrayProduct as $product){
            print($product['idProduct']);
            print($product['name']);
            print($product['price']);
            print($product['description']);
            print($product['idCategory']);
        }  

        require_once('views/templates/header.php');
        var_dump($arrayProduct);
        require_once('views/templates/footer.php');
    }
}
