
<?php 
	require_once "header.php";
	require_once "menu.php";

 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-12">
 			<h1>Aplicaciones importantes del cálculo diferencial</h1>
 			<p>
 				El cálculo diferencial en el Modelo de seguro de liquidez (Diamond & Dybvig, 1983). <br>
 				La primera pregunta que se hace la Microeconomía bancaria es: ¿por qué existen los
 				intermediarios financieros?, lo que lleva a plantear que estas instituciones se especializan en
 				actividades cuyas tecnologías de transacción permiten el aprovechamiento de las economías
 				de escala y economías de alcance; originándose dos problemas adicionales: <br> <br>
 				1) La necesidad de transformar la calidad de los activos. <br>
 				2) No existen mercados para transar los préstamos bancarios (los intermediarios
 				financieros deben mantener sus contratos hasta el vencimiento) <br> <br>
 				Los intermediarios financieros pueden verse como una coalición de agentes individuales que
 				aprovechan las economías de escala y economías de alcance en las tecnologías de
 				transacción. Adicional a esto, el costo de hacer funcionar un intermediario financiero es menor
 				que los costos de transacción de no instalar un sistema de intermediación financiera porque no
 				se financiarían múltiples proyectos económicamente redituables por razones de información
 				asimétrica. <br>
 				Para responder a la pregunta inicial, se originaron tres modelos de coalición por diferentes
 				autores: <br> <br>
 				1) Seguro de liquidez (Diamond & Dybvig, 1983). <br>
 				2) Compartir información (Leland & Pyle, 1977). <br>
 				3) Monitoreo delegado (Diamond, 1984). <br> <br>
 				En el modelo de Seguro de Liquidez, donde la idea fundamental es que el intermediario
 				financiero es un “pool” de liquidez que asegura a los agentes individuales contra shocks
 				específicos (shocks no correlacionados) que afectan sus necesidades de consumo de fondos,
 				constituye un modelo dinámico debido a que se analiza por períodos de tiempo (t = 0, 1, 2): 
 				<br> <br>
 				- En t = 0, cada agente tiene posee una unidad monetaria y son idénticos, buscando su
 				utilidad de consumo U(Ct). <br>
 				- En t=1, los agentes observan si deben consumir en t=1 o t=2, que depende de:
 				Utilidad esperada (EU) = π1*U(C1) +π2*ρ* U(C2) con ρ<1. <br>
 				- La tecnología de inversión de largo plazo (ilíquida: bonos, títulos valores): posee un
 				Retorno (R)>1 en t=2 y un Valor de liquidación (L) <1 en t=1. <br> <br>
 				Nomenclador: πi = probabilidad de ser tipo i con i = 1, 2 con π1 + π2 = 1. <br>
 				 ρ = factor de descuento intertemporal. <br>
 				  C1 = consumo en t=1. <br>
 				   C2 = consumo en t=2. <br> <br>
 				   Este modelo diferencia cuanto se invierte y cuanto se mantiene en liquidez por parte de los
 				   agentes con el supuesto principal, que los agentes no retiran anticipadamente o consumen sin
 				   tener shocks. Lo descrito anteriormente constituye la parte general del modelo debido a que
 				   este se divide en cuatro escenarios:
 				   <br>
 				   i. Autarquía: el agente maximiza EU sujeto a que requiere mantener todo líquido en C1
 				   e invertir todo en C2.
 				   <br>
 				   ii. Mercados Financieros (MF): adiciona a la maximización de EU la posibilidad de
 				   invertir en bonos sin riesgo en t=1, que promete el pago de una unidad en t=2 siendo
 				   el precio (p)<1.
 				   <br>
 				   iii. Asignación eficiente (óptima): Demuestra que los mercados financieros no proveen
 				   un seguro eficiente de liquidez.
 				   <br>
 				   iv. Intermediación financiera (IF): puede implementarse si el IF ofrece un contrato de
 				   depósito.
 				   <br> <br>
 				   Dentro de los cuatro escenarios mencionados que se analizan en el Modelo de Seguro de
 				   Liquidez, el cálculo diferencial es empleado para validar la afirmación planteada en el tercer
 				   escenario que a su vez repercute en el cuarto. 
 				   <br> <br>
 				   La asignación óptima se describe
 				   matemáticamente de la siguiente forma:
 				   <br>
 				   Max ER sujeta a: π1*C1 + π2*C2/R = 1 que es la restricción presupuestal temporal.
 			</p>
 		</div>
 	</div>
 </div>


 <?php 
 require_once "footer.php"
  ?>

