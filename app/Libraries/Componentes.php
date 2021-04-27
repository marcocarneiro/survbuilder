<?php namespace App\Libraries;
    
    class Componentes
    {
        public function text($resposta, $pergunta)
        {
            $data = [
                'slug' => $pergunta['slug'],
                'texto_pergunta' => $pergunta['texto_pergunta'],
            ];		
            return view('componentes/text', $data);
        }

        public function textarea($resposta, $pergunta)
        {
            $data = [
                'slug' => $pergunta['slug'],
                'texto_pergunta' => $pergunta['texto_pergunta'],
            ];		
            return view('componentes/textarea', $data);
        }

        public function numberNeg1000_1000($resposta, $pergunta)
        {
            $data = [
                'slug' => $pergunta['slug'],
                'texto_pergunta' => $pergunta['texto_pergunta'],
            ];		
            return view('componentes/numberNeg1000_1000', $data);
        }

        public function number0_1000($resposta, $pergunta)
        {
            $data = [
                'slug' => $pergunta['slug'],
                'texto_pergunta' => $pergunta['texto_pergunta'],
            ];		
            return view('componentes/number0_1000', $data);
        }
        
        public function radio($resposta, $pergunta, $grupo, $revelid)
        {
            $data = [
                'revelid' => $revelid,
                'slug' => $pergunta['slug'],
                'texto_resposta' => $resposta['texto_resposta'],
                'grupo' => $grupo,
                'id' => $resposta['id']
            ];		
            return view('componentes/radio', $data);
        }

        public function checkbox($resposta, $pergunta, $grupo, $revelid)
        {
            $data = [
                'revelid' => $revelid,
                'slug' => $pergunta['slug'],
                'texto_resposta' => $resposta['texto_resposta'],
                'grupo' => $grupo,
            ];		
            return view('componentes/checkbox', $data);
        }

        /* public function select($respostas, $pergunta, $grupo, $revelid) */
        public function select($resposta, $pergunta, $grupo, $revelid)
        {
            $data = [
                'revelid' => $revelid,
                'slug' => $pergunta['slug'],
                'texto_resposta' => $resposta['texto_resposta'],
                'grupo' => $grupo,
            ];
            return view('componentes/select', $data);
        }

    }