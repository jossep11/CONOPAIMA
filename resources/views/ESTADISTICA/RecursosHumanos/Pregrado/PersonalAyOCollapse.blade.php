<div class="card">
    <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <div class="span-icon">
            <i class="fas fa-user-tie"></i>

        </div>
        <div class="span-title">
           Personal Administrativo y Obrero 
        </div>
        <div class="span-mode"></div>
    </div>

    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
           
            <div class="Header_InsideCollapse">
                <div class="barra">
                <h1 id="TablePersonalAO" >Tabla de Datos del Personal Administrativo y Obrero</h1>    
                <!-- Button trigger modal -->
                {{-- @role("user") --}}
                <a href="#" class="btn_agregar_azul" data-toggle="modal" data-target="#AgregarAdmyObrero"> <i class="fas fa-plus"></i> <div> Añadir nuevo</div></a>
                {{-- @endrole --}}
                </div>
            </div>



   {{-- llamado del modal --}}
                <!-- Modal data insertion  -->
                <div class="modal fade" id="AgregarAdmyObrero" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Añadir Personal Administrativo y Obrero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form id="InsertPersonalAdministrativoObrero" > 
                                    {{ csrf_field() }}

   
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="InputCod_InstitucionA_O" placeholder="Ej: 0000000284" required  pattern="\d*" title="Campo Numerico">
                                    </div>
                               
                                    <div class="form-group col-md-6">
                                        <label for="FIngreso">Fecha de Ingreso</label>
                                        <input type="date" class="form-control" name="FIngresoA_O" placeholder="Fecha de Ingreso" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="pais_p_academicoA_O" placeholder="Ej: 296" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="NombresA_O" placeholder="Ej: Raúl José" required   title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="ApellidosA_O" placeholder="Ej: Briceño Paredes" required  title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Sexo_PersonalA_O" required>

                                            <option selected>Seleccionar </option>
                                            <option value="0">0 - Masculino</option>
                                            <option value="1">1 - Femenino</option>
                                        </select>
                                       
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Documento_IDA_O" required>

                                            <option selected>Seleccionar </option>
                                            <option value="C">C - Cédula</option>
                                            <option value="P">P - Pasaporte</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" name="NroCedulaA_O" placeholder="Ej: 1234567" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="FNacimientoA_O" placeholder="Fecha de Nacimiento" required>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="ConLaboral">Condición Laboral</label>
                                        <input type="text" class="form-control" name="ConLaboralA_O" placeholder="Ej: 1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="DAministrativa">Nombre de la Dependencia Administrativa</label>
                                        <input type="text" class="form-control" name="DAministrativaA_O" placeholder="Ej: Presupuesto" required  title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="TipoPersonal">Tipo de Personal</label>
                                        <input type="text" class="form-control" name="TipoPersonalA_O" placeholder="Ej: 1" required pattern="\d*" title="Campo Numerico">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="NivelIEducativa">Nivel de Instrucción Educativa</label>
                                        <input type="text" class="form-control" name="NivelIEducativaA_O" placeholder="Ej: 3" required pattern="\d*" title="Campo Numerico">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Profesion">Profesión</label>
                                        <input type="text" class="form-control" name="ProfesionA_O" placeholder="Ej: 10" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Ocupacion">Ocupación</label>
                                        <input type="text" class="form-control" name="OcupacionA_O" placeholder="Ej: Planificador" required  title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Capacitación">Capacitación</label>
                                        <input type="text" class="form-control" name="CapacitacionA_O" placeholder="Ej: Cal Avanzado" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>
                                    


                                </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="butsavePAyO" >Añadir</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                       
                                    </div>
    
                                </form>
                            
                            </div>
                           
                        </div>
                    </div>
                </div>
            

