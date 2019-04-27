<li class="m-menu__item {{ setActive('bo-tx/dashboard') }}" aria-haspopup="true">
    <a href="{{route('boTx.index')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-analytics"></i>
        <span class="m-menu__link-text">Dashboard</span></a>
</li>
<li class="m-menu__item {{ setActive('bo-tx/tareas-abiertas') }}" aria-haspopup="true">
    <a href="{{route('boTx.tareasAbiertas')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-folder-1"></i>
        <span class="m-menu__link-text">Tareas Abiertas</span></a>
</li>
<li class="m-menu__item {{ setActive('bo-tx/sitios-reincidentes') }}" aria-haspopup="true">
    <a href="{{route('boTx.sitiosReincidentes')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-interface-4"></i>
        <span class="m-menu__link-text">Sitios Reincidentes</span></a>
</li>
<li class="m-menu__item {{ setActive('bo-tx/sitios-excluidos') }}" aria-haspopup="true">
    <a href="{{route('boTx.sitiosExcluidos')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-arrows"></i>
        <span class="m-menu__link-text">Sitios Excluidos</span></a>
</li>
<li class="m-menu__item {{ setActive('bo-tx/usuarios-grupos') }}" aria-haspopup="true">
    <a href="{{route('boTx.usuariosGrupos')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-users"></i>
        <span class="m-menu__link-text">Usuarios Y Grupos</span></a>
</li>
<li class="m-menu__item {{ setActive('mbo-tx/exportables') }}" aria-haspopup="true">
    <a href="{{route('boTx.export')}}" class="m-menu__link ">
        <span class="m-menu__item-here"></span>
        <i class="m-menu__link-icon flaticon-download"></i>
        <span class="m-menu__link-text">Exportables</span>
    </a>
</li>
