@section('left-menu')
    <div class="left side-menu side-menu-sm">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class="has_sub">
                        <a href="{{ route('timeLine') }}" class="waves-effect"><i class="fa fa-home"></i> <span> Início </span> </a>
                    </li>

                    <!--<li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-graduation-cap"></i> <span> Planos de estudos </span> </a>
                    </li>-->

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-film"></i> <span> Séries </span>  </a>
                    </li>

                    <!--<li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-comments "></i> <span> Sugestões </span>  </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="ti-help"></i> <span> Suporte </span>  </a>
                    </li>-->

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection