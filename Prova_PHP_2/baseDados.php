<?php
    class BancoDados
    {
        private $servername = "localhost" ; 
        private $username    = "root" ; 
        private $password    = "" ; 
        private $dbname    = "dados" ; 
        private $conn ;  
        //Conexão de banco de dados
        
    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }
        //Insere os dados do cliente na tabela do cliente
        private function validar_ra($RA){
            if ($RA < 0){
                echo "Aluno não cadastrado";
                return FALSE;
            }
            return TRUE;
        }
        
        public function adicionar_Aluno($nome, $sobrenome, $curso, $RA)
        {
            if ($this->validar_RA($RA))
            {   
                $sql = "INSERT INTO Alunos ( `nome`, `sobrenome`, `curso`, `RA` ) ";
                $sql = $sql."VALUES ('".$nome."', '".$sobrenome."', '".$curso."', ".$RA .")";
                if (mysqli_query($this->conn, $sql)) {
                  echo "Cadastro feito com sucesso";
              } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
             
          }
        }

        // Busca registros de clientes para listagem de shows
        public function selecionar_Alunos ()  
        {
            $query = "SELECT * FROM Alunos" ;
            $result = $this->conn->query($query);
        if ( $result->num_rows > 0 ) {   
            $data = array () ;
            while ( $row = $result->fetch_assoc ()) {  
                   $data[] = $row;
            }
             return $data ; 
            } else {
             echo "Nenhum registro encontrado" ; 
            }
        }
        // Busca dados únicos para edição da tabela de alunos
        public function selecionar_Registro ( $id )  
        {
            $query = "SELECT * FROM Alunos WHERE id = '$id'" ;
            $result = $this->conn->query($query) ;
        if ( $result->num_rows > 0 ) {   
            $row = $result->fetch_assoc () ;
            return $row ; 
            } else {
            echo "Registro não encontrado" ; 
            }
        }
        // Atualiza os dados do cliente na tabela do cliente
        public function atualizar_Alunos ($postData)  
        {
            $nome = $this->conn-> real_escape_string ($_POST['unome'] ) ;
            $sobrenome = $this->conn->real_escape_string ($_POST['usobrenome'] ) ;
            $curso = $this->conn->real_escape_string ($_POST['ucurso'] ) ;
            $RA = $this->conn->real_escape_string ($_POST['uRA'] ) ;
            $id = $this->conn->real_escape_string ($_POST['id'] ) ;
        if (!empty($id) && !empty($postData)) {  
            $query = "UPDATE Alunos SET nome = '$nome', sobrenome = '$sobrenome', curso = '$curso', RA = '$RA' WHERE id = '$id'" ;
            $sql = $this->conn->query ($query) ;
            if ( $sql == true ) {  
                header ( "Location:display.php?msg2=update" ) ;
            } else {
                echo "Falha no registro atualizado, tente novamente!" ; 
            }
            }
            
        }
        // Excluir dados do cliente da tabela de clientes
        public function excluir_Aluno( $id )  
        {
            $query = "Delete from Alunos WHERE id = '$id'" ;
            $sql = $this-> conn->query($query) ;
        if ( $sql == true ) {  
            header ( "Location:display.php?msg3=delete" ) ;
        } else {
            echo "O registro não exclui tente novamente" ; 
            }
        }
    }
?>
