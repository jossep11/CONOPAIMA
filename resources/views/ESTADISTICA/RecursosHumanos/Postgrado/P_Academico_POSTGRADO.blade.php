<div class="card">
    <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div class="span-icon">
           <i class="fas fa-user-graduate"></i>


        </div>
        <div class="span-title">
           Personal Académico 
        </div>
        <div class="span-mode"></div>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
           
            <div class="Header_InsideCollapse">
                <div class="barra">
                <h1 id="tablax">Tabla de Datos del Personal Académico</h1>    
                <!-- Button trigger modal -->
                {{-- @role("user") --}}
                <a href="#" class="btn_agregar_azul" data-toggle="modal" data-target="#AgregarPersonalAcademico"> <i class="fas fa-plus"></i> <div> Añadir nuevo</div></a>
                {{-- @endrole --}}
                </div>
            </div>



   {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="AgregarPersonalAcademico" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Personal Académico</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form id="InsertPersonalAcademicoPostGrado" > 
                                    {{ csrf_field() }}

   
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="InputCod_InstitucionAcademico" placeholder="Ej:0000000284" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="pais_p_academicoAcademico" placeholder="Ej:296" required  pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Fecha">Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="Fecha_de_Ingreso" placeholder="Fecha de ingreso" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="CategoriaP_A">Categoría</label>
                                        <input type="text" class="form-control" name="Categoria" placeholder="2" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Documento_IDAcademico" required>

                                            <option selected>Seleccionar </option>
                                            <option value="C">C - Cédula</option>
                                            <option value="P">P - Pasaporte</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" id="NroCedula" name="NroCedulaA_O" placeholder="Ej:12345678"    pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TiempodeDedicacion">Tiempo de Dedicación</label>
                                        <input type="text" class="form-control" name="TiempoDedicacion" placeholder="1" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TiempoAcademico">Título Académico</label>
                                        <input type="text" class="form-control" name="TituloAcademico" placeholder="2" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Profesion">Profesión</label>
                                        <input type="text" class="form-control" name="ProfesionAcademico" placeholder="123" required pattern="\d*" title="Campo Numerico">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Adscripción">Adscripción</label>
                                        <input type="Adscripción" class="form-control" name="Adscripcion" placeholder="Salud Pública" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="NombresAcademico" placeholder="Ej: Raúl José" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="ApellidosA_O" placeholder="Ej:Briceño Roa" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Sexo_PersonalAcademico" required>

                                            <option selected>Seleccionar </option>
                                            <option value="0">0 - Masculino</option>
                                            <option value="1">1 - Femenino</option>
                                        </select>
                                       
                                    </div>

                                    
                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="FNacimientoAcademico" required>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="CondicionLaboral">Comentarios</label>
                                        <input type="text" class="form-control" name="Comentarios" placeholder="" required >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Cat_Inicial">Condicion Laboral</label>
                                        <input type="text" class="form-control" name="CondicionLaboralAcademico" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="butsavePost" >Añadir</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                       
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            

             <div class="table-responsive">
            <table id="basic-datatables0" class="basic-datatables display table table-striped table-hover table-boder-radius serial nowrap" style="width: 100%">
                <thead>
                    {{-- insertion of items --}}
                    <tr>
                        <th>Nº ítem</th>
                        <th>Codígo de la Institucaón</th>
                        <th>País</th>
                        <th>Documento de Identificación</th>
                        <th>Número de Cédula/Pasaporte</th>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Sexo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha de Ingreso</th>
                        <th>Condición Laboral</th>
                        <th>Categoría</th>
                        <th>Tiempo de Dedicación</th>
                        <th>Nivel de Instrucción Educativa</th>
                        <th>Capacitación</th>
                        <th>Comentarios</th>
                        <th>Adscripción</th>
                        {{-- @role("user") --}}
                        <th>Acciones</th>
                        {{-- @endrole --}}
                    </tr>
                </thead>
                {{--database data subtraction --}}
                <tbody>         
                {{-- Data extraction from database --}}
              
                @foreach($PersonalAcademicoPostGrado as $P_Academico)
                <tr>
                   <td class="nro_item_center" id="tr_">
                      <div id="" class="nro_item"> </div>
                    </td>
                       
                        <td>{{$P_Academico->InputCod_InstitucionAcademico}}</td>
                        <td>{{$P_Academico->pais_p_academicoAcademico}}</td>
                        <td>{{$P_Academico->Documento_IDAcademico}}</td>
                        <td>{{$P_Academico->NroCedulaA_O}}</td>
                        <td>{{$P_Academico->ApellidosA_O}}</td>
                        <td>{{$P_Academico->NombresAcademico}}</td>
                        <td>{{$P_Academico->Sexo_PersonalAcademico}}</td>
                        <td>{{$P_Academico->FNacimientoAcademico}}</td>
                        <td>{{$P_Academico->Fecha_de_Ingreso}}</td>
                        <td>{{$P_Academico->CondicionLaboralAcademico}}</td>
                        <td>{{$P_Academico->Categoria}}</td>
                        <td>{{$P_Academico->TiempoDedicacion}}</td>
                        <td>{{$P_Academico->TituloAcademico}}</td>
                        <td>{{$P_Academico->ProfesionAcademico}}</td>
                        <td>{{$P_Academico->Adscripcion}}</td>
                        <td>{{$P_Academico->Comentarios}}</td>
                       

                    
            {{-- @role("user") --}}
                    <td>
                        <form class="eliminar_P_Academico_Pregrado" action="{{route ('registro_p_postgrado.destroy', $P_Academico->id)}}" method="POST">
                        <div class="form-button-action">    
                        
                         <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editPersonalAcademicoPostgrado{{$P_Academico->id}}"><i class="fa fa-edit"></i></a>
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-link btn-danger " title="Eliminar" type="submit" >
                            <i class="fa fa-times"></i>
                        </button>
                        
                        </div>
                        </form>
        
                    </td>
            {{-- @endrole --}}


                </tr>

                <div class="modal fade" id="editPersonalAcademicoPostgrado{{$P_Academico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modificar Personal Administrativo y Obrero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form class="PersonAdPostG" action="{{route('registro_p_postgrado.update', $P_Academico->id)}}"  method="POST"> 
                                    {{ csrf_field() }}  {{   method_field('PUT')   }}
    
                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="InputCod_Institucion">Código de la institución</label>
                                            <input type="text" class="form-control" name="EditInputCod_InstitucionAcademico" placeholder="Ej:0000000284" required value="{{$P_Academico->InputCod_InstitucionAcademico}}"  pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Pais">País</label>
                                            <input type="text" class="form-control" name="Editpais_p_academicoAcademico" placeholder="Ej:296" required value="{{$P_Academico->pais_p_academicoAcademico}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Fecha">Fecha de ingreso</label>
                                            <input type="date" class="form-control" name="EditFecha_de_Ingreso" placeholder="Fecha de ingreso" required value="{{$P_Academico->Fecha_de_Ingreso}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="CategoriaP_A">Categoría</label>
                                            <input type="text" class="form-control" name="EditCategoria" placeholder="2" required value="{{$P_Academico->Categoria}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Documento_ID">Documento de Identificación</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="EditDocumento_IDAcademico" required >
    
                                                <option value="{{$P_Academico->Documento_IDAcademico}}">{{$P_Academico->Documento_IDAcademico}} </option>
                                                <option value="C">C - Cédula</option>
                                                <option value="P">P - Pasaporte</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                            <input type="text" class="form-control" id="NroCedula" name="EditNroCedulaA_O" placeholder="Ej:12345678"   value="{{$P_Academico->NroCedulaA_O}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TiempodeDedicacion">Tiempo de Dedicación</label>
                                            <input type="text" class="form-control" name="EditTiempoDedicacion" placeholder="1" required value="{{$P_Academico->TiempoDedicacion}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TiempoAcademico">Título Académico</label>
                                            <input type="text" class="form-control" name="EditTituloAcademico" placeholder="2" required value="{{$P_Academico->TituloAcademico}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Profesion">Profesión</label>
                                            <input type="text" class="form-control" name="EditProfesionAcademico" placeholder="123" required value="{{$P_Academico->ProfesionAcademico}}" pattern="\d*" title="Campo Numerico">
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="Adscripción">Adscripción</label>
                                            <input type="Adscripción" class="form-control" name="EditAdscripcion" placeholder="Salud Pública" required  value="{{$P_Academico->Adscripcion}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Nombres">Nombres</label>
                                            <input type="text" class="form-control" name="EditNombresAcademico" placeholder="Ej: Raúl José" required  value="{{$P_Academico->NombresAcademico}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Apellidos">Apellidos</label>
                                            <input type="text" class="form-control" name="EditApellidosA_O" placeholder="Ej:Briceño Roa" required value="{{$P_Academico->ApellidosA_O}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Sexo</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="EditSexo_PersonalAcademico" required >
    
                                                <option value="{{$P_Academico->Sexo_PersonalAcademico}}"> {{$P_Academico->Sexo_PersonalAcademico}} </option>
                                                <option value="0">0 - Masculino</option>
                                                <option value="1">1 - Femenino</option>
                                            </select>
                                           
                                        </div>
    
                                        
                                        <div class="form-group col-md-6">
                                            <label for="FNacimiento">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" name="EditFNacimientoAcademico" required value="{{$P_Academico->FNacimientoAcademico}}">
                                        </div>
    
    
                                        <div class="form-group col-md-6">
                                            <label for="CondicionLaboral">Comentarios</label>
                                            <input type="text" class="form-control" name="EditComentarios" placeholder="" required value="{{$P_Academico->Comentarios}}" >
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Cat_Inicial">Condicion Laboral</label>
                                            <input type="text" class="form-control" name="EditCondicionLaboralAcademico" placeholder="1" required value="{{$P_Academico->CondicionLaboralAcademico}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                    </div>
    
                
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info" >Guardar cambios</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
    
                @endforeach
            
            


                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<script>


    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

    
     $('#InsertPersonalAcademicoPostGrado').on('submit', function(e) {
        e.preventDefault();
       
        let InputCod_InstitucionAcademico = $('input[name=InputCod_InstitucionAcademico]').val();
        let pais_p_academicoAcademico = $('input[name=pais_p_academicoAcademico]').val();        
        let Fecha_de_Ingreso = $('input[name=Fecha_de_Ingreso]').val();
        let Categoria = $('input[name=Categoria]').val();
        let Documento_IDAcademico = $('select[name=Documento_IDAcademico]').val();
        let NroCedulaA_O = $('input[name=NroCedulaA_O]').val();
        let TiempoDedicacion = $('input[name=TiempoDedicacion]').val();
        let TituloAcademico = $('input[name=TituloAcademico]').val();
        let ProfesionAcademico = $('input[name=ProfesionAcademico]').val();
        let Adscripcion = $('input[name=Adscripcion]').val();
        let NombresAcademico = $('input[name=NombresAcademico]').val();
        let ApellidosA_O = $('input[name=ApellidosA_O]').val();
        let Sexo_PersonalAcademico = $('select[name=Sexo_PersonalAcademico]').val();
        let FNacimientoAcademico = $('input[name=FNacimientoAcademico]').val();
        let Comentarios = $('input[name=Comentarios]').val();
        let CondicionLaboralAcademico = $('input[name=CondicionLaboralAcademico]').val();
       
        console.log(InputCod_InstitucionAcademico);
        
    
          /*  $("#butsave").attr("disabled", "disabled"); */
            $.ajax({
                url:"{{route('add.PersonalAcademicoPostGrado')}}",
                type: "POST",
                data: {
                    InputCod_InstitucionAcademico: InputCod_InstitucionAcademico,
                    pais_p_academicoAcademico:pais_p_academicoAcademico,
                    Fecha_de_Ingreso:Fecha_de_Ingreso,
                    Categoria:Categoria,
                    Documento_IDAcademico:Documento_IDAcademico,
                    NroCedulaA_O:NroCedulaA_O,
                    TiempoDedicacion:TiempoDedicacion,
                    TituloAcademico:TituloAcademico,
                    ProfesionAcademico:ProfesionAcademico,
                    Adscripcion:Adscripcion,
                    NombresAcademico:NombresAcademico,
                    ApellidosA_O:ApellidosA_O,
                    Sexo_PersonalAcademico:Sexo_PersonalAcademico,
                    FNacimientoAcademico:FNacimientoAcademico,  
                    Comentarios:Comentarios,
                    CondicionLaboralAcademico:CondicionLaboralAcademico,

                  
                },
    
                success:function(response){
                    console.log(response)
                    
                    swal({
                    title: "Excelente!",
                    text: "La información se ha actualizado de forma correcta!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Ok",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                           
                        }
                    }
                }).then((redir)=>
                {
                        window.location.replace("/registro_p_postgrado"); 
                });
                    
                    
                }, 
                    error:function(error){
                    console.log(error)
                   // alert('data no saved');
                }    
         });
    });

    $('.PersonAdPostG').submit(function(e){
        
        e.preventDefault();
        swal({
                    title: "Excelente!",
                    text: "La información se ha actualizado de forma correcta!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Ok",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                           
                        }
                    }
                }).then((redir)=>
                {
                        this.submit();
                });

})

    $('.eliminar_P_Academico_Pregrado').submit(function(e){
        e.preventDefault();
        swal({
            title: '¿Está seguro que desea borrar este registro?',
            text: "¡No pódras revertir esta acción!",
            type: 'warning',
            buttons:{
                confirm: {
                    text : 'Sí, Borrar',
                    className : 'btn btn-info'
                },
                cancel: {
                    visible: true,
                    text : 'No, cancelar!',
                    className: 'btn btn-danger'
                }
            }
            
        }).then((willDelete) => {
            if (willDelete) {
                swal("Registro borrado", {
                    icon: "success",
                    buttons : {
                        confirm : {
                            visible: false,
                            className: 'btn btn-success'
                        }
                    }
                });
            this.submit();
            } else {
                //nothing happes
            }
        });

    });




</script>