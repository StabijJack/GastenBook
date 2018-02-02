<div class="form-group">
    {!! form::label('name','Naam:') !!} 
    {!! form::text('name', null, ['class' => 'form-controle','required'=>true]) !!}
</div>
<div class="form-group">
    {!! form::label('bericht','Bericht:') !!} 
    {!! form::textarea('bericht', null, ['class' => 'form-controle','required'=>true]) !!}
</div>
<div class="form-group">
    {!! form::label('email','Email:') !!} 
    {!! form::text('email', null, ['class' => 'form-controle','required'=>true]) !!}
</div>
<div class="form-group">
    {!! form::label('telefoonnummer','Telefoonnummer:') !!} 
    {!! form::text('telefoonnummer', null, ['class' => 'form-controle']) !!}
</div>
<div class="form-group">
    {!! form::label('foto','Foto:') !!} 
    {!! form::file('foto', ['class' => 'form-controle']) !!}
</div>
<div class="form-group">
    {!! form::label('maillist','schrijven in mailinglist? ') !!} 
    {!! form::checkbox('maillist', 0, ['class' => 'form-controle']) !!}
</div>