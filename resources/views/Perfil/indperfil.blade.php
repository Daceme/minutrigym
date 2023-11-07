@extends('HomeUsuario.indhomeusuario')
@section('Perfil')
    <link rel="stylesheet" href="/style/EPerfil/estiloperfil.css">

    <div class="todo-el-cont">

        <main class="allperfil">

            <div class="titulo-perfil">
                <div class="box-titulos">
                    <h1>Perfil</h1>
                    <br>
                    <p>Aquí se almacenaran los datos de tu perfil</p>
                </div>
            </div>

            {{-- Botón cerrar sesión --}}
            <div class="content-top">
                <div class="div-btn">
                    <a href="/Login" class="btn-cerrar-sesión"><b>Cerrar Sesión</b></a>
                </div>
            </div>

            <div class="cont-info">

                {{-- Caja de contenido dividida --}}
                <div class="foto-info">

                    <div class="foto-izq">
                        <div class="div-foto-izq">
                            <div class="box-foto">
                                <img class="image" src="/img/imgHoUs/Perfil.png" alt="" />
                            </div>
                            <div class="box-editar">
                                <a href="#" class="btn-editar-foto"><b>Editar foto</b></a>
                            </div>
                        </div>
                    </div>

                    <div class="info-user">
                        <div class="div-info-user">

                            <div class="nombre-doc">

                                <div class="nombre">
                                    <div class="box-title">
                                        <h4>Nombre</h4>
                                    </div>
                                    <div class="box-infopers">
                                        <p>Juan David Rodriguez</p>
                                    </div>
                                </div>
                                <div class="doc">
                                    <div class="box-title">
                                        <h4>Documento</h4>
                                    </div>
                                    <div class="box-infopers">
                                        <p>1015849394</p>
                                    </div>
                                </div>
                            </div>

                            <div class="correo-numero">
                                <div class="correo">
                                    <div class="box-title">
                                        <h4>Correo</h4>
                                    </div>
                                    <div class="box-infopers">
                                        <p>familiarodriguez@gmail.com</p>
                                    </div>
                                </div>
                                <div class="numero">
                                    <div class="box-title">
                                        <h4>Celular</h4>
                                    </div>
                                    <div class="box-infopers">
                                        <p>3115000971</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </main>

    </div>
@endsection
