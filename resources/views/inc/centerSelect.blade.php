<select class="custom-select"  id="Cesi_id" class="form-control @error('Cesi_id') is-invalid @enderror" name="Cesi_id" value="{{ old('Cesi_id') }}" required autocomplete="Cesi_id" autofocus>  
        <option value="1">La Rochelle</option>
        <option value="2">Aix-en-provence</option>
        <option value="3">Angoulême</option>
        <option value="4">Arras</option>
        <option value="5">Bordeaux</option>
        <option value="6">Brest</option>
        <option value="7">Caen</option>
        <option value="8">Châteauroux</option>
        <option value="9">Dijon</option>
        <option value="10">Grenoble</option>
        <option value="11">Le mans</option>
        <option value="12">Lille</option>
        <option value="13">Lyon</option>
        <option value="14">Momptelier</option>
        <option value="15">Nancy</option>
        <option value="16">Nantes</option>
        <option value="17">Nice</option>
        <option value="18">Orléans</option>
        <option value="19">Paris-Nanterre</option>
        <option value="20">Pau</option>
        <option value="21">Reims</option>
        <option value="22">Rouen</option>
        <option value="23">Saint-Nazaire</option>
        <option value="24">Strasbourg</option>
        <option value="25">Toulouse</option>
    </select>

@error('Cesi_id')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror