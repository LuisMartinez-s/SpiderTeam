<?php
include('includes/encabezado.php');
?> 

<div class="container">
    <br />
    <br />
	<br />
	<br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        Si no se encuentra la respuesta a tu pregunta, te sugerimos ponerte en contacto con soporte en el correo: movilidad@ittepic.edu.mx
    </div>

    <br />

    <div class="" id="accordion">
        <div class="faqHeader">Preguntas Generales</div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >¿Cómo programo una visita?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="card-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos fugit quisquam voluptates ea ratione eius possimus ipsum adipisci, harum similique ex quaerat a quod repellendus temporibus sint accusantium fuga. 
                </div>
            </div>
		</div>
		
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Maximo de alumnos por visita</a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus obcaecati earum deserunt modi nostrum facilis aspernatur tenetur debitis officia eius! 
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Tiempo de anticipacion para  programar mi visita</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, eius est impedit sed laboriosam consequatur unde, id, cupiditate repellat autem alias iure deserunt doloremque in.
                </div>
            </div>
        </div>

        <div class="faqHeader">Certificaciones</div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Cisco</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus iure incidunt, exercitationem repudiandae voluptatem corporis esse quo sit accusantium repellendus, nemo consequatur. Accusantium molestiae sed non a sapiente itaque totam incidunt, necessitatibus quos facere quo.
                </div>
            </div>
        </div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">SolidWorks</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia velit, pariatur animi repudiandae dolore, ad enim atque eius assumenda asperiores modi deleniti incidunt aspernatur fugiat quod porro voluptas, consequuntur eaque error veritatis possimus debitis tempore illo.
                </div>
            </div>
        </div>

        <div class="faqHeader">Becas</div>
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Requisitos para solicitar beca socioeconómica</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo facilis expedita possimus illum id perspiciatis veniam vel dolorem eos, modi sapiente iste accusantium fugiat est quaerat facere nam, soluta sint nisi in debitis nulla quis blanditiis laudantium? Perspiciatis, nemo adipisci. Esse repellendus quae doloremque minus.
                </div>
            </div>
		</div>
		
        <div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Documentos</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ex voluptatem architecto rerum fugiat dolor?
                </div>
            </div>
		</div>
		
		<div class="card ">
            <div class="card-header">
                <h4 class="card-header">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsenine">Cuota por Trámite de Apoyo Educativo</a>
                </h4>
            </div>
            <div id="collapsenine" class="panel-collapse collapse">
                <div class="card-block">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius distinctio unde assumenda iste. Reprehenderit, animi tenetur modi porro culpa cum error recusandae labore temporibus dolores?
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>



<?php
 include('includes/pie.php');
?>
