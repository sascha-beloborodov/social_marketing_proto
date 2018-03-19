<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Reach Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reach', 'Reach:') !!}
    {!! Form::number('reach', null, ['class' => 'form-control']) !!}
</div>

<!-- Impressions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('impressions', 'Impressions:') !!}
    {!! Form::number('impressions', null, ['class' => 'form-control']) !!}
</div>

<!-- Clicks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clicks', 'Clicks:') !!}
    {!! Form::number('clicks', null, ['class' => 'form-control']) !!}
</div>

<!-- Likes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('likes', 'Likes:') !!}
    {!! Form::number('likes', null, ['class' => 'form-control']) !!}
</div>

<!-- Shares Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shares', 'Shares:') !!}
    {!! Form::number('shares', null, ['class' => 'form-control']) !!}
</div>

<!-- Group In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_in', 'Group In:') !!}
    {!! Form::number('group_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Site Visits Field -->
<div class="form-group col-sm-6">
    {!! Form::label('site_visits', 'Site Visits:') !!}
    {!! Form::number('site_visits', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchase Intentions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_intentions', 'Purchase Intentions:') !!}
    {!! Form::number('purchase_intentions', null, ['class' => 'form-control']) !!}
</div>

<!-- Transactions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transactions', 'Transactions:') !!}
    {!! Form::number('transactions', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content_type_id', 'Content Type Id:') !!}
    {!! Form::number('content_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Period Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('period_id', 'Period Id:') !!}
    {!! Form::number('period_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchase Model Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchase_model_id', 'Purchase Model Id:') !!}
    {!! Form::number('purchase_model_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Social Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('social_id', 'Social Id:') !!}
    {!! Form::number('social_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
