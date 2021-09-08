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
                @role("user")
                <a href="#" class="btn_agregar_azul" data-toggle="modal" data-target="#AgregarPersonalAcademico"> <i class="fas fa-plus"></i> <div> Añadir nuevo</div></a>
                @endrole
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
                        
                                <form id="InsertPersonalAcademico" > 
                                    {{ csrf_field() }}

   
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="InputCod_Institucion">Código de la institución</label>
                                        <input type="text" class="form-control" name="InputCod_Institucion" placeholder="Ej:0000000284" required  pattern="\d*" title="Campo Numerico">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Fecha">Fecha de ingreso</label>
                                        <input type="date" class="form-control" name="Fecha_Ingreso" placeholder="Fecha de ingreso" required >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Pais">País</label>
                                        <input type="text" class="form-control" name="pais_p_academico" placeholder="Ej:296" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="CondicionLaboral">Condición Laboral</label>
                                        <input type="text" class="form-control" name="CondicionLaboral" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Documento_ID">Documento de Identificación</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Documento_ID" required>

                                            <option selected>Seleccionar </option>
                                            <option value="C">C - Cédula</option>
                                            <option value="P">P - Pasaporte</option>
                                        </select>

                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                        <input type="text" class="form-control" id="NroCedula" name="NroCedula" placeholder="Ej:12345678" disabled  >
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="CategoriaP_A">Categoría</label>
                                        <input type="text" class="form-control" name="CategoriaP_A" placeholder="2" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Cat_Inicial">Categória Inicial</label>
                                        <input type="text" class="form-control" name="Cat_Inicial" placeholder="1" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Nombres">Nombres</label>
                                        <input type="text" class="form-control" name="Nombres_P_Academico" placeholder="Ej: Raúl José" required title="Campo Textual" pattern="[A-Za-z\s]*">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Apellidos">Apellidos</label>
                                        <input type="text" class="form-control" name="Apellidos" placeholder="Ej:Briceño Roa" required title="Campo Textual" pattern="[A-Za-z\s]*">
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
                                        <label for="inputPassword4">Sexo</label>
                                        <select  class="custom-select my-1 mr-sm-2" name="Sexo_PersonalAcademico" required>

                                            <option selected>Seleccionar </option>
                                            <option value="0">0 - Masculino</option>
                                            <option value="1">1 - Femenino</option>
                                        </select>
                                       
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Profesion">Profesión</label>
                                        <input type="text" class="form-control" name="Profesion" placeholder="123" required pattern="\d*" title="Campo Numerico">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="FNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="FNacimiento" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="Adscripción">Adscripción</label>
                                        <input type="Adscripción" class="form-control" name="Adscripción" placeholder="Salud Pública" required>
                                    </div>

                                </div>


                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="butsave" >Añadir</button>
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
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Sexo</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha de Ingreso</th>
                        <th>Condición Laboral</th>
                        <th>Categoría</th>
                        <th>Categoría Inicial</th>
                        <th>Tiempo de Dedicación</th>
                        <th>Título Académico</th>
                        <th>Profesión</th>
                        <th>Adscripción</th>
                        @role("user")
                        <th>Acciones</th>
                        @endrole
                    </tr>
                </thead>
                {{--database data subtraction --}}
                <tbody>         
                {{-- Data extraction from database --}}
              
                @foreach($PersonalAcademico as $P_Academico)
                <tr>
                   <td class="nro_item_center" id="tr_">
                      <div id="" class="nro_item"> </div>
                    </td>
                       
                        <td>{{$P_Academico->Institucion_code}}</td>
                        <td>{{$P_Academico->Pais}}</td>
                        <td>{{$P_Academico->Documento_De_Identificacion}}</td>
                        <td>{{$P_Academico->CI}}</td>
                        <td>{{$P_Academico->Nombres}}</td>
                        <td>{{$P_Academico->Apellidos}}</td>
                        <td>{{$P_Academico->Sexo}}</td>
                        <td>{{$P_Academico->Fecha_Nacimiento}}</td>
                        <td>{{$P_Academico->Fecha_Ingreso}}</td>
                        <td>{{$P_Academico->Condicion_Laboral}}</td>
                        <td>{{$P_Academico->Categoria}}</td>
                        <td>{{$P_Academico->Categoria_Inicial}}</td>
                        <td>{{$P_Academico->Tiempo_Dedicacion}}</td>
                        <td>{{$P_Academico->TituloAcademico}}</td>
                        <td>{{$P_Academico->Profesion}}</td>
                        <td>{{$P_Academico->Adscripcion}}</td>                   
                    
                    @role("user")
                    <td>
                        <form class="eliminar_P_Academico_Pregrado" action="{{route ('pa_pregrado.destroy', $P_Academico->id)}}" method="POST">
                        <div class="form-button-action">    
                        
                         <a href="#" class="btn btn-link btn-primary" title="Editar" data-toggle="modal"  data-target="#editPersonalAcademicoPre{{$P_Academico->id}}"><i class="fa fa-edit"></i></a>
                          
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-link btn-danger " title="Eliminar" type="submit" >
                            <i class="fa fa-times"></i>
                        </button>
                        
                        </div>
                        </form>
        
                    </td>
                    @endrole


                </tr>

                <div class="modal fade" id="editPersonalAcademicoPre{{$P_Academico->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modificar Personal Administrativo y Obrero</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div class="modal-body">
                        
                                <form class="PersonalAdmyObreroE" action="{{route('pa_pregrado.update', $P_Academico->id)}}"  method="POST"> 
                                    {{ csrf_field() }}  {{   method_field('PUT')   }}
    
                
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="InputCod_Institucion">Código de la institución</label>
                                            <input type="text" class="form-control" name="UpdateInputCod_Institucion" placeholder="Ej: 0000000284"   value="{{$P_Academico->Institucion_code}}" pattern="\d*" title="Campo Numerico">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="Fecha">Fecha de ingreso</label>
                                            <input type="date" class="form-control" name="editFecha_Ingreso" placeholder="Fecha de ingreso" required  value="{{$P_Academico->Fecha_Ingreso}}" >
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Pais">País</label>
                                            <input type="text" class="form-control" name="editpais_p_academico" placeholder="Ej:296" required  value="{{$P_Academico->Pais}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="CondicionLaboral">Condición Laboral</label>
                                            <input type="text" class="form-control" name="editCondicionLaboral" placeholder="1" required  value="{{$P_Academico->Condicion_Laboral}}"    pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Documento_ID">Documento de Identificación</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="editDocumento_ID" required >
    
                                                <option value="{{$P_Academico->Documento_De_Identificacion}}">{{$P_Academico->Documento_De_Identificacion}} </option>
                                                <option value="C">C - Cédula</option>
                                                <option value="P">P - Pasaporte</option>
                                            </select>
    
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="NroCedula">Número de Cédulo/Pasaporte</label>
                                            <input type="text" class="form-control" id="NroCedula" name="editNroCedula" placeholder="Ej:12345678"    value="{{$P_Academico->CI}}"   pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="CategoriaP_A">Categoría</label>
                                            <input type="text" class="form-control" name="editCategoriaP_A" placeholder="2" required  value="{{$P_Academico->Categoria}}"  pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Cat_Inicial">Categória Inicial</label>
                                            <input type="text" class="form-control" name="editCat_Inicial" placeholder="1" required  value="{{$P_Academico->Categoria_Inicial}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Nombres">Nombres</label>
                                            <input type="text" class="form-control" name="editNombres_P_Academico" placeholder="Ej: Raúl José" required  value="{{$P_Academico->Nombres}}"   title="Campo Textual" pattern="[A-Za-z\s]*">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Apellidos">Apellidos</label>
                                            <input type="text" class="form-control" name="editApellidos" placeholder="Ej:Briceño Roa" required  value="{{$P_Academico->Apellidos}}"  title="Campo Textual" pattern="[A-Za-z\s]*">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TiempodeDedicacion">Tiempo de Dedicación</label>
                                            <input type="text" class="form-control" name="editTiempoDedicacion" placeholder="1" value="{{$P_Academico->Tiempo_Dedicacion}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="TiempoAcademico">Título Académico</label>
                                            <input type="text" class="form-control" name="editTituloAcademico" placeholder="2" value="{{$P_Academico->TituloAcademico}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Sexo</label>
                                            <select  class="custom-select my-1 mr-sm-2" name="editSexo_PersonalAcademico" required  >
    
                                                <option value="{{$P_Academico->Sexo}}" >{{$P_Academico->Sexo}} </option>
                                                <option value="0">0 - Masculino</option>
                                                <option value="1">1 - Femenino</option>
                                            </select>
                                           
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Profesion">Profesión</label>
                                            <input type="text" class="form-control" name="editProfesion" placeholder="123" required  value="{{$P_Academico->Profesion}}" pattern="\d*" title="Campo Numerico">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="FNacimiento">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control" name="editFNacimiento" required  value="{{$P_Academico->Fecha_Nacimiento}}">
                                        </div>
    
                                        <div class="form-group col-md-6">
                                            <label for="Adscripción">Adscripción</label>
                                            <input type="Adscripción" class="form-control" name="editAdscripción" placeholder="Salud Pública" required  value="{{$P_Academico->Adscripcion}}" title="Campo Textual" pattern="[A-Za-z\s]*">
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

    
     $('#InsertPersonalAcademico').on('submit', function(e) {
        e.preventDefault();
       
        let InputCod_Institucion = $('input[name=InputCod_Institucion]').val();
        let Fecha_Ingreso = $('input[name=Fecha_Ingreso]').val();        
        let CondicionLaboral = $('input[name=CondicionLaboral]').val();
        let Documento_ID = $('select[name=Documento_ID]').val();
        let CategoriaP_A = $('input[name=CategoriaP_A]').val();
        let NroCedula = $('input[name=NroCedula]').val();
        let Cat_Inicial = $('input[name=Cat_Inicial]').val();
        let Nombres_P_Academico = $('input[name=Nombres_P_Academico]').val();
        let Apellidos = $('input[name=Apellidos]').val();
        let TiempoDedicacion = $('input[name=TiempoDedicacion]').val();
        let TituloAcademico = $('input[name=TituloAcademico]').val();
        let Sexo_PersonalAcademico = $('select[name=Sexo_PersonalAcademico]').val();
        let Profesion = $('input[name=Profesion]').val();
        let FNacimiento = $('input[name=FNacimiento]').val();
        let Adscripcion = $('input[name=Adscripción]').val();
        let Pais = $('input[name=pais_p_academico]').val();
        
        
        //console.log(FNacimiento);
        
    
          /*  $("#butsave").attr("disabled", "disabled"); */
            $.ajax({
                url:"{{route('add.PersonalAcademicoPregrado')}}",
                type: "POST",
                data: {
                    InputCod_Institucion: InputCod_Institucion,
                    CondicionLaboral:CondicionLaboral,
                    Documento_ID:Documento_ID,
                    CategoriaP_A:CategoriaP_A,
                    NroCedula:NroCedula,
                    Cat_Inicial:Cat_Inicial,
                    Nombres_P_Academico:Nombres_P_Academico,
                    Apellidos:Apellidos,
                    TiempoDedicacion:TiempoDedicacion,
                    TituloAcademico:TituloAcademico,
                    Sexo_PersonalAcademico:Sexo_PersonalAcademico,
                    Profesion:Profesion,
                    FNacimiento:FNacimiento,
                    Adscripcion:Adscripcion,  
                    Pais:Pais,
                    Fecha_Ingreso:Fecha_Ingreso,

                  
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
                   // alert('data no saved');
                }    
         });
    });

    $('.PersonalAdmyObreroE').submit(function(e){
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