@csrf
@foreach ($errors->all() as $error)
    <p class="text-danger form_error">{{$error}}</p>
@endforeach

<div class="row mb-3">
    <label class="form-label col-sm-2 col-form-label" for="fullname">Nombre Completo</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname"  value="{{ old('fullname') }} @isset($trabjador){{ $trabajador->nombreCompleto }}@endisset">
    </div>
</div>
<div class="row mb-3">
    <label class="form-label col-sm-2 col-form-label" for="run" >RUN</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="run" name="run" value="{{ old('run') }} @isset($trabajador){{ $trabajador->rut }}@endisset">
    </div>
</div>
<div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label" for="direccion">Dirección</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }} @isset($trabajador){{ $trabajador->direccion }}@endisset">
    </div>
</div>
<div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label" for="fecha_nac">Fecha de nacimiento</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="{{ old('fecha_nac') }} @isset($trabajador){{ $trabajador->fecha_nac }}@endisset">
    </div>
</div>
{{-- <div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">Estado Civil</label>
    <div class="col-sm-10">
        <div class="form-radio">
            <div class="radio radiofill radio-primary radio-inline">
                <label class="form-label">
                    <input type="radio" name="estado_civil" value="Casado"
                    @isset($trabajador)
                        @if($trabajador->estadoCivil === 'Casado') checked
                        @endif
                    @endisset data-bv-field="member">
                    <i class="helper"></i>Casado
                </label>
            </div>
            <div class="radio radiofill radio-primary radio-inline">
                <label class="form-label">
                    <input type="radio" name="estado_civil" value="Soltero"
                    @isset($trabajador)
                        @if($trabajador->estadoCivil === 'Soltero') checked
                        @endif
                    @endisset data-bv-field="member">
                    <i class="helper"></i>Soltero
                </label>
            </div>

        </div>
        <span class="messages"></span>
    </div>
</div> --}}
{{-- <div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">Genero del dueño</label>
    <div class="col-sm-10">
        <div class="form-radio">
            <div class="radio radiofill radio-primary radio-inline">
                <label class="form-label">
                    <input type="radio" name="manager_gender" value="masculino"
                    @isset($company)
                        @if($company->gender === 'masculino') checked
                        @endif
                    @endisset data-bv-field="member">
                    <i class="helper"></i>Masculino
                </label>
            </div>
            <div class="radio radiofill radio-primary radio-inline">
                <label class="form-label">
                    <input type="radio" name="manager_gender" value="femenino"
                    @isset($company)
                        @if($company->companygender === 'femenino') checked
                        @endif
                    @endisset data-bv-field="member">
                    <i class="helper"></i>Femenino
                </label>
            </div>
            <div class="radio radiofill radio-primary radio-inline">
                <label class="form-label">
                    <input type="radio" name="manager_gender" value="otro"
                    @isset($company)
                        @if($company->companygender === 'otro') checked
                        @endif
                    @endisset data-bv-field="member">
                    <i class="helper"></i>Otro
                </label>
            </div>
        </div>
        <span class="messages"></span>
    </div>
</div> --}}
{{-- <div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">RUT</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="rut" name="rut"
            placeholder="Utilice el formato 12345678-9" value="{{old('rut')}}@isset($company){{ $company->rut }}@endisset">
    </div>
</div> --}}

<div class="mb-3 row">
    {{-- <input type="hidden" id="sector" value="@isset($company){{ $company->business_sector }}@endisset"> --}}
    <label class="form-label col-sm-2 col-form-label">Selecciona estado civil</label>
    <div class="col-sm-10">
        <select name="estado_civil" class="form-control">
            <option value="#" selected disabled>--Seleccionar--
            </option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Conviviente">Conviviente</option>
            <option value="Separado(a)">Separado(a)</option>
            <option value="Viudo(a)">Viudo(a)</option>
            <option value="Soltero(a)">Soltero(a)</option>
        </select>
        <script>

        </script>
    </div>
</div>
{{-- <div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">Selecciona Comuna</label>
    <input type="hidden" value="@isset($company){{ $company->state }}@endisset" id="state">
    <div class="col-sm-10">
        <select name="comuna" class="form-control">
            <option value="#" selected disabled>--Seleccionar--
            </option>
            <option value="copiapo">Copiapó</option>
            <option value="caldera">Caldera</option>
            <option value="tierra amarilla">Tierra amarilla</option>
            <option value="chañaral">Chañaral</option>
            <option value="diego de almagro">Diego de almagro</option>
            <option value="vallenar">Vallenar</option>
            <option value="huasco">Huasco</option>
            <option value="alto del carmen">Alto del carmen</option>
            <option value="freirina">Freirina</option>

        </select>
    </div>
</div> --}}
<div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">Correo</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }} @isset($trabajador){{ $trabajador->email }}@endisset">
    </div>
</div>
<div class="mb-3 row">
    <label class="form-label col-sm-2 col-form-label">Fono</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="fono" id="fono" value="{{ old('fono') }} @isset($trabajador){{ $trabajador->fono }}@endisset">
    </div>
</div>

<div class="col-md-12" style="display: flex; justify-content: flex-end; gap: 5px">
    <a href="{{ url('/trabajadores') }}"class="btn btn-warning btn-round waves-effect waves-light">Volver</a>
    <button class="btn btn-primary btn-round waves-effect waves-light" type="submit">Guardar</button>
</div>
