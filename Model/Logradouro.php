<?php

    class Logradouro{
        public $id, $idUsuario, $cepLogradouro, $nomeLogradouro, $bairroLogradouro, $numLogradouro, $cidadeLogradouro, $estadoLogradouro;

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getcepLogradouro(){
          return $this->cepLogradouro;
        }
        public function setcepLogradouro($cepLogradouro){
            $this->cepLogradouro = $cepLogradouro;
        }

        public function getNomeLogradouro(){
          return $this->nomeLogradouro;
        }
        public function setNomeLogradouro($nomeLogradouro){
            $this->nomeLogradouro= $nomeLogradouro;
        }
        public function getNumLogradouro(){
          return $this->numLogradouro;
        }
        public function setNumLogradouro($numLogradouro){
            $this->numLogradouro= $numLogradouro;
        }

        public function getBairroLogradouro(){
          return $this->bairroLogradouro;
        }
        public function setBairroLogradouro($bairroLogradouro){
            $this->bairroLogradouro= $bairroLogradouro;
        }
        
        public function getCidadeLogradouro(){
          return $this->cidadeLogradouro;
        }
        public function setCidadeLogradouro($cidadeLogradouro){
            $this->cidadeLogradouro = $cidadeLogradouro;
        }

        public function getEstadoLogradouro(){
          return $this->estadoLogradouro;
        }
        public function setEstadoLogradouro($estadoLogradouro){
            $this->estadoLogradouro = $estadoLogradouro;
        }




    }
?>