{{-- Take a look --}}
                {{-- here add the tag table responsive --}}

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
                        <th>Profesión</th>
                        <th>Ocupación</th>
                        <th>Capacitación</th>
                        {{-- @role("user") --}}
                        <th>Acciones</th>
                        {{-- @endrole --}}
                    </tr>
                </thead>
                {{--database data subtraction --}}
                <tbody>         
                {{-- Data extraction from database --}}
              
                @foreach($PersonalAdm_Obrero as $P_Adm_Obrero)
                <tr>
                   <td class="nro_item_center" id="tr_">
                      <div id="" class="nro_item1"> </div>
                    </td>
                       
                        <td>{{$P_Adm_Obrero->InputCod_InstitucionA_O}}</td>
                        <td>{{$P_Adm_Obrero->pais_p_academicoA_O}}</td>
                        <td>{{$P_Adm_Obrero->Documento_IDA_O}}</td>
                        <td>{{$P_Adm_Obrero->NroCedulaA_O}}</td>
                        <td>{{$P_Adm_Obrero->ApellidosA_O}}</td>
                        <td>{{$P_Adm_Obrero->NombresA_O}}</td>
                        <td>{{$P_Adm_Obrero->Sexo_PersonalA_O}}</td>
                        <td>{{$P_Adm_Obrero->FNacimientoA_O}}</td>
                        <td>{{$P_Adm_Obrero->FIngresoA_O}}</td>
                        <td>{{$P_Adm_Obrero->ConLaboralA_O}}</td>
                        <td>{{$P_Adm_Obrero->DAministrativaA_O}}</td>
                        <td>{{$P_Adm_Obrero->TipoPersonalA_O}}</td>
                        <td>{{$P_Adm_Obrero->NivelIEducativaA_O}}</td>
                        <td>{{$P_Adm_Obrero->ProfesionA_O}}</td>
                        <td>{{$P_Adm_Obrero->OcupacionA_O}}</td>
                        <td>{{$P_Adm_Obrero->CapacitacionA_O}}</td>

                    {{-- @role("user") --}}
                     <td>
                        <form class="eliminar_P_Adm_Obrero_Pregrado" action="{{route ('pao_pregrado.destroy', $P_Adm_Obrero->id)}}" method="POST">
                        <div class="form-button-action">    
                        
                         <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#EditPersonalAdmyObrero{{$P_Adm_Obrero->id}}"><i class="fa fa-edit"></i></a>
                          
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-link btn-danger" title="Eliminar" type="submit" >
                            <i class="fa fa-times"></i>
                        </button>
                        
                        </div>
                        </form>
        
                    </td>
                    {{-- @endrole --}}


                </tr>

            {{-- edit modal --}}
            <div class="modal fade" id="EditPersonalAdmyObrero{{$P_Adm_Obrero->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modificar Personal Administrativo y Obrero</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                       
                        <div class="modal-body">
                    
                            <form class="PersonalAdmyObreroEdit_" action="{{route('pao_pregrado.update', $P_Adm_Obrero->id)}}"  method="POST"> 
                                {{ csrf_field() }}  {{   method_field('PUT')   }}

            
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="UpdateInputCod_InstitucionA_O" placeholder="Ej: 0000000284" required value="{{$P_Adm_Obrero->InputCod_InstitucionA_O}}"  pattern="\d*" title="Campo Numerico">
                                    </div>
                                                    
                               
                                    <div class="form-group col-md-6">
                                        <label for="FIngreso">Fecha de Ingreso</label>
                                        <input type="date" class="form-control" name="UpdateFIngresoA_O" placeholder="Fecha de Ingreso" required value="{{$P_Adm_Obrero->FIngresoA_O}}" >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="Updatepais_p_academicoA_O" placeholder="Ej: 296" required value="{{$P_Adm_Obrero->pais_p_academicoA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="UpdateNombresA_O" placeholder="Ej: Raúl José" required value="{{$P_Adm_Obrero->NombresA_O}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="UpdateApellidosA_O" placeholder="Ej: Briceño Paredes" required value="{{$P_Adm_Obrero->ApellidosA_O}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="UpdateSexo_PersonalA_O" required>

                                            <option value="{{$P_Adm_Obrero->Sexo_PersonalA_O}}" selected>{{$P_Adm_Obrero->Sexo_PersonalA_O}} </option>
                                            <option value="0">0 - Masculino</option>
                                            <option value="1">1 - Femenino</option>
                                        </select>
                                       
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="UpdateDocumento_IDA_O" required >

                                            
                                            <option value="{{$P_Adm_Obrero->Documento_IDA_O}}" selected>{{$P_Adm_Obrero->Documento_IDA_O}} </option>
                                            <option value="C">C - Cédula</option>
                                            <option value="P">P - Pasaporte</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" name="UpdateNroCedulaA_O" placeholder="Ej: 1234567" required value="{{$P_Adm_Obrero->NroCedulaA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="UpdateFNacimientoA_O" placeholder="Fecha de Nacimiento" required value="{{$P_Adm_Obrero->FNacimientoA_O}}">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="ConLaboral">Condición Laboral</label>
                                        <input type="text" class="form-control" name="UpdateConLaboralA_O" placeholder="Ej: 1" required value="{{$P_Adm_Obrero->ConLaboralA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="DAministrativa">Nombre de la Dependencia Administrativa</label>
                                        <input type="text" class="form-control" name="UpdateDAministrativaA_O" placeholder="Ej: Presupuesto" required value="{{$P_Adm_Obrero->DAministrativaA_O}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="TipoPersonal">Tipo de Personal</label>
                                        <input type="text" class="form-control" name="UpdateTipoPersonalA_O" placeholder="Ej: 1" required value="{{$P_Adm_Obrero->TipoPersonalA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="NivelIEducativa">Nivel de Instrucción Educativa</label>
                                        <input type="text" class="form-control" name="UpdateNivelIEducativaA_O" placeholder="Ej: 3" required value="{{$P_Adm_Obrero->NivelIEducativaA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Profesion">Profesión</label>
                                        <input type="text" class="form-control" name="UpdateProfesionA_O" placeholder="Ej: 10" value="{{$P_Adm_Obrero->ProfesionA_O}}" pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Ocupacion">Ocupación</label>
                                        <input type="text" class="form-control" name="UpdateOcupacionA_O" placeholder="Ej: Planificador" required value="{{$P_Adm_Obrero->OcupacionA_O}}" title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="Capacitación">Capacitación</label>
                                        <input type="text" class="form-control" name="UpdateCapacitacionA_O" placeholder="Ej: Cal Avanzado" required value="{{$P_Adm_Obrero->CapacitacionA_O}}">
                                    </div>
                                
                               
                                </div>


            
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info" id="EditPersonalAdmyObrero" >Guardar cambios</button>
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

<script>


    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    


    
     $('#InsertPersonalAdministrativoObrero').on('submit', function(e) {
        e.preventDefault();


        
          let  InputCod_InstitucionA_O =$ ('input[name=InputCod_InstitucionA_O]').val();
          let  pais_p_academicoA_O =$ ('input[name=pais_p_academicoA_O]').val();
          let  Documento_IDA_O =$ ('select[name=Documento_IDA_O]').val();
          let  NroCedulaA_O =$ ('input[name=NroCedulaA_O]').val();
          let  NombresA_O =$ ('input[name=NombresA_O]').val();
          let  ApellidosA_O =$ ('input[name=ApellidosA_O]').val();
          let  Sexo_PersonalA_O =$ ('select[name=Sexo_PersonalA_O]').val();
          let  FNacimientoA_O =$ ('input[name=FNacimientoA_O]').val();
          let  FIngresoA_O =$ ('input[name=FIngresoA_O]').val();
          let  ConLaboralA_O =$ ('input[name=ConLaboralA_O]').val();
          let  DAministrativaA_O =$ ('input[name=DAministrativaA_O]').val();
          let  TipoPersonalA_O =$ ('input[name=TipoPersonalA_O]').val();
          let  NivelIEducativaA_O =$ ('input[name=NivelIEducativaA_O]').val();
          let  ProfesionA_O =$ ('input[name=ProfesionA_O]').val();
          let  OcupacionA_O =$ ('input[name=OcupacionA_O]').val();
          let  CapacitacionA_O =$ ('input[name=CapacitacionA_O]').val();
                  
        

        
    
          /*  $("#butsave").attr("disabled", "disabled"); */
            $.ajax({
                url:"{{route('add.PaoPregrado')}}",
                type: "POST",
                data: {
                    InputCod_InstitucionA_O:InputCod_InstitucionA_O,
                    pais_p_academicoA_O:pais_p_academicoA_O,
                    Documento_IDA_O:Documento_IDA_O,
                    NroCedulaA_O:NroCedulaA_O,
                    NombresA_O:NombresA_O,
                    ApellidosA_O:ApellidosA_O,
                    Sexo_PersonalA_O:Sexo_PersonalA_O,
                    FNacimientoA_O:FNacimientoA_O,
                    FIngresoA_O:FIngresoA_O,
                    ConLaboralA_O:ConLaboralA_O,
                    DAministrativaA_O:DAministrativaA_O,
                    TipoPersonalA_O:TipoPersonalA_O,
                    NivelIEducativaA_O:NivelIEducativaA_O,
                    ProfesionA_O:ProfesionA_O,
                    OcupacionA_O:OcupacionA_O,
                    CapacitacionA_O:CapacitacionA_O,

                  
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
                        window.location.replace("/pa_pregrado"); 
                });
                    
                }, 
                    error:function(error){
                    console.log(error)
                    alert('data no saved');
                }    
         });
    });

    $('.eliminar_P_Adm_Obrero_Pregrado').submit(function(e){
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


    $('.PersonalAdmyObreroEdit_').submit(function(e){
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