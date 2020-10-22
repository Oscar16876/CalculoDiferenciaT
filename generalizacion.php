
<?php 
	require_once "header.php";
	require_once "menu.php";

 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-12">
 			<h1>Generalización del cálculo diferencial</h1>
 			<p>
 				Cuando una función depende de más de una variable, se utiliza el concepto de derivada parcial. Las derivadas parciales se pueden pensar informalmente como tomar la derivada de una función con respecto a una de ellas, manteniendo las demás variables constantes. Las derivadas parciales se representan como: <br>
 				<br>
 				<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/48d5ed7cbe913e8e308fbe55483bd0549928db5e" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -2.005ex; width:3.484ex; height:5.509ex;" alt="{\displaystyle {\frac {\partial }{\partial x}}}">
 				<br>
 				<br>
 				En donde <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/62b4e7c1cedb9564609aefd2aa2309972f455c24" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.338ex; width:1.318ex; height:2.176ex;" alt="\partial"> es una 'd' redondeada conocida como 'símbolo de la derivada parcial'. <br>

 				El concepto de derivada puede extenderse de forma más general. El hilo común es que la derivada en un punto sirve como una aproximación lineal a la función en dicho punto. Quizá la situación más natural es que las funciones sean diferenciables en las variedades. La derivada en un cierto punto entonces se convierte en una transformación lineal entre los correspondientes espacios tangentes, y la derivada de la función se convierte en un mapeo entre los grupos tangentes. <br>

 				Para diferenciar todas las funciones continuas y mucho más, se puede definir el concepto de distribución. Para las funciones complejas de una variable compleja, la diferenciabilidad es una condición mucho más fuerte que la simple parte real e imaginaria de la función diferenciada con respecto a la parte real e imaginaria del argumento. Por ejemplo, la función <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/03ddb2d646f842430bb4021790ac9bc4ab5fafd5" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.838ex; width:19.294ex; height:2.843ex;" alt="{\displaystyle f(x+{\mathrm {i} }y)=x+2{\mathrm {i} }y}"> satisface lo segundo, pero no lo primero. <br>

 			</p>
 		</div>
 	</div>
 </div>


 <?php 
 require_once "footer.php"
  ?>

