<?php include("../template/menu.php");

?>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Metodo por Sustitucion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>E</strong>n  cálculo integral, el método de sustitución se emplea para simplificar integrales definidas. Se realiza una sustitución en la variable de integración para transformar la integral en una forma más manejable. <br>El método de sustitución se emplea en matemáticas cuando se necesita simplificar una ecuación o sistema de ecuaciones, ya sea para resolver problemas o para facilitar su manipulación y resolución. Su uso puede variar según el contexto y el tipo de problema que se esté abordando.

         <a href="https://youtu.be/UZyG4jCBMgU?si=9B0LvFj9eOGilk4k">Aqui un video para introduccion al metodo de integracion por sustitucion</a>
         <br>
         <p>Para que puedas reforzar tus conocimientos o confirmar si tus resultados estan bien mediante el metodo de sustitucion <br><a href="https://www.calculadora-de-integrales.com">Aqui una herramienta muy util</a></p>
      </div>
      <img src="" alt="">
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Metodo de integracion por partes
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong></strong>El método de integración por partes es una técnica comúnmente utilizado en cálculo integral para encontrar la integral de un producto de dos funciones. Se basa en la regla del producto en la diferenciación, que es la derivada del producto de dos funciones. El método de integración por partes se emplea en situaciones en las que la integración directa no es sencilla y consiste en descomponer el integrando en dos funciones que luego se aplican en una fórmula específica.
        <br>
        <strong>Productos de funciones algebraicas:</strong> Cuando te encuentras con una integral definida o indefinida de la forma ∫u dv, donde u y dv son funciones que pueden ser diferenciadas y derivadas respectivamente, puedes aplicar el método de integración por partes. La fórmula general de integración por partes es:

        ∫u dv = u*v - ∫v du

        Donde "u" y "dv" se eligen de manera estratégica.

        <a href="https://youtu.be/93kW5colCAU?si=ahW7qXWftVxqlQ6j">Aqui un video para introduccion al metodo de integracion por partes</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Metodo por sustitucion trigonometrica
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong></strong>El método de sustitución trigonométrica es una técnica avanzada de cálculo integral que se utiliza para resolver integrales que involucran raíces cuadradas de expresiones cuadráticas o racionales. Este método es especialmente útil cuando te encuentras con integrales que incluyen términos de la forma:
        <br>
        <strong>
        √(a^2 - x^2), donde "a" es una constante. <br>
        √(x^2 - a^2), donde "a" es una constante. <br>
        √(x^2 + a^2), donde "a" es una constante. <br>
        </strong>
            
        El método de sustitución trigonométrica se emplea en estas situaciones para transformar la integral en una forma más manejable, generalmente mediante la introducción de una función trigonométrica adecuada. A continuación, te mostraré cuándo se utiliza este método:
        <br>
        <strong>Integrales de tipo √(a^2 - x^2):</strong> Si te enfrentas a una integral que contiene la forma √(a^2 - x^2), puedes usar la sustitución trigonométrica para expresar x en términos de una función trigonométrica, como seno o coseno. Por ejemplo, podrías utilizar x = a * sen(θ) o x = a * cos(θ) para simplificar la integral.
        <br>
        <strong>Integrales de tipo √(x^2 - a^2):</strong> Si tienes una integral con la forma √(x^2 - a^2), la sustitución trigonométrica se emplea para expresar x en términos de una función trigonométrica, como seno o coseno. En este caso, podrías utilizar x = a * sec(θ) o x = a * csc(θ).
        <br>
        <strong>Integrales de tipo √(x^2 + a^2):</strong> Cuando te encuentras con integrales que incluyen la forma √(x^2 + a^2), la sustitución trigonométrica se utiliza para expresar x en términos de bruna función hiperbólica trigonométrica, como seno hiperbólico o coseno hiperbólico. Puedes utilizar x = a * senh(θ) o x = a * cosh(θ) para simplificar la integral.
        <br>
        <a href="https://youtu.be/jjqvOjQFnhI?si=v9ArILrUufwbQJ6_">Aqui un video para introduccion al metodo de integracion por partes</a>
        
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Metodo por fracciones parciales
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong></strong> El método de integración por fracciones parciales se emplea principalmente para descomponer una función racional (una fracción en la que tanto el numerador como el denominador son polinomios) en una suma de fracciones más simples. Esto facilita la integración de la función racional, ya que permite expresarla como una combinación de integrales más manejables.El método de integración por fracciones parciales se utiliza en los siguientes casos:
        <br>        
        <strong>Integración de funciones racionales:</strong> Cuando tienes una función racional, es decir, una fracción en la que el grado del numerador es menor que el grado del denominador o es igual al grado del denominador (pero no mayor), puedes utilizar la descomposición en fracciones parciales para facilitar su integración.
        <br>        
        <strong>Descomposición de fracciones complejas:</strong> Si te encuentras con una fracción compleja, que es una fracción en la que el denominador es un polinomio y el numerador también es un polinomio o una combinación de polinomios, puedes aplicar el método de fracciones parciales para descomponerla en fracciones simples.
        <br>      
        <strong>Resolución de integrales impropias:</strong> El método de fracciones parciales también se aplica a integrales impropias en las que el límite superior de integración tiende al infinito. Esto puede simplificar la integral y permitir una evaluación más sencilla.
        <br>        
        El proceso general para utilizar el método de integración por fracciones parciales implica descomponer la función racional en fracciones más simples, y luego integrar cada una de esas fracciones individualmente. La descomposición en fracciones parciales depende de la naturaleza de los factores irreducibles en el denominador y puede involucrar fracciones lineales, fracciones cuadráticas o fracciones irreducibles de orden superior.
        <br>   
        En resumen, el método de integración por fracciones parciales se emplea cuando se desea integrar una función racional o descomponer una fracción compleja en fracciones más simples, lo que simplifica la tarea de integración. La elección de las fracciones parciales y su descomposición depende de la forma del denominador y de los factores irreducibles presentes en él.

        <a href="https://youtu.be/6pFmUh41jsQ?si=btebxLLS8HCQhI5D">Aqui un video para introduccion al metodo de integracion por partes</a>
        <br>
        <p>Como sabemos que el video anterior no puede ser suficiente para que puedas aprender de buena manera link <a href="https://www.neurochispas.com/wiki/ejercicios-de-integrales-por-fracciones-parciales/">aqui</a> te proponemos otro link que te pueda ayudar</p>
        
        </div>
    </div>
  </div>
</div>
<?php include("../template/footer.php");

?>