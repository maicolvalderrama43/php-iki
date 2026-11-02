<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estructura de Control Secuencial</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f0f2f5; margin: 20px; color: #333; }
        h1 { text-align: center; color: #0056b3; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 20px; }
        .ejercicio { background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .ejercicio h3 { margin-top: 0; color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 5px; font-size: 16px; }
        .res { background: #e8f4f8; padding: 10px; border-radius: 5px; font-family: monospace; white-space: pre-wrap; font-size: 14px;}
        .datos { font-size: 13px; color: #555; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Taller Control Secuencial </h1>
    <div class="grid">
    <?php
    function print_ej($num, $titulo, $datos, $resultado) {
        echo "<div class='ejercicio'>";
        echo "<h3>Ej. $num: $titulo</h3>";
        echo "<div class='datos'><strong>Datos:</strong> $datos</div>";
        echo "<div class='res'><strong>Resultado:</strong><br>$resultado</div>";
        echo "</div>";
    }

    // Ejercicio 1
    $e1=20; $e2=25; $e3=30; $prom=($e1+$e2+$e3)/3;
    print_ej(1, "Promedio de edad", "Edades: 20, 25, 30", "Promedio: ".number_format($prom, 2));

    // Ejercicio 2
    $cap=50000; $gan=$cap*0.02;
    print_ej(2, "Inversión Banco (2%)", "Capital: $50,000", "Ganancia 1 mes: $".number_format($gan,2));

    // Ejercicio 3
    $sb=1000; $v1=300; $v2=400; $v3=500; $com=($v1+$v2+$v3)*0.10; $tot=$sb+$com;
    print_ej(3, "Comisiones Vendedor", "Sueldo: 1000, Ventas: 300, 400, 500", "Comisiones: $com\nTotal a recibir: $tot");

    // Ejercicio 4
    $comp=200; $desc=$comp*0.15; $pag=$comp-$desc;
    print_ej(4, "Descuento Tienda (15%)", "Compra: 200", "Descuento: $desc\nTotal a pagar: $pag");

    // Ejercicio 5
    $p1=4.0; $p2=3.5; $p3=4.5; $ex=3.8; $tf=4.2; 
    $parc=($p1+$p2+$p3)/3; $cal=($parc*0.55)+($ex*0.3)+($tf*0.15);
    print_ej(5, "Calificación Final", "Parciales: 4.0, 3.5, 4.5\nExamen: 3.8, Trabajo: 4.2", "Calificación: ".number_format($cal,2));

    // Ejercicio 6
    $h=12; $m=18; $tot_g=$h+$m; $ph=($h/$tot_g)*100; $pm=($m/$tot_g)*100;
    print_ej(6, "Porcentaje Hombres/Mujeres", "Hombres: 12, Mujeres: 18", "Hombres: ".number_format($ph,2)."%\nMujeres: ".number_format($pm,2)."%");

    // Ejercicio 7
    $mts=5; $pulg=$mts*39.27; $pies=$pulg/12;
    print_ej(7, "Metros a Pies y Pulgadas", "Metros: 5", "Pulgadas: $pulg\nPies: ".number_format($pies,2));

    // Ejercicio 8
    $a=6; $b=8; $c=10; $p=($a+$b+$c)/2; $area=sqrt($p*($p-$a)*($p-$b)*($p-$c));
    print_ej(8, "Área Triángulo", "Lados: 6, 8, 10", "Área: $area");

    // Ejercicio 9
    $ht=45; $phr=15; $sb=$ht*$phr; $sn=$sb-($sb*0.20);
    print_ej(9, "Salario Neto (-20% imp)", "Horas: 45, Precio/Hr: 15", "Sueldo Base: $sb\nSalario Neto: $sn");

    // Ejercicio 10
    $ca=1500; $pes_a=($ca/100)*956.871; 
    $dg=2500; $pes_d=($dg/100)*88.607; $fran=$pes_d/20.110;
    $pes=5000; $dol=$pes/122.499; $lir=($pes/9.289)*100;
    print_ej(10, "Cambio de Divisas", "Cheles(1500), Dracmas(2500), Pesetas(5000)", "Cheles->Pesetas: ".number_format($pes_a,2)."\nDracmas->Francos: ".number_format($fran,2)."\nPesetas->Dólares: ".number_format($dol,2)."\nPesetas->Liras: ".number_format($lir,2));

    // Ejercicio 11
    $hn=40; $phn=50; $he=10; $phe=$phn*1.25; $hijos=2;
    $sb=($hn*$phn)+($he*$phe); $ded=($sb*0.05)+($sb*0.02)+($sb*0.07);
    $asig=25000+(17300*$hijos)+18000; $sneto=$sb-$ded+$asig;
    print_ej(11, "Nómina Trabajador", "H_Norm: 40($50), H_Ext: 10, Hijos: 2", "Asignaciones: $asig\nDeducciones: $ded\nSueldo Neto: $sneto");

    // Ejercicio 12
    $mat= (90*0.9)+(((80+85+90)/3)*0.1);
    $fis= (80*0.8)+(((70+80)/2)*0.2);
    $qui= (85*0.85)+(((80+90+85)/3)*0.15);
    $pg=($mat+$fis+$qui)/3;
    print_ej(12, "Promedio 3 Materias", "Mates, Física, Química", "Matemática: ".number_format($mat,2)."\nFísica: ".number_format($fis,2)."\nQuímica: ".number_format($qui,2)."\nPromedio General: ".number_format($pg,2));

    // Ejercicio 13
    $b= [5, 10, 15, 20, 25, 30, 50, 100]; 
    $tot_din = $b[0]*50000 + $b[1]*20000 + $b[2]*10000 + $b[3]*5000 + $b[4]*2000 + $b[5]*1000 + $b[6]*500 + $b[7]*100;
    print_ej(13, "Billetes en Banco", "5 de 50k, 10 de 20k, 15 de 10k...", "Total en banco: $tot_din");

    // Ejercicio 14
    $a=2; $b=3; $c=5; $d=4; $e=1; $f=6; $denom=($a*$e)-($b*$d);
    $x=(($c*$e)-($b*$f))/$denom; $y=(($a*$f)-($c*$d))/$denom;
    print_ej(14, "Ecuaciones Lineales", "2x+3y=5, 4x+1y=6", "X = $x\nY = $y");

    // Ejercicio 15
    $la=12500; $lc=13200; $ckw=150; $pago=($lc-$la)*$ckw;
    print_ej(15, "Luz Eléctrica", "L. Ant: 12500, L. Act: 13200, Costo: 150", "Monto a pagar: $pago");

    // Ejercicio 16
    $al=4; $an=1.5; $areal=$al*$an; $ap=0.5;
    $piez=floor($areal/$ap); $desp=$areal-($piez*$ap);
    print_ej(16, "Láminas de Hierro", "Lámina 4x1.5m, Pieza 0.5m", "Piezas fabricadas: $piez\nDesperdicio: $desp m");

    // Ejercicio 17
    $pf=85000; $pvp=100000; $desc_p=(($pvp-$pf)/$pvp)*100;
    print_ej(17, "Porcentaje Descuento", "PVP: 100k, Final: 85k", "Descuento aplicado: ".number_format($desc_p,2)."%");

    // Ejercicio 18
    $gal=12; $lit=$gal*3.785; $cobro=$lit*100;
    print_ej(18, "Gasolinera", "Galones: 12, Precio Lt: 100Bs", "Total a cobrar: Bs. ".number_format($cobro,2));

    // Ejercicio 19
    $pres=5000000; $gin=$pres*0.4; $tra=$pres*0.3; $ped=$pres*0.3;
    print_ej(19, "Presupuesto Hospital", "Total: 5,000,000", "Ginecología (40%): $gin\nTraumatología (30%): $tra\nPediatría (30%): $ped");

    // Ejercicio 20
    $cap_p=150000; $int=45000; $t=4; $r=($int*100)/($cap_p*$t);
    print_ej(20, "Interés Anual Préstamo", "Préstamo: 150k, Int: 45k en 4 años", "Tasa de Interés: ".number_format($r,2)."%");

    // Ejercicio 21
    $nx=48000; $ny=6; $nk=42000; $doc=($nx/12); $inversion=$doc*$ny; $ganancia=$nk-$inversion; $p_gan=($ganancia/$inversion)*100;
    print_ej(21, "Mayorista Naranjas", "X=48000, Y=6, K=42000", "Inversión: $inversion\nPorcentaje Ganancia: $p_gan%");

    // Ejercicio 22
    $pc=1500000; $cuota=140000; $p_cred=$cuota*12; $recargo=(($p_cred-$pc)/$pc)*100;
    print_ej(22, "Recargo Computador", "Contado: 1.5M, 12 Cuotas de 140k", "Porcentaje de Recargo: ".number_format($recargo,2)."%");

    // Ejercicio 23
    $M=452; $N=197; $B1=132; $B2=180; $B3=7.50; $B4=14.50;
    $pq_h=floor($M/24); $sh=$M%24; $cj_a=floor($N/15); $sa=$N%15;
    $ing_total=($pq_h*$B1)+($sh*$B3)+($cj_a*$B2)+($sa*$B4);
    print_ej(23, "Planta Maíz (Ton)", "M=452, N=197, B1=132, B2=180, B3=7.5, B4=14.5", "Ingreso Total: $ing_total");
    ?>
    </div>
</body>
</html>