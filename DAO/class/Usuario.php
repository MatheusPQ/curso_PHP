<?php

class Usuario {
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    public function getIdusuario(){
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin(){
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha(){
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro(){
        return $this->dtcadastro;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }

    public function loadById($id){
        $sql = new Sql();

        $results = $sql->select(
            "SELECT * FROM tb_usuarios 
            WHERE idusuario = :ID", array(
                ":ID"=>$id
        ));

        if(count($results[0]) > 0){
            $this->setData($results[0]);
        }
    }

    //Static.. logo não precisa instanciar esse objeto
    public static function getList(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
    }

    public static function search($login){
        $sql = new Sql();

        return $sql->select(
        "SELECT * FROM tb_usuarios 
        WHERE deslogin LIKE :SEARCH 
        ORDER BY deslogin", array(
            ":SEARCH"=>"%".$login."%"
        ));
    }

    public function login($login, $password){
        $sql = new Sql();

        $results = $sql->select(
            "SELECT * FROM tb_usuarios 
            WHERE deslogin = :LOGIN
            AND dessenha = :PASSWORD", array(
                ":LOGIN"=>$login,
                ":PASSWORD"=>$password
        ));

        if(count($results[0]) > 0){
            $this->setData($results[0]);
        } else {
            throw new Exception("Login e/ou senha inválidos", 1);
        }
    }

    public function setData($data){

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime ($data['dtcadastro']) );

    }

    public function insert(){
        $sql = new Sql();

        //StoredProcedure, nome da Tabela, e o que faz
        //Detalhe que no mysql, procedure se chama com CALL. SQLSERVER se chama com EXECUTE
        //Obviamente, precisa criar a procedure no BD (Código da procedure no final deste arquivo)
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));

        if(count($results[0]) > 0){
            $this->setData($results[0]);
        }
    }

    public function update($login, $password){

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query(
            "UPDATE tb_usuarios 
            SET deslogin = :LOGIN, dessenha = :PASSWORD 
            WHERE idusuario = :ID", array(
                ":LOGIN"=>$this->getDeslogin(),
                ":PASSWORD"=>$this->getDessenha(),
                ":ID"=>$this->getIdusuario()
            ));
    }

    public function delete(){
        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    public function __construct($login = "", $password = ""){ //Não torna obrigatório informar login e senha no construtor
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }

    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
    }
}

/*

//p de parameter (convenção/padrão. Tem v de variável tbm)

CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogin VARCHAR(64),
pdessenha VARCHAR(256)
)
BEGIN
	INSERT INTO tb_usuarios (deslogin, dessenha) 
    VALUES (pdeslogin, pdessenha);
    
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();
END

*/

?>