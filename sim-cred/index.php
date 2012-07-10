<?php

class Corrida{

    public $cap; // Capital
    public $nc; // Número de Cuotas
    public $tea; // Taza Efectiva Anual
    public $tem; // Taza Efectiva Mensual
    public $tip; // Taza de Interés P...
    public $cuota; // Cuota Mensual
    public $corrida; // Data de la corrida
    public $corridaRango; // Data del rango de corridas
    public $interes; // Interés total

    public static function f($n){
        return sprintf('%.2f',$n);
    }

    public static function fp($n){
        return sprintf('%.2f%%',$n*100);
    }

    public function __construct($cap, $tea){
        $this->cap = $cap;
        $this->tea = $tea;
    }

    public function printHead(){
        return "TEM: ".self::f($this->tem*100)."% |".
               "TIP: ".self::f($this->tip*100)."% |".
               "Cuota: ".self::f($this->cuota).'<div style="clear: both;"></div>';
    }

    public function doCorridaRango($min = 1, $max = 30){
        foreach(range($min, $max) as $i){
            $this->doCorrida($i);
            foreach(array('tip','cuota','interes') as $field){
                $this->corridaRango[$i][$field] = $this->$field;
            }
        }
    }

    public function printCorridaRangoV(){
        $fields = array('tip','cuota','interes');
        $t =  '<table id="rangoV" border="1">';
        $t .= '<thead>';
        $t .= '<tr>';
        $t .= '<th>n</th>';
        foreach($fields as $field){
            $t .= '<th>'.$field.'</th>';
        }
        $t .= '</tr>';
        $t .= '</thead>';
        $t .= '<tbody>';
        foreach($this->corridaRango as $i => $row ){
            $t .= '<tr>';
            $t .= '<th>'.$i.'</th>';
            foreach($fields as $field){
                $f = $field=='tip'?'fp':'f';
                $t .= '<td>'.self::$f($row[$field]).'</td>';
            }
            $t .= '</tr>';
        }
        $t .= '</tbody>';
        $t .= '</table>';
        return $t;
    }

    public function printCorridaRangoH(){
        $t =  '<table border="1">';
        $t .= '<thead>';
        $t .= '<tr>';
        $t .= '<th>n</th>';
        foreach($this->corridaRango as $i => $row ){
            $t .= '<th>'.$i.'</th>';
        }
        $t .= '</tr>';
        $t .= '</thead>';
        $t .= '<tbody>';
        foreach(array('tip','cuota','interes') as $field){
            $f = $field=='tip'?'fp':'f';
            $t .= '<tr>';
            $t .= '<th>'.$field.'</th>';
            foreach($this->corridaRango as $row){
                $t .= '<td>'.self::$f($row[$field]).'</td>';
            }
            $t .= '</tr>';
        }
        $t .= '</tbody>';
        $t .= '</table>';
        return $t;
    }

    public function doCorrida($nc){
        $this->nc = $nc;
        $this->tem = pow(1+$this->tea,1/12)-1;
        $this->tip = $this->tem/(1-pow(1+$this->tem,$this->nc*-1));
        $this->cuota = $this->cap * $this->tip;
        $saldoCapital = $this->cap;
        $this->corrida = array();
        $this->interes = 0;
        foreach(range(1,$nc) as $i){
            $interes = $saldoCapital * $this->tem;
            $k = $this->cuota - $interes;
            $saldoCapital -= $k;
            $this->corrida[] = array('sc'=>$saldoCapital,'k'=>$k,'interes'=>$interes);
            $this->interes += $interes;
        }

    }

    public function printCorrida(){
        $t =  '<table border="1">';
        $t .= '<thead>';
        $t .= '<tr>';
        $t .= '<th>n</th>';
        $t .= '<th>Saldo</th>';
        $t .= '<th>Cuota</th>';
        $t .= '<th>Capital K</th>';
        $t .= '<th>Interes</th>';
        $t .= '</tr>';
        $t .= '</thead>';
        $t .= '<tfoot><tr><th colspan="3">Total Interes</th><th colspan="2">'.self::f($this->interes).'</th></tr></tfoot>';
        $t .= '<tbody>';
        foreach($this->corrida as $i => $row){
            $t .= '<tr>';
            $t .= '<td>'.($i+1).'</td>';
            $t .= '<td>'.self::f($row['sc']).'</td>';
            $t .= '<td>'.self::f($this->cuota).'</td>';
            $t .= '<td>'.self::f($row['k']).'</td>';
            $t .= '<td>'.self::f($row['interes']).'</td>';
            $t .= '</tr>';
        }
        $t .= '</tbody></table>';
        return $t;
    }

}

$isPost = isset($_POST['capital']);
if($isPost){
    $c = new Corrida($_POST['capital'], $_POST['tea']);
    $c->doCorrida($_POST['nc']);
}
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.load("jquery", "1.4.2");
      google.setOnLoadCallback(function(){
        var data = [['x', 'Cuota', 'Interes']];
        $('#rangoV tbody tr').each(function(){
            $tds = $(this).find('td');
            data.push([$(this).find('th')[0].innerText,parseFloat($tds[1].innerText),parseFloat($tds[2].innerText)]);
        });
        new google.visualization.LineChart(document.getElementById('chart_div')).draw(google.visualization.arrayToDataTable(data));
      });
      
    </script>
  </head>
  <body>

    <form method="POST">
        Capital: <input size="5" name="capital"  <?=$isPost?' value="'.$c->cap.'"':''?>> |
        n&deg; Cuotas: <input size="2" name="nc" <?=$isPost?' value="'.$c->nc .'"':''?>> |
        TEA: <select name="tea">
                <option value="0.1550">15.50%</option>
                <option value="0.1900">19.00%</option>
                <option value="0.2700">27.00%</option>
                <option value="0.1108">11.08%</option>
             </select> |
        <input type=submit>
    </form>

    <?if($isPost):?>
        <?=$c->printHead()?>
        <div style="width: 300px; float: left;">
            <?=$c->printCorrida()?>
        </div>
        <div style="width: 270px; float: left;">
            <? $c->doCorridaRango() ?>
            <?=$c->printCorridaRangoV()?>
        </div>
        <div id="chart_div" style="float: left; width: 900px; height: 500px;"></div>
    <? endif; ?>

  </body>
</html>
