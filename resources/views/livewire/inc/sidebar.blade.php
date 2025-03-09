<div>
    <div class="navbar-brand-box"> <a href="https://ecaptcha.sieuthicode.net/" class="logo logo-dark">  </a> <button type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover"> <i
                class="ri-record-circle-line"></i> </button> </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"> </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>MENU</span></li>
                <li class="nav-item"> <a class="nav-link menu-link active"
                        href="/"> <i class="menu-icon"> <img width="100%"
                                src="/template/assets/img/icon-house.png">
                        </i> <span>VPS</span> </a> </li>
                <li class="nav-item"> <a class="nav-link menu-link" href="#sidebarNapTien" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarNapTien"> <i class="menu-icon"> <img
                                width="100%" src="/template/assets/img/icon-payment.png"> </i>
                        <span>Nạp Tiền</span> </a>
                    <div class="collapse menu-dropdown " id="sidebarNapTien">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item"> <a href="{{ route('cn1') }}"
                                    class="nav-link ">Ngân Hàng</a> </li>
                                    <li class="nav-item"> <a href="{{ route('cn2') }}"
                                        class="nav-link ">VNPAY</a> </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div> <!-- Sidebar -->
    </div>
</div>
