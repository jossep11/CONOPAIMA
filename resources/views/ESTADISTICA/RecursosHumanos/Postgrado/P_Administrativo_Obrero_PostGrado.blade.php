<div class="card">
    <div class="card-header" id="headingFour" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
        <div class="span-icon">
            <i class="fas fa-user-tie"></i>


        </div>
        <div class="span-title">
           Personal Administrativo y Obrero 
        </div>
        <div class="span-mode"></div>
    </div>

    <div id="collapsefour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
        <div class="card-body">
           
            <div class="Header_InsideCollapse">
                <div class="barra">
                <h1 id="tablax">Tabla de Datos del Personal Administrativo y Obrero</h1>    
                <!-- Button trigger modal -->
                {{-- @role("user") --}}
                <a href="#" class="btn_agregar_azul" data-toggle="modal" data-target="#AgregarPersonalAdministrativoObreroPostgr"> <i class="fas fa-plus"></i> <div> Añadir nuevo</div></a>
                {{-- @endrole --}}
                </div>
            </div>



   {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="AgregarPersonalAdministrativoObreroPostgr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Personal Administrativo y Obrero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form id="InsertPersonalAcademicoPostGrado_" > 
                                    {{ csrf_field() }}

   
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="InputCod_InstitucionAcademicoPost" placeholder="Ej:0000000284" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="pais_p_academicoAcademicoPost" placeholder="Ej:296" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Documento_IDAcademicoPost" required>

                                            <option selected>Seleccionar </option>
                                            <option value="C">C - Cédula</option>
                                            <option value="P">P - Pasaporte</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" id="NroCedula" name="NroCedulaA_OPost" placeholder="Ej:12345678"   pattern="\d*" title="Campo Numerico" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="NombresAcademicoPost" placeholder="Ej: Raúl José" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="ApellidosA_OPost" placeholder="Ej:Briceño Roa" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Sexo_PersonalAcademicoPost" required>

                                            <option selected>Seleccionar </option>
                                            <option value="0">0 - Masculino</option>
                                            <option value="1">1 - Femenino</option>
                                        </select>
                                       
                                    </div>
             
                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="FNacimientoAcademicoPost" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Fecha">Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="Fecha_de_IngresoPost" placeholder="Fecha de ingreso" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Cat_Inicial">Condicion Laboral</label>
                                        <input type="text" class="form-control" name="CondicionLaboralAcademicoPost" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Dependencia">Nombre de la Dependencia Administrativa</label>
                                        <input type="text" class="form-control" name="DependenciaAdministrativaA_OPost" placeholder="RRHH" title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TipoPersonal">Tipo de Personal</label>
                                        <input type="text" class="form-control" name="TipoPersonalA_OPost" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="TiempodeDedicacion">Nivel de Instrucción Educativa</label>
                                        <input type="text" class="form-control" name="NivelInstruccionEducA_OPost" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                         
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Adscripción">Capacitación</label>
                                        <input type="Adscripción" class="form-control" name="CapacitacionA_OPost" placeholder="Salud Pública" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Comentarios">Comentarios</label>
                                        <input type="text" class="form-control" name="ComentariosPost" placeholder="" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                </div>


                                    <div class="modal-footer">
                                        <button type="submit" value="holis" class="btn btn-primary" id="butsavePost_Obrero" >Añadir</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                       
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            

             <div class="table-responsive">
            <table id="basic-datatables1" class="basic-datatables display table table-striped table-hover table-boder-radius serial nowrap" style="width: 100%">
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
                        <th>Nombre de la Dependencia Administrativa</th>
                        <th>Tipo de Personal</th>
                        <th>Nivel de Instrucción Educativa</th>
                        <th>Capacitación</th>
                        <th>Comentarios</th>
                    {{-- @role("user") --}}
                        <th>Acciones</th>
                     {{-- @endrole --}}
                    </tr>
                </thead>
                {{--database data subtraction --}}
                <tbody>         
                {{-- Data extraction from database --}}
              
                @foreach($PersonalAdm_ObreroPostgrado as $P_Academico)
                <tr>
                   <td class="nro_item_center" id="tr_">
                      <div id="" class="nro_item1"> </div>
                    </td>
                       
                        <td>{{$P_Academico->InputCod_InstitucionA_O}}</td>
                        <td>{{$P_Academico->pais_p_academicoA_O}}</td>
                        <td>{{$P_Academico->Documento_IDA_O}}</td>
                        <td>{{$P_Academico->NroCedulaA_O}}</td>
                        <td>{{$P_Academico->ApellidosA_O}}</td>
                        <td>{{$P_Academico->NombresA_O}}</td>
                        <td>{{$P_Academico->Sexo_PersonalA_O}}</td>
                        <td>{{$P_Academico->FNacimientoA_O}}</td>
                        <td>{{$P_Academico->Fecha_de_Ingreso}}</td>
                        <td>{{$P_Academico->CondicionLaboralA_O}}</td>
                        <td>{{$P_Academico->DependenciaAdministrativa}}</td>
                        <td>{{$P_Academico->TipoPersonal}}</td>
                        <td>{{$P_Academico->NivelInstruccionEduc}}</td>
                        <td>{{$P_Academico->Capacitacion}}</td>
                        <td>{{$P_Academico->Comentarios}}</td>
             
                       

                    
                    {{-- @role("user") --}}
                    <td>
                        <form class="eliminar_P_Academico_Pregrado" action="{{route ('registro_paobrero_postgrado.destroy', $P_Academico->id)}}" method="POST">
                        <div class="form-button-action">    
                        
                         <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editPersonalObrero_Postgrado{{$P_Academico->id}}"><i class="fa fa-edit"></i></a>
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

                <div class="modal fade" id="editPersonalObrero_Postgrado{{$P_Academico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modificar Personal Administrativo y Obrero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
 
                        
                                <form class="edit_personlobrero" action="{{route('registro_paobrero_postgrado.update', $P_Academico->id)}}"  method="POST"> 
                                    {{ csrf_field() }}  {{   method_field('PUT')   }}
    
                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="InputCod_Institucion">Código de la institución</label>
                                            <input type="text" class="form-control" name="Edit_InputCod_InstitucionAcademicoPost" placeholder="Ej:0000000284" required value="{{$P_Academico->InputCod_InstitucionA_O}}">
                                        </div>
    

            
                                        
                                        <div class="form-group col-md-6">
                                            <label for="Pais">País</label>
                                            <input type="text" class="form-control" name="Edit_pais_p_academicoAcademicoPost" placeholder="Ej:296" required value="{{$P_Academico->pais_p_academicoA_O}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Documento_ID">Documento de Identificación</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="Edit_Documento_IDAcademicoPost" required>
    
                                                <option value="{{$P_Academico->Documento_IDA_O}}">{{$P_Academico->Documento_IDA_O}} </option>
                                                <option value="C">C - Cédula</option>
                                                <option value="P">P - Pasaporte</option>
                                            </select>
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                            <input type="text" class="form-control" id="NroCedula" name="Edit_NroCedulaA_OPost" placeholder="Ej:12345678"  required value="{{$P_Academico->NroCedulaA_O}}" >
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Nombres">Nombres</label>
                                            <input type="text" class="form-control" name="Edit_NombresAcademicoPost" placeholder="Ej: Raúl José" required value="{{$P_Academico->NombresA_O}}" >
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Apellidos">Apellidos</label>
                                            <input type="text" class="form-control" name="Edit_ApellidosA_OPost" placeholder="Ej:Briceño Roa" required value="{{$P_Academico->ApellidosA_O}}" >
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Sexo</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="Edit_Sexo_PersonalAcademicoPost" required >
    
                                                <option value="{{$P_Academico->Sexo_PersonalA_O}}">{{$P_Academico->Sexo_PersonalA_O}}</option>
                                                <option value="0">0 - Masculino</option>
                                                <option value="1">1 - Femenino</option>
                                            </select>
                                           
                                        </div>
                 
                                        <div class="form-group col-md-6">
                                            <label for="FNacimiento">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" name="Edit_FNacimientoAcademicoPost" required value="{{$P_Academico->FNacimientoA_O}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Fecha">Fecha de ingreso</label>
                                            <input type="date" class="form-control" name="Edit_Fecha_de_IngresoPost" placeholder="Fecha de ingreso" required  value="{{$P_Academico->Fecha_de_Ingreso}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Cat_Inicial">Condicion Laboral</label>
                                            <input type="text" class="form-control" name="Edit_CondicionLaboralAcademicoPost" placeholder="1" required value="{{$P_Academico->CondicionLaboralA_O}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Dependencia">Nombre de la Dependencia Administrativa</label>
                                            <input type="text" class="form-control" name="Edit_DependenciaAdministrativaA_OPost" placeholder="RRHH" required value="{{$P_Academico->DependenciaAdministrativa}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TipoPersonal">Tipo de Personal</label>
                                            <input type="text" class="form-control" name="Edit_TipoPersonalA_OPost" placeholder="1" required value="{{$P_Academico->TipoPersonal}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TiempodeDedicacion">Nivel de Instrucción Educativa</label>
                                            <input type="text" class="form-control" name="Edit_NivelInstruccionEducA_OPost" placeholder="1" value="{{$P_Academico->NivelInstruccionEduc}}">
                                        </div>
    
                             
                                        
                                        <div class="form-group col-md-6">
                                            <label for="Adscripción">Capacitación</label>
                                            <input type="Adscripción" class="form-control" name="Edit_CapacitacionA_OPost" placeholder="Salud Pública" required value="{{$P_Academico->Capacitacion}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Comentarios">Comentarios</label>
                                            <input type="text" class="form-control" name="Edit_ComentariosPost" placeholder="" required value="{{$P_Academico->Comentarios}}">
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

    
     $('#InsertPersonalAcademicoPostGrado_').on('submit', function(e) {
        e.preventDefault();
       
        let InputCod_InstitucionAcademico = $('input[name=InputCod_InstitucionAcademicoPost]').val();
        let pais_p_academicoAcademico = $('input[name=pais_p_academicoAcademicoPost]').val();        
        let Documento_IDAcademico = $('select[name=Documento_IDAcademicoPost]').val();
        let NroCedulaA_O = $('input[name=NroCedulaA_OPost]').val();
        let NombresAcademico = $('input[name=NombresAcademicoPost]').val();
        let ApellidosA_O = $('input[name=ApellidosA_OPost]').val();
        let Sexo_PersonalAcademico = $('select[name=Sexo_PersonalAcademicoPost]').val();
        let FNacimientoAcademico = $('input[name=FNacimientoAcademicoPost]').val();
        let Fecha_de_Ingreso = $('input[name=Fecha_de_IngresoPost]').val();
        let CondicionLaboralAcademico = $('input[name=CondicionLaboralAcademicoPost]').val();
        let DependenciaAdministrativa = $('input[name=DependenciaAdministrativaA_OPost]').val();
        let TipoPersonal = $('input[name=TipoPersonalA_OPost]').val();
        let NivelInstruccionEduc = $('input[name=NivelInstruccionEducA_OPost]').val();
        let Capacitacion = $('input[name=CapacitacionA_OPost]').val();
        let Comentarios = $('input[name=ComentariosPost]').val();

       
        console.log(InputCod_InstitucionAcademico);
        
            $.ajax({
                url:"{{route('add.admpost')}}",
                type: "POST",
                data: {
                    InputCod_InstitucionAcademico:InputCod_InstitucionAcademico,
                    pais_p_academicoAcademico:pais_p_academicoAcademico,
                    Documento_IDAcademico:Documento_IDAcademico,
                    NroCedulaA_O:NroCedulaA_O,
                    NombresAcademico:NombresAcademico,
                    ApellidosA_O:ApellidosA_O,
                    Sexo_PersonalAcademico:Sexo_PersonalAcademico,
                    FNacimientoAcademico:FNacimientoAcademico,
                    Fecha_de_Ingreso:Fecha_de_Ingreso,
                    CondicionLaboralAcademico:CondicionLaboralAcademico,
                    DependenciaAdministrativa:DependenciaAdministrativa,
                    TipoPersonal:TipoPersonal,
                    NivelInstruccionEduc:NivelInstruccionEduc,
                    Capacitacion:Capacitacion,
                    Comentarios:Comentarios,
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

    

    $('.edit_personlobrero').submit(function(e){
        
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


</script>