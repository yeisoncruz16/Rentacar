<?php

class Prueba{

    public $letra;
    public $numero = array ();
    public $hora;
    public $minutos;
    public $segundos;

    public function primero()
    {
        for ($a = 1; $a <= 100; $a++)
        {
            echo $a . "<br>";
        }
    }

    public function segundo()
    {
        for($a = 100; $a>=0; $a--)
        {
            echo $a . "<br>";
        }
    }

    public function tercero()
    {
        for($a=0; $a<=100; $a++)
        {
            if($a%2==0)
            {
                echo $a . "<br>";
            }
        }
    }

    public function cuarto()
    {
        $suma = 0;
        for($a=0; $a<=100; $a++)
        {
            $suma = $suma + $a;
        }
        echo "La suma es: " . $suma . "<br>";
    }

    public function quinto()
    {
        $contador = 0;
        for($a=0; $a<=100; $a++)
        {
            if($a%2!=0)
            {
                echo "Son impares: " .$a . "<br>";
                $contador++;
            }
        }
        echo "Hay: " . $contador . "numeros impares" . "<br>";
    }

    public function sexto()
    {
       $sumaP= 0;
       $sumaIP= 0;
       for($a=1; $a<=1000;$a++)
       {
           if($a%2==0)
           {
               $sumaP = $sumaP + $a;
           }
           else
           {
               $sumaIP = $sumaIP + $a;
           }
       }
       echo "La suma de los pares es: " .$sumaP . "<br>";
       echo "La suma de los impares es: " .$sumaIP;
    }

    public function septimo($letra)
    {
        foreach (count_chars($letra, 1) as $a => $val)
        {
            echo "Se han encontrado " . $val . "de: " . chr($a) . "<br>";
        }
    }

    public function octavo($numero)
    {
        $mayor=$numero[0];

        for($a=0; $a<count($this->numero); $a++)
        {
            if($numero[$a] < $mayor)
            {
                $mayor=$numero[$a];
            }
        }

        echo $mayor;
    }

    public function noveno()
    {
        $contadorP = 0;
        $contadorIP = 0;
        for ($a=1; $a<=100; $a++)
        {
            if($a%2==0)
            {
                $contadorP++;
            }
            elseif ($a%3==0)
            {
                $contadorIP++;
            }
        }
        echo "Hay: " .$contadorP . " multiplos de 2" . "<br>";
        echo "Hay: " .$contadorIP . " multiplos de 3" . "<br>";
    }

    public function decimo($hora, $minutos, $segundos)
    {
        for($h=0; $h<24; $h++)
        {
            for($m=0; $m<60; $m++)
            {
                for($s=0; $s<60; $s++)
                {
                }
            }
        }
        echo $h . ":" . $m . ":" . $s ."<br>";
    }
}


$obj = new Prueba();
$obj->decimo(10,14,20);




?>