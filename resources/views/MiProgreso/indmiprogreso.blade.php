
<link rel="stylesheet" href="/style/EMiProgreso/estiloresultados.css">
    <script defer src="main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"> 
    <title>MiNutriGym</title>


    @extends('HomeUsuario/indhomeusuario')
    @section('Mi-Progreso')

<div class="content-todoabso">

 <div class="Encabezadospro">
    <div class="contenedorPRO">
    <img src="img/imgMiPro/progreso.png" class="progreso">
    </div>
    <div class="contenedorPlan">
    <img src="img/imgMiPro/PlanD.png" class="planD">
    </div>
    
    <div class="contenedorcalen">
    <a href="/Mi-Progreso-Calendario" class="calendario">
    <img src="img/imgMiPro/NomC.png" class="calenNom">
    <br>
    <img src="img/imgMiPro//calendario.png" class="calenImag">
    </a>
    </div>
 </div>
    
    
 <div class="caja-madre">

    <div class="porcenCIR" style="--porcentaje: 30">

    <svg> 
        <circle r="140" cx="50%" cy="50%" pathlength="100"></circle>
        <circle r="140" cx="50%" cy="50%" pathlength="100"></circle>
    </svg>
    <div class="infoKcal">
    <span class="info">403/1,651</span>
    <br>
    <p class="info k">Kcal</p>
    </div>
    </div>
 
    <div class="caja-padre">

        <div class="contenedor">
            <h2 class="por">PORCENTAJE</h2>
            <div class="detalles">
                <div class="porcentaje">
                    <span>PROTEINAS</span>
                    <span>50%</span>
                </div>

                <div class="menu">
                    <div id="prot-menu"></div>
                </div>
            </div>

            <div class="detalles">
                <div class="porcentaje">
                    <span>CARBOIDRATOS</span>
                    <span>40%</span>
                </div>

                <div class="menu">
                    <div id="carbs-menu"></div>
                </div>
            </div>

            <div class="detalles">
                <div class="porcentaje">
                    <span>GRASAS</span>
                    <span>30%</span>
                </div>

                <div class="menu">
                    <div id="grasas-menu"></div>
                </div>
            </div>
        </div> {{-- cierre contenedor --}}
    </div> {{--  cierre caja-padre --}}
 </div> {{-- cierre caja madre--}}

     <div class="comida">
        <img src="img/imgMiPro/desayuno2.png" class="desayuno" >
     </div>
    <div id="formList">
        <div id="list">
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/avena2.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Avena (3 cuacharadas)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>19 Kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.3g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>3.4g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.7g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/huevos2.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">1 unidad (55 g) de Huevo</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>79 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td> 5.2g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>0.4g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>6.9g</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                </label>
                <img src="img/imgMiPro/queso2.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Queso Genérico</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>89 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>7g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>0.7g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>5.7g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/yogur.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">1 taza (240 ml) de Yogur</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>110 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>3.4g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>11.5g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>8.7g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/Manzana.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Manzana Genérico</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>83 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.3g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>22.1g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.4g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/piña.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Piña Genérico</td>
                        <tr> 
                            <td>calorias</td>
                            <td>43 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.1g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>11.2g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.5g</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> {{--cierre formlist (1)--}}

    
    <div class="direction">
        <button id="prev"> < </button>
        <button id="next"> > </button>
    </div>

    <div class="comida">
        <img src="img/imgMiPro/almuerzo.png" class="desayuno" >
    </div>
    <div id="formList">
        <div id="list">
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/pollo.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">1 palma (100 g) de Pollo</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>120 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>2.6g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>0g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>22.5g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/lentejas.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Lentejas Cocidas (1 taza)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>323 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>13.25g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>36.71g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>16.44g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/ensalada.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Ensalada de Lechuga con Verduras 
                        </td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>12 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.12g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>2.77g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.63g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/Arroz integral.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Arroz Integral (1 taza, cocido)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>215 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>1.74g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>44.42g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>4,99g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/naranja.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Jugo de Naranja (1 taza)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>112 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.5g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>25.79g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>25.79g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/aguacates.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Aguacate (1 )</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>322 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>29.47g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>17.15g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>4.02g</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> {{--cierre formlist (2)--}}

    
    <div class="direction">
        <button id="prev"> < </button>
        <button id="next"> > </button>
    </div>

    <div class="comida">
        <img src="img/imgMiPro/cena.png" class="desayuno" >
    </div>
     <div id="formList">
        <div id="list">
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/crema verduras.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Crema de Verduras</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>64 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>3.45g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>6.31g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>2.13g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/pescado.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Pescado Plancha</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>110 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>1.18 g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>0.24g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>22.73g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/Almendras.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                            <tr>
                            </tr>
                            <td colspan="2" class="nameGroup">Almendras (1 )</td>
                            <tr>
                          
                            <td>calorias</td>
                            <td>7 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>0.61 g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>0.24g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.26g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/galletas.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Galleta (1 pequeña)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>24 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>1.07 g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>3.45g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>0.27g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                     <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPro/sandwich.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Sándwich Integral de Jamón 1 mitad (70 g)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>160 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>7.7g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>14.6g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>8.1g</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="item">
                <label class="mycheckbox">
                    <input type="checkbox" name="">
                    <span>
                      <i class="fas fa-check on"></i>
                      <i class="fas fa-times off"></i>
                    </span>
                 </label>
                <img src="img/imgMiPRo/yogur griego.jpg" class="avatar">
                <div class="content">
                    <table width="100%" cellspacing="0">
                        <tr>
                        </tr>
                        <td colspan="2" class="nameGroup">Yogur Griego (100 g)</td>
                        <tr>
                            
                            <td>calorias</td>
                            <td>117 kcal</td>
                        </tr>
                        <tr>
                            <td>Grasas</td>
                            <td>9.19 g</td>
                        </tr>
                        <tr>
                            <td>Carbohidratos</td>
                            <td>5.04g</td>
                        </tr>
                        <tr>
                            <td>Proteinas</td>
                            <td>4.05g</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> {{--cierre formlist (3)--}}

    
    <div class="direction">
        <button id="prev"> < </button>
        <button id="next"> > </button>
    </div>
    <script src="script.js"></script>

</div>
@endsection