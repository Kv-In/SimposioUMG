<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $tableExpositore?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="Apellidos" class="form-control @error('Apellidos') is-invalid @enderror" value="{{ old('Apellidos', $tableExpositore?->Apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('Apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto" class="form-label">{{ __('Foto') }}</label>
            <input type="file" name="foto" accept="image/*" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto', $tableExpositore?->foto) }}" id="foto" placeholder="Foto">
            {!! $errors->first('foto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="Correo" class="form-control @error('Correo') is-invalid @enderror" value="{{ old('Correo', $tableExpositore?->Correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('Correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" value="{{ old('Telefono', $tableExpositore?->Telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('Telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="facebook" class="form-label">{{ __('Facebook') }}</label>
            <input type="text" name="Facebook" class="form-control @error('Facebook') is-invalid @enderror" value="{{ old('Facebook', $tableExpositore?->Facebook) }}" id="facebook" placeholder="Facebook">
            {!! $errors->first('Facebook', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="git_hub" class="form-label">{{ __('Github') }}</label>
            <input type="text" name="GitHub" class="form-control @error('GitHub') is-invalid @enderror" value="{{ old('GitHub', $tableExpositore?->GitHub) }}" id="git_hub" placeholder="Github">
            {!! $errors->first('GitHub', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="instagram" class="form-label">{{ __('Instagram') }}</label>
            <input type="text" name="Instagram" class="form-control @error('Instagram') is-invalid @enderror" value="{{ old('Instagram', $tableExpositore?->Instagram) }}" id="instagram" placeholder="Instagram">
            {!! $errors->first('Instagram', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="x" class="form-label">{{ __('X') }}</label>
            <input type="text" name="X" class="form-control @error('X') is-invalid @enderror" value="{{ old('X', $tableExpositore?->X) }}" id="x" placeholder="X">
            {!! $errors->first('X', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Añadir') }}</button>
    </div>
</div>