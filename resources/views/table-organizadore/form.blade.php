<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" value="{{ old('Nombre', $tableOrganizadore?->Nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('Nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="url" class="form-label">{{ __('Url') }}</label>
            <input type="file" name="url" accept="image/*" class="form-control @error('url') is-invalid @enderror" value="{{ old('url', $tableOrganizadore?->url) }}" id="url" placeholder="Url">
            {!! $errors->first('url', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="lider" class="form-label">{{ __('Lider') }}</label>
            <input type="text" name="Lider" class="form-control @error('Lider') is-invalid @enderror" value="{{ old('Lider', $tableOrganizadore?->Lider) }}" id="lider" placeholder="Lider">
            {!! $errors->first('Lider', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="equipo" class="form-label">{{ __('Equipo') }}</label>
            <input type="text" name="Equipo" class="form-control @error('Equipo') is-invalid @enderror" value="{{ old('Equipo', $tableOrganizadore?->Equipo) }}" id="equipo" placeholder="Equipo">
            {!! $errors->first('Equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Añadir') }}</button>
    </div>
</div>