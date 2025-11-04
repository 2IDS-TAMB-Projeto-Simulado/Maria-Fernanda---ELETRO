<?php
    require_once "../config/db.php";
    require_once "model_logs.php";

    class Estoque{
        public function adicionar_estoque($qntde_estoque, $fk_usu_id, $fk_prod_id) {
            $conn = Database::getConnection();
            $insert = $conn->prepare("INSERT INTO ESTOQUE (QNTDE_ESTOQUE, FK_PROD_ID) VALUES (?, ?)");
            $insert->bind_param("si", $qntde_estoque, $fk_prod_id);
            $success = $insert->execute(); 
            $insert->close();
            return $success;
        }
        public function atualizar_estoque($qntde_estoque, $fk_prod_id, $fk_usu_id) {
            $conn = Database::getConnection();
            $update = $conn->prepare("UPDATE ESTOQUE SET QNTDE_ESTOQUE = ? WHERE FK_PROD_ID = ?");
            $update->bind_param("si", $qntde_estoque, $fk_prod_id);
            $success = $update->execute();

            if($success){
                $logs = new Logs();
                $logs->cadastrar_logs("Produto <br> ID: ".$fk_prod_id." <br> AÇÃO: Estoque editado <br> NOVA QTD: ".$qntde_estoque."<br> ID USUÁRIO: ".$fk_usu_id);
            }
            $update->close();
            return $success;
        }
    }
?>