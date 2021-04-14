@extends('cabecera')
@section('contenido_especifico')
<!DOCTYPE html>
<html>
<body class="header2" id="view-nosotros">
    <h1 class="h1-primario">CONOCE SOBRE NOSOTROS</h1>
         <div class="seccion-inferior contenedor seccion">
        <section class="blog">
            <h3 class="centrar-texto fw-300">ACONTECIMIENTOS</h3>
        
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/dia.jpg" height="250" width="250">
                </div>
                <div class="texto-entrada">
                        <h4>DIA DEL BARTENDER (15 de Abril)</h4>
                    <p>En 1941 un grupo de Bartenders porteños se reunieron en una cena de camaraderia para solidarizarse con la revista <b>El Barman Magazine</b>, que vio la luz en el año 1936.</p><br>

                    <p>Este mismo dia se constituyo la <b>Asociacion Mutual de Barmen y Afines</b>(A.M.B.A), y la revista, que comenzo a llamarse.<a href="https://www.agaba.net" target="_blank"><h5>El Barman</h5></a>
                    <p>Y esta mis a revista se transformo en el organo oficial de la sociedad, la primera en toda America y la segunda en el mundo.</p>
                </div>
            </article>   
            <br>  
             <article class="entrada-blog">
                <div class="imagen">
                    <img src="img/fundacion.jpg" height="250" width="250">
                </div>
                <div class="texto-entrada">
                        <h4>FUNDACION</h4>
                    <p>En 1947 A.M.B.A, consiguio casa propia, la misma que actualmente funciona en AV.Juan de Garay 1927, en el barrio de San Cristobal.</p><br>

                    <p>Como mutual brinda a sus socios un sin fin de servicios, ademas de ser pionera en instituir cursos especificos de cocteleria.La misma para el año 1956, ingreso a la<a href="https://www.agaba.net" target="_blank"><h5>I.B.A. (International Bartending Asociation)</h5></a>
                    <p>siendo argentina el primer pais no Europeo en formar parte, y el decimosegundo en el mundo.</p>
                </div>
            </article>     
        </section>  

         <section class="decagolo">
            <h3 class="centrar-texto fw-300">EL DECAGOLO DEL BARMAN</h3>
            <article class="entrada-blog">
                <div class="texto-entrada">
                    <h4>EL BARMAN GALANTE</h4>
                    <P>EL DECAGOLO:</P><br>
                    <p>I. El barman es un artista y la cocteleria un arte que se nutre de espíritu, sabor, aroma y color.</p>
                    <p>II. La misión del barman es alegrar, no embriagar.</p>
                    <p>III. Haz del cliente un amigo y no del amigo un cliente.</p>
                    <p>IV. No ofrezcas nunca una copa sin una sonrisa.</p>
                    <p>V. Habla lo nesesario, no escuches lo ajeno y olvida las confidencias del amigo.</p>
                    <p>VI. Sé el mas limpio, el más elegante, el más cordial, el más fino, en todo momento y en todo lugar.</p>
                    <p>VII. No hagas trampas con las bebidas ni jueges con la confianza de tus amigos:Sirveles siempre lo mejor.</p>
                    <p>VIII. Sé paciente con los que te ayudan en el bar, enséñales tu oficio con amor. No los engañes.</p>
                    <p>IX. Lleva encendida la solidaridad profesional y no permitas que nadie te quebrante.</p>
                    <p>X Siente el orgullo de ser Barman, pero merécelo.</p><br>
                    <div class="imagen">
                    <img src="img/be.jpg" height="500" width="500">
                    </div>
                </div>
            </article>     
          </section>
        </div>

</body>
</html>
@endsection 
@section('pie')
     <div>
      <footer class="bg-light text-center">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-dark" href="https://mdbootstrap.com/">LBartender.com</a>
        </div>
        <!-- Copyright -->
      </footer>
    </div>
@endsection 
