<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function documentation(): string
    {
        return view('documentation');
    }

    public function download(): string
    {
        return view('download');
    }

    public function blast(): string
    {
        return view('blast');
    }

    public function explore(): string
    {
        return view('explore');
    }

    private function getInfo($id): Array 
    {
        $url = "./data/structures/$id/info.txt";
        $file_handle = fopen($url, 'r');
        $lines = "";
        if ($file_handle) {
            while (($line = fgets($file_handle)) !== false) {
                $lines = $lines.$line;
            }
            fclose($file_handle);
        } else {
            echo "Não foi possível abrir o arquivo.";
        }
        
        $info = explode("\t", $lines);
        return $info;
    }

    public function entry($id): string
    {
        $data = [];
        $data['id'] = $id;

        // código inexistente
        if(strlen($id) != 8){
            return view('404', $data);
        }

        // pega informações básicas
        $data['info'] = $this->getInfo($id);

        // pega informações do rna

        // pega informações da proteína

        // pega informações de contatos

        return view('entry', $data);
    }

}
