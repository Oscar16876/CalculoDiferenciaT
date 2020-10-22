<?php 
	require_once "header.php";
	require_once "menu.php";

 ?>

 <div class="container">
 	<div class="row">
 		<div class="col-sm-12">
 			<h1>Diferenciación y diferenciabilidad</h1>
 			<p>
 				Una función de una variable es diferenciable en un punto x si su derivada existe en ese punto; una función es diferenciable en un intervalo si lo es en cada punto x perteneciente al intervalo. Si una función no es continua en c, entonces no puede ser diferenciable en c; sin embargo, aunque una función sea continua en c, puede no ser diferenciable. Es decir, toda función diferenciable en un punto c es  continua en c, pero no toda función continua en c es diferenciable en c (como f(x) = |x| es continua, pero no diferenciable en x = 0). <br>
 				<br>

 				<a href="//commons.wikimedia.org/wiki/File:Derivative.svg" class="image"><img alt="" src="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/Derivative.svg/220px-Derivative.svg.png" decoding="async" width="220" height="244" class="thumbimage" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/18/Derivative.svg/330px-Derivative.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/18/Derivative.svg/440px-Derivative.svg.png 2x" data-file-width="1158" data-file-height="1282"></a>
 				<br>

 				<br>
 				Noción de derivada. <br>
 				Artículo principal: Derivada <br>

 				Recta secante entre los puntos f(x+h) y f(x). <br>
 				Las derivadas se definen tomando el límite de la pendiente de las rectas secantes conforme se van aproximando a la recta tangente. <br>
 				Es difícil hallar directamente la pendiente de la recta tangente de una función porque sólo se conoce un punto de esta, el punto donde ha de ser tangente a la función. Por ello, se aproxima la recta tangente por rectas secantes. Cuando se tome el límite de las pendientes de las secantes próximas, se obtendrá la pendiente de la recta tangente. <br>
 				Para obtener estas pendientes, tómese un número arbitrariamente pequeño que se denominará h. h representa una pequeña variación en x, y puede ser tanto positivo como negativo.

 				La pendiente de la recta entre los puntos  <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d730f6bf0fb1b107472f5eadfba7665192be2ca" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.671ex; width:6.188ex; height:2.176ex;" alt="{\displaystyle \scriptstyle (x,f(x))\,}"> 
 				y

 				<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/eb1af7c3a46fc798a7464143538e2585f998b586" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.671ex; width:10.638ex; height:2.176ex;" alt="{\displaystyle \scriptstyle (x+h,f(x+h))\,}">

 				 es 

 				 <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5a9681865e37dcfcdfff3457525f3bce54a182b5" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -2.005ex; width:16.691ex; height:5.843ex;" alt="{\displaystyle f(x+h)-f(x) \over h}">


 				Esta expresión es un cociente diferencial de Newton. La derivada de f en x  es el límite del valor del cociente diferencial conforme las líneas secantes se acercan más a la tangente: <br>
 				<br>
 				<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/532b1fb2dc92a00dbd79baab51e3b8f0074dd3fb" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -2.005ex; width:28.733ex; height:5.843ex;" alt="{\displaystyle f'(x)=\lim _{h\to 0}{f(x+h)-f(x) \over h}}">
 				<br>

 				Si la derivada de f existe en cada punto x, es posible entonces definir la derivada de f como la función cuyo valor en el punto x es la derivada de f en x. <br>
 				<br>

 				Puesto que la inmediata sustitución de h por 0 da como resultado una división por cero, calcular la derivada directamente puede ser poco intuitivo. Una técnica consiste en simplificar el numerador de modo que la h del denominador pueda cancelarse. Esto resulta muy sencillo con funciones polinómicas, pero para la mayoría de las funciones resulta demasiado complicado. Afortunadamente, hay reglas generales que facilitan la diferenciación de la mayoría de las funciones. <br>
 				<br>

 				El cociente diferencial alternativo. <br>
 				La derivada de f(x) (tal como la definió Newton) se describió como el límite, conforme h se aproxima a cero. Una explicación alternativa de la derivada puede interpretarse a partir del cociente de Newton. Si se utiliza la fórmula anterior, la derivada en c es igual al límite conforme h se aproxima a cero de [f(c + h) - f(c)] / h. Si se deja que h = x - c (por ende, c + h = x), entonces x se aproxima a c (conforme h tiende a cero). Así, la derivada es igual al límite conforme x se aproxima a c, de [f(x) - f(c)] / (x - c). Esta definición se utiliza para una demostración parcial de la regla de la cadena. <br>
 				<br>
 				<br>

 				Funciones de varias variables. <br>
 				Para funciones de varias variables <img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/58fa8a698b05433f8431190a957e0f413cda8e7d" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -0.671ex; width:13.079ex; height:2.676ex;" alt="{\displaystyle f:\mathbb {R} ^{m}\to \mathbb {R} ^{n}}"> , las condiciones de diferenciabilidad son más estrictas y requieren más condiciones a parte de la existencia de derivadas parciales. En concreto, se requiere la existencia de una aproximación lineal a la función en el entorno de un punto. Dada una base vectorial, esta aproximación lineal viene dada por la matriz jacobiana: <br>
 				<br>
 				<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a048e24d78c9ca3ae560e15abbb39050efde4a4a" class="mwe-math-fallback-image-inline" aria-hidden="true" style="vertical-align: -2.671ex; width:39.113ex; height:6.509ex;" alt="{\displaystyle \lim _{\|\mathbf {h} \|\to \mathbf {0} }{\frac {\mathbf {f} (\mathbf {x_{0}} +\mathbf {h} )-\mathbf {f} (\mathbf {x_{0}} )-\mathbf {J} (\mathbf {x_{0}} )\mathbf {h} }{\|\mathbf {h} \|}}=\mathbf {0} }">

 				<br>
 			</p>
 		</div>
 	</div>
 </div>


 <?php 
 require_once "footer.php"
  ?>
