<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/assets/backend/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ahmet Emin ŞİT</div>
                <div class="email">sitahmetemin@hotmail.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profil</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Çıkış Yap</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">Ana Yönlendirmeler</li>
                {{--Side Bar Aktif blömü--}}
                <li class="active">
                    <a href="/admin">
                        <i class="material-icons">home</i>
                        <span>Anasayfa</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/oteller">
                        <i class="material-icons">build</i>
                        <span>Oteller</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/mekanlar">
                        <i class="material-icons">home</i>
                        <span>Mekanlar</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/yemekler">
                        <i class="material-icons">home</i>
                        <span>Yemekler</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/ayarlar">
                        <i class="material-icons">build</i>
                        <span>Ayarlar</span>
                    </a>
                </li>
                {{--Açılır Liste--}}
                {{--<li class="active">--}}
                    {{--<a href="javascript:void(0);" class="menu-toggle">--}}
                        {{--<i class="material-icons">content_copy</i>--}}
                        {{--<span>Example Pages</span>--}}
                    {{--</a>--}}
                    {{--<ul class="ml-menu">--}}
                        {{--<li class="active">--}}
                            {{--<a href="../../pages/examples/blank.html">Blank Page</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="../../pages/examples/404.html">404 - Not Found</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2017 <a href="javascript:void(0);">Ahmet Emin ŞİT</a>.
            </div>
            <div class="version">
                <b>Versiyon: </b> 1.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
    @include('backend.block.rightSideBar')
</section>