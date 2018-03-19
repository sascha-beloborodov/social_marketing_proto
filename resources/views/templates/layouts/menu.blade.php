<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{!! route('posts.index') !!}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('periods*') ? 'active' : '' }}">
    <a href="{!! route('periods.index') !!}"><i class="fa fa-edit"></i><span>Periods</span></a>
</li>

<li class="{{ Request::is('contentTypes*') ? 'active' : '' }}">
    <a href="{!! route('contentTypes.index') !!}"><i class="fa fa-edit"></i><span>Content Types</span></a>
</li>

<li class="{{ Request::is('purchaseModels*') ? 'active' : '' }}">
    <a href="{!! route('purchaseModels.index') !!}"><i class="fa fa-edit"></i><span>Purchase Models</span></a>
</li>

<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-edit"></i><span>Socials</span></a>
</li>

